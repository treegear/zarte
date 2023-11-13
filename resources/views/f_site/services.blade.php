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
						<h1 class="hero-heading d-inline-block position-relative me-xxl-4 me-lg-5">{{$m_details['md_title']}} <img src="{{asset('site/images/shape/shape_26.svg')}}" alt=""></h1>
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
				<div class="row">
                    <div class="col-lg-5 wow fadeInLeft">
                        <div class="title-one">
                            <h2>15k+ clients base & growing.</h2>
                        </div>
                        <!-- /.title-one -->
                        <p class="text-lg mt-45 lg-mt-30 mb-60 lg-mb-30">Your success is our mission. As business advisors, we offer expert guidance, unlocking your potential for growth and profitability</p>
                        <a href="{{route('contacts')}} " class="btn-three icon-link mt-15 md-mb-60">
                            <span>Request a Callback</span>
                            <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img icon ms-1">
                        </a>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div class="row">
                            <div class="col-sm-6 d-flex wow fadeInUp">
                                <div class="card-style-twelve mb-40 lg-mb-20">
                                    <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_55.svg')}}" alt="" class="lazy-img"></div>
                                    <h4 class="fw-bold mt-20 mb-15">Expert Advisor</h4>
                                    <p>Elit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <!-- /.card-style-twelve -->
                            </div>
                            <div class="col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card-style-twelve mb-40 lg-mb-20">
                                    <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_56.svg')}}" alt="" class="lazy-img"></div>
                                    <h4 class="fw-bold mt-20 mb-15">Effective Support</h4>
                                    <p>quis nostrud exerct ullamo ea nisi ut aliqui com dolor</p>
                                </div>
                                <!-- /.card-style-twelve -->
                            </div>
                            <div class="col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
                                <div class="card-style-twelve mb-40 lg-mb-20">
                                    <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_57.svg')}}" alt="" class="lazy-img"></div>
                                    <h4 class="fw-bold mt-20 mb-15">Low Fees</h4>
                                    <p>cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                                <!-- /.card-style-twelve -->
                            </div>
                            <div class="col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card-style-twelve mb-40 lg-mb-20">
                                    <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_58.svg')}}" alt="" class="lazy-img"></div>
                                    <h4 class="fw-bold mt-20 mb-15">Loan Facility</h4>
                                    <p>quis nostrud exerct ullamo ea nisi ut aliqui com dolor</p>
                                </div>
                                <!-- /.card-style-twelve -->
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- /.text-feature-one -->

		

		<!-- 
		=============================================
			BLock Feature One
		============================================== 
		-->
		<div class="block-feature-one position-relative light-bg-deep mt-100 lg-mt-60 pt-120 lg-pt-60 pb-130 lg-pb-60">
			<div class="container">
				<div class="position-relative">
					<div class="title-one text-center mb-40 lg-mb-10">
                        <h2>Our Services</h2>
                        <p class="text-lg mt-20">Inciddnt ut labore et dolor magna aliu. ad mim venam, quis nostru </p>
                    </div>
                    <!-- /.title-one -->
					<div class="row">
						@foreach($ser_list as $ser_row)

							<div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
								<div class="card-style-two vstack tran3s w-100 mt-30">
									<img src="{{asset($ser_row['ss_img_path_1'])}}" data-src="{{asset($ser_row['ss_img_path_1'])}}" alt="" class="lazy-img icon me-auto">
									<h4 class="fw-bold mt-30 mb-25">{{$ser_row['ss_name']}}</h4>
									<p class="mb-20">{{$ser_row['ss_desc']}}</p>
									<a  class="arrow-btn tran3s mt-auto stretched-link"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_09.svg')}}" alt="" class="lazy-img"></a>
								</div>
								<!-- /.card-style-two -->
							</div>  
                        @endforeach
						
					</div>
				</div>
			</div>
            <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/shape/shape_05.svg')}}" alt="" class="lazy-img shapes shape_01">
            <img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/shape/shape_05.svg')}}" alt="" class="lazy-img shapes shape_02">
		</div>
		<!-- /.block-feature-one -->



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