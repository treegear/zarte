<header class="header kleon-default-nav">
	<div class="d-none d-xl-block">
		<div class="header-inner d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
			<div class="header-left-part d-flex align-items-center flex-grow-1 w-100">
			</div>
			<div class="header-right-part d-flex align-items-center flex-shrink-0">
				<ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
					<li class="nav-item nav-author">
						<a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('assets/img/users.png')}}" alt="img" width="54" class="rounded-2">
							<div class="nav-toggler-content">
								<h6 class="mb-0">{{auth()->user()->name}}</h6>
								<div class="ff-heading fs-14 fw-normal text-gray">{{auth()->user()->user_type}}</div>
							</div>
						</a>
						<div class="dropdown-widget dropdown-menu p-0 admin-card">
							<div class="dropdown-wrapper">
								<div class="card mb-0">
									<div class="card-header p-3 text-center">
										<img src="{{asset('assets/img/users.png')}}" alt="img" width="80" class="rounded-circle avatar">
										<div class="mt-2">
											<h6 class="mb-0 lh-18">{{auth()->user()->name}}</h6>
											<div class="fs-14 fw-normal text-gray">{{auth()->user()->user_type}}</div>
										</div>
									</div>
									<div class="card-footer p-3">
										<a href="{{route('logout')}}" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="small-header d-flex align-items-center justify-content-between d-xl-none">
		<div class="logo">
			<a href="index{{route('logout')}}" class="d-flex align-items-center gap-3 flex-shrink-0">
				<img src="{{asset('uploads/logo/'.$s_data->s_admin_logo.'')}}" alt="logo"  style="width: 55px;">
				<div class="position-relative flex-shrink-0">
					<!-- <img src="{{asset('assets/img/logo-text.svg')}}" alt="" class="logo-- -->
				</div>
			</a>
		</div>
		<div>
			<button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
			<button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
		</div>
	</div>
	<div class="header-mobile-option">
		<div class="header-inner">
			<div class="d-flex align-items-center justify-content-end flex-shrink-0">
				<ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
					<li class="nav-item nav-settings">
						<a href="#" class="nav-toggler">
						<i class="bi bi-gear-fill"></i>
						</a>
					</li>
					<li class="nav-item nav-author px-3">
						<a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('assets/img/users.png')}}" alt="img" width="40" class="rounded-2">
							<div class="nav-toggler-content">
								<h6 class="mb-0">{{auth()->user()->name}}</h6>
								<div class="ff-heading fs-14 fw-normal text-gray">{{auth()->user()->user_type}}</div>
							</div>
						</a>
						<div class="dropdown-widget dropdown-menu p-0 admin-card">
							<div class="dropdown-wrapper">
								<div class="card mb-0">
									<div class="card-header p-3 text-center">
										<img src="{{asset('assets/img/users.png')}}" alt="img" width="60" class="rounded-circle avatar">
										<div class="mt-2">
											<h6 class="mb-0 lh-18">{{auth()->user()->name}}</h6>
											<div class="fs-14 fw-normal text-gray">{{auth()->user()->user_type}}</div>
										</div>
									</div>
									<div class="card-footer p-3">
										<a href="{{route('logout')}}" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>