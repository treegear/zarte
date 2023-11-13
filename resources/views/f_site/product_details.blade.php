@extends('f_site.master')
@section('content')

		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		@if($pro_data->pro_img!='')
			<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative" style="background-image: url({{asset('uploads/products/'.$pro_data->pro_img.'
				')}});">
		@else 
		<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative" style="background-image: url({{asset('site/images/media/img_26.jpg')}}");">

		@endif
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h1 class="hero-heading d-inline-block position-relative">{{$pro_data->pro_title}} <img src="{{asset('site/images/shape/shape_26.svg')}}" alt=""></h1>
					</div>
                    <div class="col-xl-4 col-lg-5 ms-auto">
                        <p class="text-white text-lg mb-70 lg-mb-40">  </p>
                        <ul class="style-none d-inline-flex pager">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>/</li>
							<li><a href="{{route('products')}}">products</a></li>
                            <li>/</li>
                            <li>{{$pro_data->pro_title}}</li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
		<!-- /.inner-banner-one -->



		<!-- 
		=============================================
			Product Details One
		============================================== 
		-->
		<div class="product-details-one mt-150 lg-mt-80 mb-150 lg-mb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 order-lg-2">
						<div class="tab-content product-img-tab-content h-100">						

							@foreach($psi_list as $psi_key=>$psi_row) 
								<div class="tab-pane fade @if($psi_key==0)show active @endif h-100" id="img{{$psi_key}}" role="tabpanel">+
									<a class="fancybox w-100 h-100 d-flex align-items-center justify-content-center" data-fancybox="" href="{{asset('uploads/products/'.$psi_row->psi_img.'')}}" tabindex="-1">
										<img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('uploads/products/'.$psi_row->psi_img.'')}}" alt="" class="lazy-img">
									</a>
								</div>
							@endforeach  

						</div>
					</div>
					<div class="col-lg-1 order-lg-1">
						<ul class="nav nav-tabs flex-lg-column product-img-tab" id="myTab" role="tablist">
							@foreach($psi_list as $psi_key=>$psi_row) 
								
								<li class="nav-item">
									<button class="nav-link @if($psi_key==0) active @endif" data-bs-toggle="tab" data-bs-target="#img{{$psi_key}}" type="button" role="tab" aria-selected="@if($psi_key==0) true @else falsze @endif"><img src="{{asset('site/images/lazy.svg')}}" data-src="{{asset('uploads/products/'.$psi_row->psi_img.'')}}" alt="" class="m-auto lazy-img"></button>
								</li>
							@endforeach  
							
						</ul>
					</div>
					<div class="col-lg-6 order-lg-3">
						<div class="product-info ps-xxl-5 md-mt-40">
						
							<h2 class="product-name">{{$pro_data->pro_title}}</h2>
						
							<div class="price"><del>${{$pro_data->pro_price}}</del> ${{$pro_data->pro_s_price}}</div>
							
							<p class="description-text">{{$pro_data->pro_desc}}</p>
							<ul class="product-feature style-none">
								{!! $pro_data->pro_features !!}
							</ul>
							
							<div class="button-group mt-30 d-sm-flex align-items-center">
								<a href="enquiry.php" class="btn-four mt-15 me-sm-4 d-block">Enquiry</a>
							
							</div>
						</div> <!-- /.product-info -->
					</div>
				</div>
		
			
		
			</div>
		</div> <!-- /.product-details-one -->

		



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