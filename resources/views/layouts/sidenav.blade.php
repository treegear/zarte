<!-- Vertical Nav -->
<div class="kleon-vertical-nav">
	<!-- Logo  -->
	<div class="logo d-flex align-items-center justify-content-between">
		<a href="{{route('dashborad')}}" class="d-flex align-items-center gap-3 flex-shrink-0">
			<img src="{{asset('uploads/logo/'.$s_data->s_admin_logo.'')}}" alt="logo" style="width: 55px;">
			<div class="position-relative flex-shrink-0">
				<h2> {{ $s_data->s_admin_name }}  </h2>
				<!-- <img src="{{asset('assets/img/logo-text.svg')}}" alt="" class="logo-text">
				<img src="{{asset('assets/img/logo-text-whitAe.svg')}}" alt="" class="logo-text-white"> -->
			</div>
		</a>
		<button type="button" class="kleon-vertical-nav-toggle"><i class="bi bi-list"></i></button>
	</div>
	<div class="kleon-navmenu"> 
		<ul class="main-menu">

			
			<li class="menu-item  @if($is_act_menu=='da') active @endif"><a href="{{route('dashborad')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-18"></i></span> <span class="nav-text">Dashboards</span></a></li>

			<li class="menu-item menu-item-has-children @if($is_act_s_menu=='mm') active @endif"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-16"></i></span> <span class="nav-text">Metta & Page Details</span></a> 
                <ul class="sub-menu">
					@foreach($menus_list as $row_menu)
						<li class="menu-item  @if($is_act_s_menu==$row_menu['m_slug']) active @endif"><a href="{{route('menus.edit',base64_encode($row_menu['m_id']))}}"><span class="nav-icon flex-shrink-0"></span> <span class="nav-text">{{ $row_menu['m_name'] }}</span></a></li>
					
					@endforeach 
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
			
			<li class="menu-item menu-item-has-children @if($is_act_s_menu=='prod') active @endif"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-16"></i></span> <span class="nav-text">Products</span></a> 
                <ul class="sub-menu">
					<li class="menu-item  @if($is_act_menu=='cat') active @endif"><a href="{{route('productCategory.index')}}"><span class="nav-icon flex-shrink-0"> </span> <span class="nav-text">Category</span></a></li> 
					
					<li class="menu-item  @if($is_act_menu=='prod') active @endif"><a href="{{route('products.index')}}"><span class="nav-icon flex-shrink-0"> </span> <span class="nav-text">Products</span></a></li> 
					
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
			
 
			<li class="menu-item  @if($is_act_menu=='slider') active @endif"><a href="{{route('slider.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Slider</span></a></li>

			
			<li class="menu-item  @if($is_act_menu=='services') active @endif"><a href="{{route('services.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">services</span></a></li>
			
			<li class="menu-item  @if($is_act_menu=='partners') active @endif"><a href="{{route('partners.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Partners</span></a></li>
			
			<li class="menu-item  @if($is_act_menu=='teee') active @endif"><a href="{{route('testimonial.index')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Testimonials</span></a></li>
			
			<li class="menu-item  @if($is_act_menu=='set') active @endif"><a href="{{route('settings.edit')}}"><span class="nav-icon flex-shrink-0"><i class="bi bi-list fs-18"></i></span> <span class="nav-text">Settings</span></a></li>


			
		</ul>
	</div>
	
</div>