<div class="modal-content">
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
           <span aria-hidden="true">&times;</span>
        </button>
        <h4 id="myModalLabelSmall" class="modal-title">Department Information</h4>
    </div>
    <form id="form-department-edit" class="form-horizontal">
        {{ csrf_field() }}
        <div class="modal-body">
            <div style="padding: 0px 10px 0px 10px">
                <div class="form-group">
                    <label class="small">Department</label>
                    <input id="name" name="name" type="text" class="form-control input-sm" value="{{ $department->name }}" required="required">
                </div>
                <div class="form-group">
                    <label class="small">Description</label>
                    <input id="description" name="description" type="text" class="form-control input-sm" value="{{ $department->description }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="department-update" value="{{ $department->id }}" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
 </div>
   
