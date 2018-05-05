@extends('layouts.app')
@section('content')
<section>
	<div class="content-wrapper">
	<h3><small>PATIENT LIST</small></h3>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Registered Patient List</div>
					<div class="panel-body">
						<div class="table-responsive">
							{!! $dataTable->table([
							'id' => 'table-patients',
							'class' => 'table table-striped table-hover'], true
							)!!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush
@endsection