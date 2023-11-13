@extends('f_site.master')
@section('content')

		<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-one pt-225 xl-pt-200 lg-pt-150 pb-150 lg-pb-100 position-relative">
			<div class="hero-slider-one m0">
				@foreach($sliders as $sl_row)                 
				    <div class="item m0" style="height:100%">
						<div class="hero-img" style="background-image: url({{asset(''.$sl_row->ps_img_path_1.'')}});">
							
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-xl-6 col-lg-7 ms-auto">
									<h1 class="hero-heading d-inline-block position-relative wow fadeInUp">{{$sl_row['ps_name']}}</h1>
									<p class="text-xl text-white pt-35 pb-25 wow fadeInUp" data-wow-delay="0.1s">{{$sl_row['ps_sub_text']}}</p>
									<a href="{{route('contacts')}}" class="btn-two icon-link wow fadeInUp" data-wow-delay="0.2s">
										<span>Let’s Talk</span>
										<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_02.svg')}}" alt="" class="lazy-img icon ms-2">
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach  
			</div>
			<!-- /.hero-slider-one -->
			<!-- <div class="container position-relative">
				<div class="row">
					<div class="col-xl-6 col-lg-7 ms-auto">
						<h1 class="hero-heading d-inline-block position-relative wow fadeInUp"> title</h1>
						<p class="text-xl text-white pt-35 pb-25 wow fadeInUp" data-wow-delay="0.1s">description</p>
						<a href="{{route('contacts')}}" class="btn-two icon-link wow fadeInUp" data-wow-delay="0.2s">
							<span>Let’s Talk</span>
							<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_02.svg')}}" alt="" class="lazy-img icon ms-2">
						</a>
					</div>
				</div>
			</div> -->
			<a href="{{route('contacts')}}" class="more-btn rounded-circle d-flex align-items-center justify-content-center tran3s wow fadeInLeft" target="_blank"><i class="bi bi-arrow-up-right"></i></a>
		</div>
		<!-- /.hero-banner-one -->


		<!-- 
		=============================================
			Fancy Banner One
		============================================== 
		-->
		<div class="fancy-banner-one position-relative pt-30 md-pt-20 pb-40 md-pb-20 bg-white">
			<div class="row align-items-center">
				<div class="col-md-6 text-center text-md-end">
					<h2 class="pe-xl-5 pe-md-4 sm-pb-50">Let’s <span>Discuss & Start</span></h2>
				</div>
				<div class="col-md-6">
					<div class="ps-xl-5 ps-md-4 pe-xxl-5 d-flex align-items-center justify-content-between">
						<div>
							<h3 class="fw-bold">1000+</h3>
							<p class="text-md m0">Worldwide clients</p>
						</div>
						<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/assets/screen_01.png')}}" alt="" class="lazy-img screen me-xxl-5">
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-one -->


		<!-- 
		=============================================
			BLock Feature One
		============================================== 
		-->
		<div class="block-feature-one position-relative pt-75">
			<div class="upper-wrapper mb-110 lg-mb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 wow fadeInUp">
							<div class="card-style-one d-flex w-100 mb-35">
								<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_03.svg')}}" alt="" class="lazy-img"></div>
								<div class="text ps-4">
									<h4 class="fw-bold">Low Fees</h4>
									<p class="pe-xl-4">cupidatat non proident, sunt in culpa qui officia deserunt</p>
								</div>
							</div>
							<!-- /.card-style-one -->
						</div>
						<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-style-one d-flex w-100 mb-35">
								<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_04.svg')}}" alt="" class="lazy-img"></div>
								<div class="text ps-4">
									<h4 class="fw-bold">Expert Advisor</h4>
									<p class="pe-xl-4">Elit esse cillum dolore eu fugiat nulla pariatur</p>
								</div>
							</div>
							<!-- /.card-style-one -->
						</div>
						<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-one d-flex w-100 mb-35">
								<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_05.svg')}}" alt="" class="lazy-img"></div>
								<div class="text ps-4">
									<h4 class="fw-bold">Effective Support</h4>
									<p class="pe-xl-4">quis nostrud exerct ullamo ea nisi ut aliqui com dolor</p>
								</div>
							</div>
							<!-- /.card-style-one -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.upper-wrapper -->

			<div class="container">
				<div class="position-relative">
					<div class="row">
						<div class="col-md-6">
							<div class="title-one text-center text-md-start mb-30 sm-mb-10">
								<h2>Provide quality Services.</h2>
							</div>
							<!-- /.title-one -->
						</div>
					</div>
					<div class="row justify-content-center">
						@foreach($ser_list as $ser_key=>$ser_row)
							@if($ser_key<=3)
								<div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
									<div class="card-style-two vstack tran3s w-100 mt-30">
										<img src="{{asset($ser_row['ss_img_path_1'])}}" data-src="{{asset($ser_row['ss_img_path_1'])}}" alt="" class="lazy-img icon me-auto">
										<h4 class="fw-bold mt-30 mb-25">{{$ser_row['ss_name']}}</h4>
										<p class="mb-20">{{$ser_row['ss_desc']}}</p>
										<a class="arrow-btn tran3s mt-auto stretched-link"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img"></a>
									</div>
									<!-- /.card-style-two -->
								</div>
							@endif
						@endforeach
						
					</div>

					<div class="section-subheading sm-mt-40">
						<p class="text-lg">Inciddnt ut labore et dolor magna aliu. enim ad mim venam, quis nostru </p>
						<a href="{{route('services')}}" class="btn-three icon-link">
							<span>See All Services</span>
							<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img icon ms-1">
						</a>
					</div>
					<!-- /.section-subheading -->
				</div>
			</div>
		</div>
		<!-- /.block-feature-one -->
		


		<!--
		=====================================================
			Text Feature One
		=====================================================
		-->
		<div class="text-feature-one mt-150 lg-mt-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-6 wow fadeInLeft">
						<div class="title-one">
							<div class="upper-title">About us</div>
							<h2>15k+ Client using Our Services.</h2>
						</div>
						<!-- /.title-one -->
						<p class="text-lg mt-45 lg-mt-30 mb-35 lg-mb-20">Your success is our mission. As business advisors, we offer expert guidance, unlocking your potential for growth and profitability</p>
						<div class="d-inline-flex flex-wrap align-items-center">
							<a href="{{route('about')}}" class="btn-four mt-15 me-4">More About us</a>
							<a href="{{route('contacts')}}" class="btn-three icon-link mt-15">
								<span>Request a Callback</span>
								<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img icon ms-1">
							</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 wow fadeInRight">
						<div class="media-list-item ms-auto pe-xxl-5 pe-4 ps-xxl-5 ps-4 pb-35 md-mt-60 d-flex align-items-end">
							<ul class="style-none">
								<li>Mobile app easy management & access</li>
								<li>Ton’s of features for handle the card easily</li>
								<li>Strong security system.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.text-feature-one -->


		<!--
		=====================================================
			BLock Feature Two
		=====================================================
		-->
		<div class="block-feature-two mt-80">
			<div class="container">
				<div class="wrapper">
					<div class="row align-items-center">
						<div class="col-md-4">
							<div class="card-style-three pt-45 md-pt-30 pb-35 sm-pb-30">
								<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_10.svg')}}" alt="" class="lazy-img icon">
								<h4 class="fw-bold mt-40 sm-mt-20 mb-20">Our Mission</h4>
								<p>{{$m_details['md_desc']}}</p>
							</div>
							<!-- /.card-style-three -->
						</div>
						<div class="col-md-5">
							<div class="border-line h-100 ps-lg-5 pe-lg-5 ps-md-3 pe-md-3">
								<div class="card-style-three pt-45 md-pt-30 pb-35 sm-pb-30">
									<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_11.svg')}}" alt="" class="lazy-img icon">
									<h4 class="fw-bold mt-40 sm-mt-20 mb-20">Our company vision.</h4>
									<p>{{$m_details['md_desc_2']}}</p>
								</div>
								<!-- /.card-style-three -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="ps-lg-5 sm-pb-30 sm-pt-30">
								<div class="numb fw-500"><span class="counter">13</span>+</div>
								<p class="m0">Years Experience <br> with proud.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-two -->


		<!-- <div class="block-feature-one position-relative light-bg-deep mt-150 lg-mt-80 pt-120 lg-pt-60 pb-130 lg-pb-60">
			<div class="container">
				<div class="position-relative">
					<div class="row">
						<div class="col-md-6">
							<div class="title-one text-center text-md-start mb-30 sm-mb-10">
								<h2>Provide quality Products.</h2>
							</div>
							<!-- /.title-one -->
						</div>
					</div>
					<div class="row justify-content-center">
						@foreach($prod_list as $prod_key=>$prod_row)
							@if($prod_key<=3)
								<div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
									<div class=" vstack tran3s w-100 mt-30">
										<img src="{{asset('uploads/products/'.$prod_row->pro_img.'')}}" data-src="{{asset('uploads/products/'.$prod_row->pro_img.'')}}" alt="" class="lazy-img icon me-auto">
										<h4 class="fw-bold mt-30 mb-25"><a href="{{route('product-details',$prod_row->pro_slug)}}"> {{$prod_row['pro_title']}} </a></h4> 
									</div>
									<!-- /.card-style-two -->
								</div>
							@endif
						@endforeach
					</div>

					<div class="section-subheading sm-mt-40">
						<p class="text-lg">Inciddnt ut labore et dolor magna aliu. enim ad mim venam, quis nostru </p>
						<a href="{{route('products')}}" class="btn-three icon-link">
							<span>See All Products</span>
							<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img icon ms-1">
						</a>
					</div>
					<!-- /.section-subheading -->
				</div>
			</div>
		</div> -->


		<!-- 
		=============================================
			Feedback Section One
		============================================== 
		-->
		<div class="feedback-section-one mt-150 lg-mt-80 pb-80">
			<div class="container">
				<div class="position-relative">
					<div class="title-one sm-mb-40">
						<h2>Words from <br> clients.</h2>
					</div>
					<!-- /.title-one -->
					<div class="feedback-slider-one">
						@foreach($testi_list as $te_row)

                            <div class="item">
                                <div class="feedback-block-one">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 ms-auto order-md-last">
                                            <blockquote>"{{$te_row['te_desc']}}"</blockquote>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('uploads/images/'.$te_row->te_img.'')}}" alt="" class="avatar rounded-circle">
                                                <div class="ps-4">
                                                    <div class="name fw-bold text-dark">{{$te_row['te_name']}}</div>
                                                    <p class="fs-6 m0">{{$te_row['te_desigination']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 order-md-first">
                                            <div class="d-flex align-items-center justify-content-between sm-mt-40">
                                                <div class="line"></div>
                                                <div class="count fw-500"><span class="text-dark">01</span>  /  03</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						@endforeach
						
					</div>

					<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_12.svg')}}" alt="" class="lazy-img"></div>
				</div>
			</div>
		</div>
		<!-- /.feedback-section-one -->



	
		

	
	

		<!--
		=====================================================
			Fancy Banner Two
		=====================================================
		-->
		<div class="fancy-banner-two mt-150 lg-mt-80 mb-150 lg-mb-60">
			<div class="container">
				<div class="text-center wow fadeInUp">
					<div class="row">
						<div class="col-lg-8 m-auto">
							<div class="title-one">
								<h2>Want to chat? Feel free to contact our team.</h2>
							</div>
							<!-- /.title-one -->
							<p class="text-lg mt-40 lg-mt-30 mb-30">Contact our friendly team for quick and helpful answers.</p>
							<div class="d-inline-flex flex-wrap justify-content-center">
								<a href="{{route('contacts')}}" class="btn-four mt-10 me-2">Get a Quote</a>
								<a href="{{route('contacts')}}" class="btn-six mt-10 ms-2">Contact</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-two -->




@endsection