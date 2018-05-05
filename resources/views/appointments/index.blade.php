@extends('layouts.app')
@section('content')
<section>
	<div class="content-wrapper">
	<h3><small>WORKBENCH</small></h3>
		<div class="row">
          	<div id="panelDemo14" class="panel panel-default">
                <div class="panel-body">
                    <div role="tabpanel">
                       <ul role="tablist" class="nav nav-tabs">
                            <li role="presentation" class="active">
                      			<a href="#expected-patients" aria-controls="expected-patients" role="tab" data-toggle="tab">Expected Patients Today</a>
                            </li>
                            <li role="presentation">
                            	<a href="#admitted-patients" aria-controls="admitted-patients" role="tab" data-toggle="tab">All Appointed Patients</a>
                            </li>
                       </ul>
                       <div class="tab-content">
							<div id="expected-patients" role="tabpanel" class="tab-pane active">
								<div class="table-responsive">
									{!! $dataTable->table([
										'id' => 'table-appointments',
										'class' => 'table table-striped table-hover'], true
									)!!}
								</div>
							</div>
							<div id="admitted-patients" role="tabpanel" class="tab-pane">
								<div class="table-responsive">
									<table class="table table-striped table-hover" id="table-all-appointments">
						                <thead>
							                <tr>
							                    <th>Patient No.</th>
							                    <th>Patient Name</th>
							                    <th>Date</th>
							                    <th>Time</th>
							                    <th>Status</th>
							                    <th>Action</th>
							                </tr>
						                </thead>
						                <tfoot>
						                	<tr>
						                		<th></th>
						                		<th></th>
						                		<th></th>
						                		<th></th>
						                		<th></th>
						                		<th></th>
						                	</tr>
						                </tfoot>
						            </table>
			            		</div>
							</div>
                       </div>
                    </div>
                </div>
             </div>
		</div>
	</div>
</section>
@section('modals')
<div id="modal-appointment-record" tabindex="-1" role="dialog" aria-labelledby="modal-appointment-record" aria-hidden="true" class="modal fade">
  	<div class="modal-dialog modal-lg">
  		<div class="modal-content">

        </div>
 	</div>
</div>
@endsection
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush
@endsection