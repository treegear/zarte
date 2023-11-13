<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="{{$m_data['metta_keywords']}}">
	<meta name="description" content="{{$m_data['metta_desc']}}">
    <meta property="og:site_name" content="Babun">
    <meta property="og:url" content="https://creativegigstf.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Babun - Business & Consulting HTML5 Template">
	<meta name='og:image' content="{{asset('site/images/assets/ogg.png')}}">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1A4137">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1A4137">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">
	<title>Zarte Corporate {{$m_data['metta_title']}}</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('site/images/fav-icon/icon.png')}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('site/css/bootstrap.min.css')}}"media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('site/css/style.min.css')}}"media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('site/css/responsive.css')}}"media="all">
	<link rel="stylesheet" type="text/css" href="{{asset('site/css/cust_style.css')}}"media="all">
    @yield('css')
 
	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js')}}"></script>
			<script src="{{asset('site/vendor/html5shiv.js')}}"></script>
			<script src="{{asset('site/vendor/respond.js')}}"></script>
		<![endif]-->
</head>

<body>
    <!-- Default Nav -->
	@include('f_site.header') 

	@yield('content')

    
		<!--
		=====================================================
			Footer One
		=====================================================
		-->
		<div class="footer-one">
			<div class="container">
				<div class="inner-wrapper"> 
					<div class="row justify-content-between">
						<div class="col-xl-4 col-md-3 footer-intro mb-30">
							<div class="logo mb-15">
								<a href="{{route('home')}}" class="d-inline-block d-lg-none">
									<img src="{{asset('uploads/logo/'.$s_data->s_site_logo.'')}}"alt="">
								</a> 
							</div> 
							<!-- logo -->
							<p class="text-white lh-sm mb-35">Top-rated <span class="opacity-50">business <br> consultancy for your success</span></p>
							<ul class="style-none d-flex align-items-center social-icon">
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-dribbble"></i></a></li>
								<li><a href="#"><i class="bi bi-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-4 mb-20">
							<h5 class="footer-title">Links</h5>
							<ul class="footer-nav-link style-none">
								@foreach($menus_list as $row_menu)
                                    <li> <a href="{{route($row_menu['m_slug'])}}"> {{$row_menu['m_name']}} </a>  </li>                                        
                                @endforeach
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-4 mb-20">
							<h5 class="footer-title">Company</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="about-us-v2.html">About us</a></li>
								<li><a href="blog-v1.html">Blogs</a></li>
								<li><a href="faq.html">FAQ’s</a></li>
								<li><a href="{{route('contacts')}} ">Contact</a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-4 mb-20">
							<h5 class="footer-title">Support</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="{{route('contacts')}} ">Terms of use</a></li>
								<li><a href="{{route('contacts')}} ">Terms & conditions</a></li>
								<li><a href="{{route('contacts')}} ">Privacy</a></li>
								<li><a href="{{route('contacts')}} ">Cookie policy</a></li>
							</ul>
						</div>
					</div>
				</div> <!-- /.inner-wrapper -->
			</div>
			<div class="container">
				<div class="bottom-footer">
					<div class="row align-items-center">
						<div class="col-lg-5 order-lg-last mb-15">
							<div class="copyright me-xl-4 lg-mt-10 order-lg-first">Copyright @2023 Zarte Corporate.</div>
						</div>
						<div class="col-lg-7 order-lg-first mb-15">
							<a href="{{route('home')}}" class="d-none d-lg-inline-block mb-25">
								<img src="{{asset('uploads/logo/'.$s_data->s_site_logo.'')}}"alt="">
							</a>
							<div class="d-xl-flex align-items-center">
							
								
							</div>
						</div>
					</div>
				</div>
				<!-- /.bottom-footer -->
			</div>
		</div> <!-- /.footer-one -->


		<!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-wrapper m-auto">
							<ul class="nav nav-tabs border-0 w-100" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Signup</button>
								</li>
							</ul>
							<div class="tab-content mt-30">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Hi, Welcome Back!</h2>
										<p>Still don't have an account? <a href="#">Sign up</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="Youremail@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="{{asset('site/images/icon/icon_13.svg')}}"alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember">
														<label for="remember">Keep me logged in</label>
													</div>
													<a href="#">Forget Password?</a>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" role="tabpanel" id="fc2">
									<div class="text-center mb-20">
										<h2>Register</h2>
										<p>Already have an account? <a href="#">Login</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Zubayer Hasan">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="zubayerhasan@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="{{asset('site/images/icon/icon_13.svg')}}"alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember2">
														<label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
													</div>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Sign up</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							
							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3 fs-6">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="{{asset('site/images/icon/google.png')}}"alt="">
										<span class="ps-3">Signup with Google</span>
									</a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="{{asset('site/images/icon/facebook.png')}}"alt="">
										<span class="ps-3">Signup with Facebook</span>
									</a>
								</div>
							</div>
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>
            </div>
        </div>


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{asset('site/vendor/jquery.min.js')}}""></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}""></script>
		<!-- WOW js -->
		<script src="{{asset('site/vendor/wow/wow.min.js')}}""></script>
		<!-- Slick Slider -->
		<script src="{{asset('site/vendor/slick/slick.min.js')}}""></script>
		<!-- Fancybox -->
		<script src="{{asset('site/vendor/fancybox/dist/jquery.fancybox.min.js')}}""></script>
		<!-- Lazy -->
		<script src="{{asset('site/vendor/jquery.lazy.min.js')}}""></script>
		<!-- js Counter -->
		<script src="{{asset('site/vendor/jquery.counterup.min.js')}}""></script>
		<script src="{{asset('site/vendor/jquery.waypoints.min.js')}}""></script>
		
		<!-- validator js -->
		<script src="{{asset('site/vendor/validator.js')}}""></script>

		<!-- Theme js -->
		<script src="{{asset('site/js/theme.js')}}""></script>
	</div> <!-- /.main-page-wrapper -->
</body>



</html>



