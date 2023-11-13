
<div class="main-page-wrapper">
		<!-- ===================================================
				Loading Transition
			==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="{{asset('site/images/icon.png')}}" alt="" class="m-auto d-block" width="60"></div>
				<div class="txt-loading">
					<span data-text-preloader="Z" class="letters-loading">
						Z
					</span>
					<span data-text-preloader="a" class="letters-loading">
						a
					</span>
					<span data-text-preloader="r" class="letters-loading">
						r
					</span>
					<span data-text-preloader="t" class="letters-loading">
						t
					</span>
					<span data-text-preloader="e" class="letters-loading">
						e
					</span>
				</div>
			</div>
		</div>

		
		<!-- 
		=============================================
				Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-overlay menu-style-one white-vr sticky-menu">
			<div class="inner-content position-relative">
				<div class="top-header">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="{{route('home')}}" class="d-flex align-items-center">
								<img src="{{asset('uploads/logo/'.$s_data->s_site_logo.'')}}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-md-block"><a href="{{route('contacts')}} " class="btn-one tran3s">Get in Touch</a></li>
							</ul>
						</div> <!--/.right-widget-->
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="{{route('home')}}" class="d-block"><img src="{{asset('uploads/logo/'.$s_data->s_site_logo.'')}}" alt=""></a></div></li>

                                    @foreach($menus_list as $row_menu)
                                        <li class="nav-item @if($is_act_menu==$row_menu['m_slug']) active_m @endif">
                                            <a class="nav-link @if($is_act_menu==$row_menu['m_slug']) active_m @endif" href="{{route($row_menu['m_slug'])}}">{{ $row_menu['m_name'] }}</a>
                                        </li>
                                        
                                    @endforeach
									
									<li class="d-md-none ps-2 pe-2"><a href="{{route('contacts')}}" class="btn-one w-100 mt-15 tran3s">Get in Touch</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



	