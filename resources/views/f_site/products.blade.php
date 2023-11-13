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
					<div class="col-lg-7">
						<h1 class="hero-heading d-inline-block position-relative">{{$m_details['md_title']}} <img src="{{asset('site/images/shape/shape_26.svg')}}" alt=""></h1>
					</div>
                    <div class="col-xl-4 col-lg-5 ms-auto">
                        <p class="text-white text-lg mb-70 lg-mb-40">{{$m_details['md_sub_title']}}</p>
                        <ul class="style-none d-inline-flex pager">
                            <li><a href="{{route('home')}}">Home</a></li>
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
        	Product Section One
        ============================================== 
        -->
        <div class="product-section-one mt-150 lg-mt-80 mb-150 lg-mb-60">
            <div class="container">
                <?php
                    $cupage = app('request')->input('users');
                    if(!isset($cupage)){
                        $cupage = 1;
                    }
                    $p_f =0; 
                    $p_l =0; 

                    if($cupage==1){
                        $p_f =0+1;
                        $p_l =$cupage*$per_p;
                        if($prod_count<$p_l){
                            $p_l =$prod_count;
                        }

                    }else{
                        $p_f =($cupage-1)*$per_p+1;
                        $p_l =$cupage*$per_p;
                        if($prod_count<$p_l){
                            $p_l =$prod_count;
                        }
                    } 
                ?>
                <div class="shop-page-header d-lg-flex align-items-center justify-content-between">
                    <p class="m0 md-pb-20">Showing <span class="fw-500 text-dark">{{ $p_f }}–{{ $p_l }}</span> of <span class="fw-500 text-dark">{{$prod_count}}</span> results</p>
                    <ul class="shop-filter-one style-none d-md-flex align-items-center">
                        <li class="me-md-3 sm-mb-10">
                            <select class="theme-select-menu">
                                <option value="Price">Price</option>
                                <option value="Price: low to high">Price: low to high</option>
                                <option value="Price: high to low">Price: high to low</option>
                            </select>
                        </li>
                         <li class="me-md-3 sm-mb-10">
                            <select class="theme-select-menu">
                                <option value="Category">Category</option>
                                <option value="Mens items">Books</option>
                                <option value="Womens items">Visiting Card</option>
                                <option value="Womens items">Magazine</option>
                            </select>
                        </li>
                        <!--<li>
                            <select class="theme-select-menu">
                                <option value="Popularity">Popularity</option>
                                <option value="Trending items">Trending items</option>
                                <option value="Newest items">Newest items</option>
                            </select>
                        </li> -->
                    </ul>
                </div> <!-- /.shop-page-header -->
        
                <div class="products-wrapper mt-40">
                    <div class="row gx-xxl-5">
				        @foreach($prod_list as $prod_row)                 

                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="product-block-one mb-60 md-mb-40">
                                    <div class="img-holder style-two">
                                        <a href="{{route('product-details',$prod_row->pro_slug)}}" class="d-flex align-items-center justify-content-center h-100">
                                            <img src="{{asset('uploads/products/$prod_row->pro_img')}}" data-src="{{asset('uploads/products/'.$prod_row->pro_img.'')}}" alt="{{$prod_row->pro_title}}" class="lazy-img product-img tran4s w-100">
                                        </a>
                                        <a href="{{route('product-details',$prod_row->pro_slug)}}" class="cart-icon"><i class="bi bi-suit-heart"></i></a>
                                        <a href="{{route('product-details',$prod_row->pro_slug)}}" class="cart-button">View Details</a>
                                    </div> <!-- /.img-holder -->
                                    <div class="product-meta">
                                        <div class="d-lg-flex align-items-center justify-content-between">
                                            <a href="{{route('product-details',$prod_row->pro_slug)}}" class="product-title">{{$prod_row->pro_title}}</a>
                                            <ul class="style-none d-flex rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">${{$prod_row->pro_s_price}}</div>
                                    </div> <!-- /.product-meta -->
                                </div> <!-- /.product-block-two -->
                            </div>
				        @endforeach 
                         
                    </div>

                    <div class="pagination-one mt-30 lg-mt-10">
                    {{ $prod_list->links() }}
                    
                        <ul class="style-none d-flex align-items-center justify-content-center">
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">Last <i class="bi bi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.pagination-one -->
                </div> <!-- /.products-wrapper -->
            </div>
        </div> <!-- /.product-section-one -->

		



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