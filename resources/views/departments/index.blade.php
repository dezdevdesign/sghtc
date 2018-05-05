@extends('layouts.app')
@section('content')
<section>
	<div class="content-wrapper">
		<h3><small>DEPARTMENTS</small></h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Department Information</div>
					<form id="form-department" class="form-horizontal" data-parsley-validate="" novalidate="">
            			{{ csrf_field() }}
						<div class="panel-body">
							<div class="col-md-12">
	                            <div class="form-group">
	                            	<label class="control-label small">Department</label>
	                                <input id="name" name="name" type="text" class="form-control input-sm" required="required">
	                            </div>
	                            <div class="form-group">
	                            	<label class="control-label small">Description</label>
	                                <input id="description" name="description" type="text" class="form-control input-sm">
	                            </div>
							</div>
						</div>
						<div class="panel-footer">
	                        <div class="clearfix">
	                            <div class="pull-right">
	                                <button type="submit" class="btn btn-success">Create</button>
	                            </div>
	                       </div>
	                    </div>
                    </form>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Department List</div>
					<div class="panel-body">
						<div class="table-responsive">
							{!! $dataTable->table([
							'id' => 'table-department',
							'class' => 'table table-striped table-hover']
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
<div id="modal-department-edit" tabindex="-1" role="dialog" aria-labelledby="modal-department-edit" aria-hidden="true" class="modal fade">
  	<div class="modal-dialog modal-sm">
  		<div class="modal-content">
        </div>
 	</div>
</div>
@endsection
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush