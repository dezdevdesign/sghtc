@extends('layouts.app')
@section('content')
<div class="block-center mt-xl wd-xl">
	 <!-- START panel-->
	<div class="panel panel-dark panel-flat">
		<div class="panel-heading text-center">
			<a href="#">
				<img src="./img/logo.png" alt="Image" class="block-center img-rounded">
			</a>
		</div>
		<div class="panel-body">
			<p class="text-center pv">SIGN IN TO CONTINUE.</p>
			<form role="form" data-parsley-validate="" novalidate="" method="POST" action="{{ route('login') }}" class="mb-lg">
				{{ csrf_field() }}
				<div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
					<input id="email" name="email" type="email" placeholder="Enter email" required class="form-control">
					<span class="fa fa-envelope form-control-feedback text-muted"></span>
					@if($errors->has('email'))
						<small class="text-danger">{{ $errors->first('email') }}</small>
					@endif
				</div>
				<div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
					<input id="password" name="password" type="password" placeholder="Password" required class="form-control">
					<span class="fa fa-lock form-control-feedback text-muted"></span>
					@if($errors->has('password'))
						<small class="text-danger">{{ $errors->first('password') }}</small>
					@endif
				</div>
				<div class="clearfix">
					<div class="checkbox c-checkbox pull-left mt0">
						<label>
							<input type="checkbox" value="" name="remember">
							<span class="fa fa-check"></span>Remember Me
						</label>
					</div>
					<div class="pull-right">
						{{-- <a href="#" class="text-muted">Forgot your password?</a> --}}
					</div>
				</div>
				<button type="submit" class="btn btn-block btn-primary mt-lg">Login</button>
			</form>
		</div>
	</div>
</div>
@push('scripts')
<script>
	document.body.style.background = "#f3f3f3 url('./img/login-bg.jpg') no-repeat right top";
	document.body.style.backgroundSize = "cover";
</script>
@endpush
@endsection