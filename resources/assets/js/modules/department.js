if(window.location.pathname == '/departments') {
	$(document).ready(function() {
		//Add new department...
		$('#form-department').on('submit', function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            axios.post('/departments', formData)
            .then(response =>  {
                helpers.showNotification('New department added.', 'success', 'fa fa-check');
                $('#table-department').DataTable().ajax.reload();
                $('#form-department')[0].reset();
            })
            .catch(error => {
                helpers.showNotification('Failed to add department.', 'danger', 'fa fa-times');
                console.log(error);
            });
        });

		//Edit selected department...
	    $('#table-department').on('click', '#department-edit', function() {
	    	let id = this.value;
		    let url = 'departments/' + id + '/edit';
		    $("#modal-department-edit .modal-content").load(url);
		    $("#modal-department-edit").modal("show");   
	    });

         //Update Product
        $('#modal-department-edit').on('submit', '#form-department-edit', function(e) {
            e.preventDefault()
            let id = $('#department-update').val();
            let data = $("#form-department-edit").serialize();
            axios.put('departments/'+id, data)
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

        $('input').change(function() {
            $(this).val($(this).val().toUpperCase());
        });
	});
}