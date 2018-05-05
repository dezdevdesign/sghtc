$(document).ready(function() {
	initDataTables();

	// View patients record on workbench...
	$('#table-appointments').on('click', '#appointment-view', function() {
		let id = this.value;
	    let url = 'appointment/' + id;
	    $('#modal-appointment-record .modal-content').load(url);
	    $('#modal-appointment-record').modal('show');   
	});

	$('#table-all-appointments').on('click', '#all-appointment-view', function() {
		let id = this.value;
	    let url = 'appointment/' + id;
	    $('#modal-appointment-record .modal-content').load(url);
	    $('#modal-appointment-record').modal('show');   
	});

	// Edit patient appointment...
	$('#table-appointments').on('click', '#appointment-edit', function() {
		let id = this.value;
	    let url = 'appointment/' + id + '/edit';
	    $('#modal-appointment-edit .modal-content').load(url);
	    $('#modal-appointment-edit').modal('show');   
	});

	$('#table-all-appointments').on('click', '#all-appointment-edit', function() {
		let id = this.value;
	    let url = 'appointment/' + id + '/edit';
	    $('#modal-appointment-edit .modal-content').load(url);
	    $('#modal-appointment-edit').modal('show');   
	});


	$('#modal-appointment-edit').on('shown.bs.modal', function() {
		$('#date_edit').datetimepicker({
	        format: 'YYYY-MM-DD'
	    });

	    $('#time_edit').datetimepicker({
	        format: 'LT'
	    });
	});


    $('#modal-appointment-record').on('submit', '#form-soap', function(e) {
        e.preventDefault()
        let id = $('#soap-update').val();
        let data = $("#form-soap").serialize();
        axios.put('soap/'+id, data)
        .then(response => {
            helpers.showNotification('Department updated.', 'success', 'fa fa-check');
            $("#modal-department-edit").modal('hide');
            $('#table-department').DataTable().ajax.reload();
        })
        .catch(error => {
             helpers.showNotification('Failed to add department.', 'danger', 'fa fa-times');
             console.log(error);
        });    
    });
});


//Functions....
function initDataTables() {
	$('#table-all-appointments').DataTable({
		serverSide: true,
		processing: true,
		ajax: {
			url :"/allAppointed",
			type: "GET",
			data: function(data) {
	            for (var i = 0, len = data.columns.length; i < len; i++) {
	                if (!data.columns[i].search.value) delete data.columns[i].search;
	                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
	                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
	                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
	            }
	            delete data.search.regex;
	    	}
	    },
	    columns :[
	        {name: "patients.id", data: "patient_id", title: "Patient No.", orderable: true, searchable: true},
	        {name: "patient_name", data: "patient_name", title: "Patient Name", orderable: true, searchable: true},
	        {name: "appointments.date", data: "date", title: "Date", orderable: true, searchable: true},
	        {name: "appointments.time", data: "time", title: "Time", orderable: true,  searchable: true},
	        {name: "appointments.status", data: "status", title: "Status", orderable: true,  searchable: true},
	        {defaultContent: "", data: "action", name: "action", title: "Action", render: null, orderable: false, searchable: false}
	    ],
	    paging: true,
	    info: true,
	    responsive: true,
	    oLanguage: {
	    	sSearch: "Search all columns:",
	    	sLengthMenu: "_MENU_ records per page",
	    	info: "Showing page _PAGE_ of _PAGES_",
	    	zeroRecords: "Nothing found - sorry",
	    	infoEmpty: "No records available",
	    	infoFiltered :"(filtered from _MAX_ total records)"
	    },
		initComplete: function(settings, json) {
	        $('#table-all-appointments tfoot th').each( function () {
	            $(this).html('<input type="text" class="form-control input-sm" style="width:100%" placeholder="Search Value"/>');
	        });
	        var table = $('#table-all-appointments').DataTable();
	        table.columns().every( function () {
	            var that = this;
	            $('input', this.footer()).on('keyup change', function () {
	                if(that.search() !== this.value) {
	                    that.search( this.value).draw();
	                }
	            });
	        });
	    }
	});
}