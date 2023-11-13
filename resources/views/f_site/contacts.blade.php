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
		=============================================
			Contact Us
		============================================== 
		-->
		<div class="contact-us-section pt-150 lg-pt-80">
			<div class="container">
                <div class="position-relative">
                    <div class="row">
						<div class="col-12 m-auto">
							<div class="row">
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_90.svg')}}" alt="" class="lazy-img"></div>
										<h5 class="title">Our Address</h5>
										<p>{{$contact_data['c_address']}}</p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_91.svg')}}" alt="" class="lazy-img"></div>
										<h5 class="title">Contact Info</h5>
										<p>Open a chat or give us call at <br><a href="tel:{{$contact_data['c_phone']}}" class="call text-lg fw-500">{{$contact_data['c_phone']}}</a></p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/icon/icon_92.svg')}}" alt="" class="lazy-img"></div>
										<h5 class="title">Live Support</h5>
										<p>live chat service <br><a href="#" class="webaddress">{{$contact_data['c_email']}}</a></p>
									</div> <!-- /.address-block-one -->
								</div>
							</div>
						</div>
					</div>

                    <div class="bg-wrapper light-bg mt-80 lg-mt-40">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="d-flex flex-column flex-lg-column-reverse">
									<div class="row">
										<div class="col-md-8 col-6 me-auto ms-auto"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('site/images/assets/ils_07.svg')}}" alt="" class="lazy-img me-auto ms-auto"></div>
									</div>
									<div class="title-one text-center text-lg-start md-mt-20 mb-70 md-mb-30">
										<h2>Have inquiries? Reach out via message</h2>
									</div>
									<!-- /.title-one -->
								</div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-style-one ps-xl-5">
                                    <form action="https://html.creativegigstf.com/babun/babun/inc/contact.php" id="contact-form" data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="row controls">
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="">Name*</label>
                                                    <input type="text" placeholder="Your Name*" name="name" required="required" data-error="Name is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label for="">Email*</label>
                                                    <input type="email" placeholder="Email Address*" name="email" required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-35">
                                                    <textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12"><button class="btn-four tran3s w-100 d-block">Send Message</button></div>
                                        </div>
                                    </form>
                                </div> <!-- /.form-style-one -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-banner mt-120 lg-mt-80">
                <div class="gmap_canvas h-100 w-100">
                    <iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka%20collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
		</div>
		<!-- ./contact-us-section -->
 
@endsection