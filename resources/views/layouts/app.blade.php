<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>{{-- 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="../vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="../vendor/whirl/dist/whirl.css">

   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- TAGS INPUT-->
   <link rel="stylesheet" href="../vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
   <!-- SLIDER CTRL-->
   <link rel="stylesheet" href="../vendor/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
   <!-- CHOSEN-->
   <link rel="stylesheet" href="../vendor/chosen_v1.2.0/chosen.min.css">
   <!-- DATETIMEPICKER-->
   <link rel="stylesheet" href="../vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
   <!-- COLORPICKER-->
   <link rel="stylesheet" href="../vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
   <!-- SELECT2-->
   <link rel="stylesheet" href="../vendor/select2/dist/css/select2.css">
   <link rel="stylesheet" href="../vendor/select2-bootstrap-theme/dist/select2-bootstrap.css">
   <!-- DATATABLES-->
   <link rel="stylesheet" href="../vendor/datatables-colvis/css/dataTables.colVis.css">
   <link rel="stylesheet" href="../vendor/datatables/media/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="../vendor/dataTables.fontAwesome/index.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="../css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="../css/template.css" id="maincss">
   <link rel="stylesheet" href="../css/app.css" id="maincss">

</head>
<body>
	<div class="wrapper">
		@if(auth()->check())
			@include('layouts.topnav')
			@include('layouts.sidebar')
		@endif
		@yield('content')
		@if(auth()->check())
			@include('layouts.footer')
		@endif
	</div>
  @yield('modals')
	<script src="../vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="../vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="../vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="../vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="../vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="../vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="../vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="../vendor/screenfull/dist/screenfull.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- DATATABLES-->
   <script src="../vendor/datatables/media/js/jquery.dataTables.min.js"></script>
   <script src="../vendor/jszip/jszip.min.js"></script>
   <script src="../vendor/datatables-colvis/js/dataTables.colVis.js"></script>
   <script src="../vendor/datatables/media/js/dataTables.bootstrap.js"></script>
   <script src="../vendor/datatables-buttons/js/dataTables.buttons.js"></script>
   <script src="../vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
   <script src="../vendor/datatables-buttons/js/buttons.colVis.js"></script>
   <script src="../vendor/datatables-buttons/js/buttons.flash.js"></script>
   <script src="../vendor/datatables-buttons/js/buttons.html5.js"></script>
   <script src="../vendor/datatables-buttons/js/buttons.print.js"></script>
   <script src="../vendor/datatables-responsive/js/dataTables.responsive.js"></script>
   <script src="../vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
   <!-- FILESTYLE-->
   <script src="../vendor/bootstrap-filestyle/src/bootstrap-filestyle.js"></script>
   <!-- TAGS INPUT-->
   <script src="../vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
   <!-- CHOSEN-->
   <script src="../vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
   <!-- SLIDER CTRL-->
   <script src="../vendor/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
   <!-- INPUT MASK-->
   <script src="../vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
   <!-- WYSIWYG-->
   <script src="../vendor/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
   <script src="../vendor/bootstrap-wysiwyg/external/jquery.hotkeys.js"></script>
   <!-- MOMENT JS-->
   <script src="../vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- DATETIMEPICKER-->
   <script type="text/javascript" src="../vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   <!-- COLORPICKER-->
   <script type="text/javascript" src="../vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
   <!-- SELECT2-->
   <script src="../vendor/select2/dist/js/select2.js"></script>
   <!-- PARSLEY-->
   <script src="../vendor/parsleyjs/dist/parsley.min.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="../js/template.js"></script>
   <script src="../js/app.js"></script>

	@stack('scripts')
</body>
</html>
