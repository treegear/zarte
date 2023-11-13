<!DOCTYPE html>
<html lang="en">
    @include('layouts.inc.head')
  <body>
    <!-- Header Section Start -->
    @include('layouts.inc.header')
    <!-- Header Section End --> <!-- Main Carousel Section -->
    
    @yield('content')

  </body>
    <!-- Footer Section Start -->
    @include('layouts.inc.footer')
    <!-- Footer Section End --> 
    @include('layouts.inc.footer-links')
</html>