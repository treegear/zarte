@extends('f_site.master')
@section('content')
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		@if($m_data['m_banner_img_path']!='')
			<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative" style="background-image: url({{asset($m_data['m_banner_img_path'])}});">
		@else 
		<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative" style="background-image: url({{asset('site/images/media/img_26.jpg')}}");">

		@endif
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<h1 class="hero-heading d-inline-block position-relative me-xl-4">{{$m_details['md_title']}} <img src="{{asset('site/images/shape/shape_25.svg')}}" alt=""></h1>
					</div>
                    <div class="col-xl-4 col-lg-5 ms-auto">
                        <p class="text-white text-lg mb-70 lg-mb-40">{{$m_details['md_sub_title']}}</p>
                        <ul class="style-none d-inline-flex pager">
                            <li><a href="#">Home</a></li>
                            <li>/</li>
                            <li>{{$m_data['m_name']}}</li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
		<!-- /.inner-banner-one -->

		


		<!--
		=====================================================
			Text Feature One
		=====================================================
		-->
		<div class="text-feature-one mt-150 lg-mt-80">
			<div class="container">
				<div class="line-wrapper position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-5 wow fadeInLeft">
                            <div class="title-one">
                                <div class="upper-title">About us</div>
                                <h2>15k+ Client using Our Services.</h2>
                            </div>
                            <!-- /.title-one -->
                            <p class="text-lg mt-45 lg-mt-30 mb-35 lg-mb-30">Your success is our mission. As business advisors, we offer expert guidance, unlocking your potential for growth and profitability</p>
                            <a href="{{route('contacts')}} " class="btn-three icon-link mt-15 md-mb-40">
                                <span>Request a Callback</span>
                                <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img icon ms-1">
                            </a>
                        </div>
                        <div class="col-lg-6 ms-auto wow fadeInRight">
                            <div class="card-style-three d-flex pt-75 lg-pt-40 pb-45 lg-pb-20">
                                <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_10.svg')}}" alt="" class="lazy-img icon">
                                <div class="ps-4">
                                    <h4 class="fw-bold mb-20">Our Mission</h4>
                                    <p> {{$h_page['md_desc']}} </p>
                                </div>
                            </div>
                            <!-- /.card-style-three -->
                            <div class="card-style-three d-flex pt-75 lg-pt-40 pb-45 lg-pb-20">
                                <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_11.svg')}}" alt="" class="lazy-img icon">
                                <div class="ps-4">
                                    <h4 class="fw-bold mb-20">Our company vision.</h4>
                                    <p> {{$h_page['md_desc_2']}} </p>
                                </div>
                            </div>
                            <!-- /.card-style-three -->
                        </div>
                    </div>
                    <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/shape/shape_05.svg')}}" alt="" class="lazy-img shapes shape_01">
                </div>

                <div class="counter-wrapper mt-80 lg-mt-20">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="counter-block-two text-center text-md-start mt-35 wow fadeInUp">
                                <div class="main-count fw-500"><span class="counter">120</span>+</div>
                                <p class="m0 text-md">Partner with us</p>
                            </div>
                            <!-- /.counter-block-two -->
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="counter-block-two text-center mt-35  wow fadeInUp" data-wow-delay="0.1s">
                                <div class="main-count fw-500">$<span class="counter">1.3</span>b+</div>
                                <p class="m0 text-md">Cumulative trading volume</p>
                            </div>
                            <!-- /.counter-block-two -->
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="counter-block-two text-center mt-35  wow fadeInUp" data-wow-delay="0.2s">
                                <div class="main-count fw-500"><span class="counter">705</span>k</div>
                                <p class="m0 text-md">Successful Projects</p>
                            </div>
                            <!-- /.counter-block-two -->
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="counter-block-two text-center text-md-end mt-35  wow fadeInUp" data-wow-delay="0.3s">
                                <div class="main-count fw-500">$<span class="counter">1.2</span>%</div>
                                <p class="m0 text-md">Low interest rate</p>
                            </div>
                            <!-- /.counter-block-two -->
                        </div>
                    </div>
                </div>
                <!-- /.counter-wrapper -->
			</div>
		</div>
		<!-- /.text-feature-one -->

		

		<!-- 
		=============================================
			BLock Feature One
		============================================== 
		-->
		<div class="block-feature-one position-relative light-bg-deep mt-150 lg-mt-80 pt-120 lg-pt-60 pb-130 lg-pb-60">
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
							<div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
								<div class="card-style-two vstack tran3s w-100 mt-30">
									<img src="{{asset($ser_row['ss_img_path_1'])}}" data-src="{{asset($ser_row['ss_img_path_1'])}}" alt="" class="lazy-img icon me-auto">
									<h4 class="fw-bold mt-30 mb-25">{{$ser_row['ss_name']}}</h4>
									<p class="mb-20">{{$ser_row['ss_desc']}}</p>
									<a class="arrow-btn tran3s mt-auto stretched-link"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img"></a>
								</div>
								<!-- /.card-style-two -->
							</div> 
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
			Text Feature Three
		=====================================================
		-->
		<div class="text-feature-three text-feature-one position-relative mt-150 lg-mt-80 pb-150 lg-pb-80">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xxl-5 col-lg-6 ms-auto d-flex flex-column order-lg-last wow fadeInRight">
						<div class="title-one">
							<div class="upper-title">Don’t Be Fool</div>
							<h2>Guideline for your financial grow.</h2>
						</div>
						<!-- /.title-one -->
						<p class="text-lg mt-35 lg-mt-10 mb-30">Your success is our mission. As business advisors, we offer expert guidance, unlocking your potential for growth and profitability</p>
						<div><a href="{{route('contacts')}} " class="btn-four mt-15">Let’s Talk</a></div>
						<div class="counter-wrapper mt-50 lg-mt-40 pt-5">
							<div class="row">
								<div class="col-xl-6 col-sm-5">
									<div class="counter-block-one mt-20">
										<div class="main-count fw-bold"><span class="counter">1.2</span>x</div>
										<p class="m0">Rapid wealth grow</p>
									</div>
									<!-- /.counter-block-one -->
								</div>
								<div class="col-xl-6 col-sm-7">
									<div class="counter-block-one mt-20">
										<div class="main-count fw-bold">$<span class="counter">1.3</span>b+</div>
										<p class="m0">Cumulative trading volume</p>
									</div>
									<!-- /.counter-block-one -->
								</div>
							</div>
						</div>
						<!-- /.counter-wrapper -->
					</div>
					<div class="col-xxl-7 col-lg-6 wow fadeInLeft">
						<div class="media-list-item me-auto pe-xxl-5 pe-4 ps-xxl-5 ps-4 pb-35 md-mt-40 d-flex align-items-end">
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
		<!-- /.text-feature-three -->



	
		<!--
		=====================================================
			Fancy Banner Three
		=====================================================
		-->
		<div class="fancy-banner-three position-relative wow fadeInUp">
			<div class="container">
				<div class="row align-content-center">
					<div class="col-lg-8 col-md-9">
						<div class="title-one mb-20 lg-mb-10">
							<h2 class="text-white">Want to Chat? Feel free to Contact our Team.</h2>
						</div>
						<!-- /.title-one -->
						<p class="text-lg m0 text-white opacity-75">If you have anything in mind just contact us with our expert.</p>
					</div>
					<div class="col-lg-4 col-md-3">
						<a href="{{route('contacts')}} " class="quote-btn color-two tran5s rounded-circle d-flex align-items-center justify-content-center ms-auto">
							<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_30.svg')}}" alt="" class="lazy-img">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-three -->

	<!-- 
		=============================================
			Feedback Section One
		============================================== 
		-->
		<div class="feedback-section-one top-border pt-80 pb-80">
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
			Partner Logo
		=====================================================
		-->
        <div class="partner-logo-one pt-80 lg-pt-40 pb-80 lg-pb-40">
            <div class="container">
                <div class="partner-slider-one">
					@foreach($partners as $pa_row) 
						<div class="item">
							<div class="logo d-flex align-items-center justify-content-center"><img src="{{asset(''.$pa_row->ps_img_path_1.'')}}" alt="{{$pa_row->ps_name}}"></div>
						</div> 
                    @endforeach  
                    
                </div>
            </div>
        </div>
        <!-- /.partner-logo-one -->



	
	
@endsection