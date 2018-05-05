if(window.location.pathname == '/users') {
    $(document).ready(function() {
    	$('[data-masked]').inputmask();

        //Load selects...
    	helpers.loadSelect('/api/loadRoleSelect/', '', $('#role_id'), 'User Type');
    	helpers.loadSelect('/api/loadDepartmentSelect/', '', $('#department_id'), 'Department');

    	$('#department_id').attr('disabled', true);

        //Disable department if role is information...
    	$('#role_id').on('select2:select', function() {
    		if($(this).val() == 2 || $(this).val() == 3) {
	    		$('#department_id').removeAttr('disabled');
	    	}else {
	    		$('#department_id').attr('disabled', true);
	    		$('#department_id').val('').trigger('change');
	    	}
    	});

        //Submit add new user form...
    	$('#form-user').on('submit', function(e) {
            e.preventDefault();
            axios.post('/users', $(this).serialize())
            .then(response =>  {
                helpers.showNotification('New user added.', 'success', 'fa fa-check');
                clearForm();
                $('#table-user').DataTable().ajax.reload(null, false);
            })
            .catch(error => {
                helpers.displayErrors(error.response.data.errors, 'Failed to add user.',);
                console.log(error.response.data.errors)
            });
        });

        //Edit selected department...
        $('#table-user').on('click', '#user-edit', function() {
            let id = this.value;
            let url = 'users/' + id + '/edit';
            $("#modal-user-edit .modal-content").load(url);
            $("#modal-user-edit").modal("show");   
        });

        //Load user information for editing...
        $('#modal-user-edit').on('shown.bs.modal', function() {
            axios.get('/api/loadRoleSelect')
            .then(function(response) {
                $('#role_id_edit').select2({
                    placeholder: 'Select User Type',
                    data: response.data,
                    theme: 'bootstrap',
                })
                $('#role_id_edit').val($('#role_temp').val()).trigger('change.select2');
            })
            .catch(function(error) {
                console.log(error);
            });

            axios.get('/api/loadDepartmentSelect')
            .then(function(response) {
                $('#department_id_edit').select2({
                    placeholder: 'Select Department',
                    data: response.data,
                    theme: 'bootstrap',
                })
                $('#department_id_edit').val($('#dept_temp').val()).trigger('change.select2');
            })
            .catch(function(error) {
                console.log(error);
            });
            $('#form-user-edit').parsley();

            $('input').change(function() {
                $(this).val($(this).val().toUpperCase());
            });
            $('[data-masked]').inputmask();
        });

        //Submit update user form...
        $('#modal-user-edit').on('submit', '#form-user-edit', function(e) {
            e.preventDefault();
            let id = $('#user-update').val();
            let data = $("#form-user-edit").serialize();
            console.log(data);
            axios.put('users/'+id, data)
            .then(response =>  {
                helpers.showNotification('User updated.', 'success', 'fa fa-check');
                $('#modal-user-edit').modal('hide');
                $('#table-user').DataTable().ajax.reload(null, false);
            })
            .catch(error => {
                helpers.showNotification('Failed to update user.', 'danger', 'fa fa-times');
                console.log(error)
            });
        });

        //Clear form...
        $('#user-clear').click(function() {
        	helpers.showNotification('Form has been cleared.', 'info', 	'fa fa-undo');
        	clearForm();
        });

        $('#role_id').on('select2:select', function(e) {
            $(this).parsley().reset();
        });

        $('#department_id').on('select2:select', function(e) {
            $(this).parsley().reset();
        });

        $('input').not('#email, #username, #password, #confirm_password').change(function() {
            $(this).val($(this).val().toUpperCase());
        });
	});

	function clearForm() {
		$('#form-user')[0].reset();
		$('#form-user').parsley().reset();
		$('#department_id').attr('disabled', true);
        $('select').val('').trigger('change');
	}
}