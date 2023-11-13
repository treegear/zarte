<!-- Vertical Nav -->
<div class="kleon-vertical-nav">
	<!-- Logo  -->
	<div class="logo d-flex align-items-center justify-content-between">
		<a href="{{route('home')}}" class="d-flex align-items-center gap-3 flex-shrink-0">
			<img src="{{asset('assets/img/logo-icon.svg')}}" alt="logo">
			<div class="position-relative flex-shrink-0">
				<img src="{{asset('assets/img/logo-text.svg')}}" alt="" class="logo-text">
				<img src="{{asset('assets/img/logo-text-whitAe.svg')}}" alt="" class="logo-text-white">
			</div>
		</a>
		<button type="button" class="kleon-vertical-nav-toggle"><i class="bi bi-list"></i></button>
	</div>
	<div class="kleon-navmenu"> 
		<ul class="main-menu">

			
			<li class="menu-item  @if($is_act_menu=='da') active @endif"><a href="{{route('dashborad')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-18"></i></span> <span class="nav-text">Dashboards</span></a></li>

			@foreach($menus_list as $row_menu)
				<li class="menu-item  @if($is_act_menu==$row_menu['m_slug']) active @endif"><a href="{{route('menus.edit',base64_encode($row_menu['m_id']))}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">{{ $row_menu['m_name'] }}</span></a></li>
				
			@endforeach
			

			<li class="menu-item  @if($is_act_menu=='companies') active @endif"><a href="{{route('companies.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Companies</span></a></li>

			<li class="menu-item  @if($is_act_menu=='members') active @endif"><a href="{{route('members.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Members</span></a></li>

			<li class="menu-item  @if($is_act_menu=='services') active @endif"><a href="{{route('services.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">services</span></a></li>

			

			<li class="menu-item  @if($is_act_menu=='slider') active @endif"><a href="{{route('slider.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Slider</span></a></li>

			<li class="menu-item  @if($is_act_menu=='partners') active @endif"><a href="{{route('partners.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Partners</span></a></li>


			
		</ul>
	</div>
	
</div>