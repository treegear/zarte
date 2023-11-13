    <!-- Header Section Start -->
     <!--==========================
    Facebook Like Button Setup
  ============================-->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">DIGITIZING CRAFT</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--         <a href="#intro"><img src="img/logo.png" alt="" title=""></a>-->
      </div>
      <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{url('')}}">Home</a></li>
        <li class="menu-active"><a class="nav-link page-scroll {{ Route::currentRouteName() =='login'?'active':''}}" href="{{route('login')}}">Login</a></li>
       
       
         <!-- <li class="menu-active"><a class="nav-link page-scroll {{ Route::currentRouteName() =='guestorder.create'?'active':''}}" href="">Guest Order</a></li> -->
        <li><a href="{{url('')}}#gallery">Gallery</a></li>
        <li><a href="{{url('')}}#about">About Us</a></li>
        <li><a href="{{url('')}}#more-features">Services</a></li>
        <li><a href="{{url('')}}#contact">Contact Us</a></li>
      
        </ul>
      </nav><!-- #nav-menu-container -->
     
    </div>
  </header><!-- #header -->
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
<!-- Header Section End --> 