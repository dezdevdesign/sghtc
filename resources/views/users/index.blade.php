@extends('layouts.app')
@section('content')
<section>
	<div class="content-wrapper">
		<h3><small>USERS</small></h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">User Information</div>
					<form id="form-user" class="form-horizontal" data-parsley-validate="" novalidate="">
            			{{ csrf_field() }}
						<div class="panel-body">
							<div class="col-md-6">
	                            <div class="form-group">
                                    <label class="col-sm-2 control-label small">Full Name</label>
                                    <div class="col-sm-10">
                                        <input id="name" name="name" type="text" class="form-control input-sm" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label small">Email</label>
                                    <div class="col-sm-10">
                                        <input id="email" name="email" type="email" class="form-control input-sm" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label small">Username</label>
                                    <div class="col-sm-10">
                                        <input id="username" name="username" type="text" class="form-control input-sm" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label small">Password</label>
                                    <div class="col-sm-10">
                                        <input id="password" name="password" type="password" class="form-control input-sm" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label small">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control input-sm" data-parsley-equalto="#password" data-parsley-error-message="Password did not match." required="required">
                                    </div>
                                </div>                             
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label class="col-sm-2 control-label small">Address</label>
                                    <div class="col-sm-10">
                                        <input id="address" name="address" type="text" class="form-control input-sm" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label small">Contact</label>
                                    <div class="col-sm-10">
                                        <input id="contact" name="contact" type="text" class="form-control input-sm" data-masked data-inputmask="'mask': '(9999) 999-9999'" required="required">
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <label class="col-sm-2 control-label small">User Type</label>
                                    <div class="col-sm-10">
                                        <select id="role_id" name="role_id" class="form-control" data-parsley-errors-container="#role_id_error" required="required">
                                            <option></option>
                                        </select>
                                        <div id="role_id_error"></div>
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <label class="col-sm-2 control-label small">Department</label>
                                    <div class="col-sm-10">
                                        <select id="department_id" name="department_id" class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
							</div>
						</div>
						<div class="panel-footer">
	                        <div class="clearfix">
	                            <div class="pull-right">
	                            	<button id="user-clear" type="button" class="btn btn-danger">Clear Form</button>
	                                <button type="submit" class="btn btn-success">Create</button>
	                            </div>
	                       </div>
	                    </div>
                    </form>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">User List</div>
					<div class="panel-body">
						<div class="table-responsive">
							{!! $dataTable->table([
							'id' => 'table-user',
							'class' => 'table table-striped table-hover'], true
							)!!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('modals')
<div id="modal-user-edit" tabindex="-1" role="dialog" aria-labelledby="modal-user-edit" aria-hidden="true" class="modal fade">
  	<div class="modal-dialog">
  		<div class="modal-content">
        </div>
 	</div>
</div>
@endsection
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush