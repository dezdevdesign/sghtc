if(window.location.pathname == '/patients/create') {
    $(document).ready(function() {
        //Initialize elements...
        initElements();
        helpers.loadSelect('/api/loadPatientSelect/', '', $('#patient_name'), 'Patient');
        helpers.loadSelect('/api/provinces/', '', $('#province'), 'Province');
        helpers.loadSelect('/api/loadDoctorSelect', '', $('#preferred_doctor'), 'Preferred Doctor');

        $('[data-masked]').inputmask();

        //Show patient selection if old patient...
        $('#patient_name').attr('disabled', true);

        //Generate patient number...
        var unique_id = (new Date().getTime());
        $('#patient_number').val(unique_id);
        
        $('#form-patient').on('submit', function(e) {
            e.preventDefault();
            if($('input[name=patient_type]:checked').val() == 'NEW') {
                let formData = $(this).serializeArray();
                
                //Separate datetime for database...
                var date = $('#date_time').data('DateTimePicker').date()._d;
                formData.push({ name: 'date', value: moment(date).format('YYYY-MM-DD')});
                formData.push({ name: 'time', value: moment(date).format('HH:mm:ss')});

                //Replace address ID to text...
                helpers.replaceFormData(formData, 'province', $('#province').select2('data')[0].text);
                helpers.replaceFormData(formData, 'municipality', $('#municipality').select2('data')[0].text);
                helpers.replaceFormData(formData, 'barangay', $('#barangay').select2('data')[0].text);

                axios.post(window.location.origin + '/patients/createNew', helpers.getFormData(formData))
                .then(response =>  {
                    helpers.showNotification('New patient added.', 'success', 'fa fa-check');
                    clearForm();
                    helpers.loadSelect('/api/loadPatientSelect/', '', $('#patient_name'), 'Patient');
                    $('#patient_number').val((new Date().getTime()))
                })
                .catch(error => {
                    helpers.showNotification('Failed to add patient.', 'danger', 'fa fa-times');
                    console.log(error)
                });
            }else {
                let formData = $(this).serializeArray();

                //Separate datetime for database...
                var date = $('#date_time').data('DateTimePicker').date()._d;
                formData.push({ name: 'date', value: moment(date).format('YYYY-MM-DD')});
                formData.push({ name: 'time', value: moment(date).format('HH:mm:ss')});

                axios.post(window.location.origin + '/patients/createOld', helpers.getFormData(formData))
                .then(response =>  {
                    helpers.showNotification('New patient added.', 'success', 'fa fa-check');
                    clearForm();
                    $('#patient_number').val((new Date().getTime()))
                })
                .catch(error => {
                    helpers.showNotification('Failed to add patient.', 'danger', 'fa fa-times');
                    console.log(error)
                });
            }
        });

        //Page Javascripts and JQuery...
        $('#patient-clear').on('click', function() {
            helpers.showNotification('Form has been cleared.', 'info', 'fa fa-undo');
            clearForm();
            $('#patient_number').val(unique_id);
        });

        $('input[type=radio][name=patient_type]').change(function() {
            if ($(this).val() == 'NEW') {
                $('#patient_name').attr('disabled', true);
                clearForm();
                $('#patient_number').val((new Date().getTime()));
                $('#patient_name').val('').trigger('change');
                $(':input').not('#div-type :input, #div-admission :input').removeAttr('disabled');
            }
            else if ($(this).val() == 'OLD') {
                $('#patient_name').removeAttr('disabled');
                $('#form-patient').parsley().reset();
                $('#patient_number').val('');
                $('#patient_name').val('').trigger('change');
                $(':input').not('#div-type :input, #div-admission :input, #patient_number').attr('disabled', true);
            }
        });

        $('#patient_name').on('change', function() {
            if($(this).val() != null) {
                getPatientInformation($(this).val());
            }
        });
        
        //Load municipalities on change...
        $('#province').on("change", function(e) { 
            if($(this).val()) {
                helpers.loadSelect(window.location.origin + '/api/cities/', $(this).val(), $('#city'), 'Municipality');
                $('#barangay').empty().trigger('change');
            }
            $(this).parsley().reset();
        });

        //Load barangays on change...
        $('#city').on("change", function(e) { 
            if($(this).val()) {
                helpers.loadSelect(window.location.origin + '/api/barangays/', $(this).val(), $('#barangay'), 'Barangay');
            }
            $(this).parsley().reset();
        });

        //Parsley error removal...
        removeParsleyErrors();

        //Set all forms to uppercase...
        $('input').change(function() {
            $(this).val($(this).val().toUpperCase());
        });
    });

    function getPatientInformation(patientID) {
        axios.get('/api/loadPatientInformation/' + patientID)
        .then(function(response) {
            let patient = response.data;
            $('#patient_number').val(patient.id);
            $('#last_name').val(patient.last_name);
            $('#first_name').val(patient.first_name);
            $('#middle_name').val(patient.middle_name);
            $('[name=gender]').val([patient.gender]);
            $('#street_number').val(patient.street_number);
            $('#province').val(getOptId(patient.province, $('#province'))).change();
            setTimeout(function() {
                $('#municipality').val(getOptId(patient.municipality, $('#municipality'))).trigger('change');
            }, 1000);
            setTimeout(function() {
                $('#barangay').val(getOptId(patient.barangay, $('#barangay'))).trigger('change');
            }, 2000);
            $('#zip').val(patient.zip);
            $('#religion').val(getOptId(patient.religion, $('#religion'))).trigger('change');
            $('#nationality').val(getOptId(patient.nationality, $('#nationality'))).trigger('change');
            $('#occupation').val(patient.occupation);
            $('#birth_date').val(patient.birth_date);
            $('#age').val(patient.age);
            $('#birth_place').val(patient.birth_place);
            $('#civil_status').val(getOptId(patient.civil_status, $('#civil_status'))).trigger('change');
            $('#blood_group').val(getOptId(patient.blood_group, $('#blood_group'))).trigger('change');
            $('#contact').val(patient.contact);
            $('#other_address').val(patient.other_address);
            $('#emergency_name').val(patient.emergency_name);
            $('#relationship').val(patient.relationship);
            $('#emergency_address').val(patient.emergency_address);
            $('#emergency_contact').val(patient.emergency_contact);
        })
        .catch(function(error) {
            console.log(error);
        });
    }

    function getOptId(text, element) {
      let id = '';
      element.find('*').filter(function() {
        if ($(this).text() === text) {
          id = $(this).val();
        }
      });
      return id;
    }

    function initElements() {
        //Select2 init...
        $('#religion').select2({
            theme: 'bootstrap',
            placeholder: 'Select Religion'
        });

        $('#nationality').select2({
            theme: 'bootstrap',
            placeholder: 'Select Nationality'
        });

        $('#civil_status').select2({
            theme: 'bootstrap',
            placeholder: 'Select Civil Status'
        });

        $('#blood_group').select2({
            theme: 'bootstrap',
            placeholder: 'Select Blood Group'
        });

        $('#municipality').select2({
            theme: 'bootstrap',
            placeholder: 'Select Municipality'
        });

        $('#barangay').select2({
            theme: 'bootstrap',
            placeholder: 'Select Barangay'
        });

        //Datetimepicker init...
        $('#birth_date').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            format: 'L',
            viewMode: 'years'
        });
        $('#date_time').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
    }

    //Parsley error removal...
    function removeParsleyErrors() {
        $('#barangay').on('select2:select', function(e) {
            $(this).parsley().reset();
        });

        $('#nationality').on('select2:select', function(e) {
            $(this).parsley().reset();
        });

        $('#birth_date').on('dp.change', function(e) {
            $(this).parsley().reset();
        });

        $('#civil_status').on('select2:select', function(e) {
            $(this).parsley().reset();
        });

        $('#nationality').on('select2:select', function(e) {
            $(this).parsley().reset();
        });

        $('#blood_group').on('select2:select', function(e) {
            $(this).parsley().reset();
        })

        $('#preferred_doctor').on('select2:select', function(e) {
            $(this).parsley().reset();
        })

        $('#date_time').on('dp.change', function(e) {
            $(this).parsley().reset();
        })
    }

    function clearForm() {
        $('#form-patient')[0].reset();
        $('#form-patient').parsley().reset();
        $('select').val('').trigger('change');
        $('#municipality').empty().trigger('change');
        $('#barangay').empty().trigger('change');
    }
}