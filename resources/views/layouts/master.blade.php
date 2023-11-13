<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta name="description" content="Kleon Admin Template">
		<meta name="author" content="">
		<!-- Favicon and touch Icons -->
		<link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" type="image/png">
		<link href="{{asset('assets/img/apple-touch-icon.html')}}" rel="apple-touch-icon">
		<link href="{{asset('assets/img/apple-touch-icon-72x72.html')}}" rel="apple-touch-icon" sizes="72x72">
		<link href="{{asset('assets/img/apple-touch-icon-114x114.html')}}" rel="apple-touch-icon" sizes="114x114">
		<link href="{{asset('assets/img/apple-touch-icon-144x144.html')}}" rel="apple-touch-icon" sizes="144x144">
		<!-- Page Title -->
		<title>{{ $s_data->s_admin_name }}</title>
		<!-- Styles Include -->
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" id="stylesheet">

		
		<!-- Core JS -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		

		@yield('css')
	</head>
	<body class="bg-light">
		<!-- Preloader -->
		<div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="logo"><img src="{{asset('uploads/logo/'.$s_data->s_admin_logo.'')}}" alt="img"></div>
			</div>
		</div>
		<!-- Default Nav -->
		@include('layouts.header')
		<!-- Horizontal Nav -->
		<!-- Combo Nav -->
		<!-- Main Sidebar Container -->
		@include('layouts.sidenav')
		<!-- Main Wrapper-->
		<main class="main-wrapper">
			@yield('content')
		</main>

		<!-- jquery-validation -->
		<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    	<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>



		<!-- jQuery UI Kit -->
		<script src="{{asset('plugins/jquery_ui/jquery-ui.1.12.1.min.js')}}"></script>
		<!-- ApexChart -->
		<!-- Peity  -->
		<script src="{{asset('plugins/peity/jquery.peity.min.js')}}"></script>
		<script src="{{asset('plugins/peity/piety-init.js')}}"></script>
		<!-- Select 2 -->
		<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>
		<!-- Datatables -->
		<script src="{{asset('plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('plugins/datatables/js/datatables.init.js')}}"></script>
		<!-- Date Picker -->
		<script src="{{asset('plugins/flatpickr/flatpickr.min.js')}}"></script>
		<!-- Dropzone -->
		<script src="{{asset('plugins/dropzone/dropzone.min.js')}}"></script>
		<script src="{{asset('plugins/dropzone/dropzone_custom.js')}}"></script>
		<!-- TinyMCE -->
		<script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>
		<script src="{{asset('plugins/prism/prism.js')}}"></script>
		<script src="{{asset('plugins/jquery-repeater/jquery.repeater.js')}}"></script>
		<!-- Sweet Alert -->
		<script src="{{asset('plugins/sweetalert/sweetalert2.min.js')}}"></script>
		<script src="{{asset('plugins/sweetalert/sweetalert2-init.js')}}"></script>
		<script src="{{asset('plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
		<!-- Snippets JS -->
		<script src="{{asset('assets/js/snippets.js')}}"></script>
		<!-- Theme Custom JS -->
		<script src="{{asset('assets/js/theme.js')}}"></script>

		@if(count($errors) > 0 )
			<div id="toast-container" class="toast-top-right">
				<div class="toast toast-success" aria-live="polite" style="display: block;">
					<div class="toast-progress" style="width: 0%;"></div>
					<button type="button" class="toast-close-button" role="button">×</button>
					<div class="toast-title">Error Found</div>
					@foreach($errors->all() as $error) 
						<div class="toast-message">{{$error}}</div>
					@endforeach
				</div>
			</div>
		@endif

		@if (session('error'))
			<div id="toast-container" class="toast-top-right">
				<div class="toast toast-dangor" aria-live="polite" style="display: block;">
					<div class="toast-progress" style="width: 0%;"></div>
					<button type="button" class="toast-close-button" role="button">×</button>
					<div class="toast-title">{{ session('error') }}</div> 
				</div>
			</div>
		@endif

		@if (session('create'))

			<div id="toast-container" class="toast-top-right">
				<div class="toast toast-success" aria-live="polite" style="display: block;">
					<div class="toast-progress" style="width: 0%;"></div>
					<button type="button" class="toast-close-button" role="button">×</button> 
					<div class="toast-message">{{ session('create') }}</div> 
				</div>
			</div> 
		@endif
	</body>
</html>