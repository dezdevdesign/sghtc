<div class="modal-content">
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
           <span aria-hidden="true">&times;</span>
        </button>
        <h4 id="myModalLabelSmall" class="modal-title">User Information</h4>
    </div>
    <form id="form-user-edit" class="form-horizontal" novalidate="">
        {{ csrf_field() }}
        <div class="modal-body">
            <div style="padding: 0px 10px 0px 10px">
                <div class="form-group">
                    <label class="small">Full Name</label>
                    <input id="name_edit" name="name_edit" type="text" class="form-control input-sm" value="{{ $user->name }}" required="required">
                </div>
                <div class="form-group">
                    <label class="small">Email</label>
                    <input id="email_edit" name="email_edit" type="text" class="form-control input-sm" value="{{ $user->email }}" readonly required="required">
                </div>
                <div class="form-group">
                    <label class="small">Username</label>
                    <input id="username_edit" name="username_edit" type="text" class="form-control input-sm" value="{{ $user->username }}" readonly required="required">
                </div>
                <div class="form-group">
                    <label class="small">Address</label>
                    <input id="address_edit" name="address_edit" type="text" class="form-control input-sm" value="{{ $user->address }}" required="required">
                </div>
                <div class="form-group">
                    <label class="small">Contact</label>
                    <input id="contact_edit" name="contact_edit" type="text" class="form-control input-sm" data-masked data-inputmask="'mask': '(9999) 999-9999'" value="{{ $user->contact }}" required="required">
                </div>
                <div class="form-group form-group-sm">
                    <label class="small">User Type</label>
                    <select id="role_id_edit" name="role_id_edit" class="form-control" required="required">
                        <option></option>
                    </select>
                </div>
                <div class="form-group form-group-sm">
                    <label class="small">Department</label>
                    <select id="department_id_edit" name="department_id_edit" class="form-control">
                        <option></option>
                    </select>
                </div>
            </div>
            <input type="text" name="role_temp" id="role_temp" value="{{ $user->role_id }}" hidden disabled>
            <input type="text" name="dept_temp" id="dept_temp" value="{{ $user->department_id }}" hidden disabled>
        </div>
        <div class="modal-footer">
            <button type="submit" id="user-update" value="{{ $user->id }}" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>