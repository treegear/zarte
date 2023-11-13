      
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  
  <script src="{{ asset('web/js/jquery/popper.min.js') }}"></script>
  <script src="{{ asset('web/js/jquery/jquery-migrate.min.js') }}"></script>

  <script src="{{ asset('web/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web/js/countto/jquery.countTo.js') }}"></script> 
  <script src="{{ asset('web/js/easing/easing.min.js') }}"></script>
  <script src="{{ asset('web/js/wow/wow.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4="
    crossorigin="anonymous"></script>
<script src="{{ asset('web/js/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('web/js/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('web/js/magnific-popup/magnific-popup.min.js') }}"></script>
<script src="{{ asset('web/js/contactform/contactform.js') }}"></script>
<script src="{{ asset('web/js/main.js') }}"></script>

  
  <!--Start of Tawk.to Script-->
  <!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("Script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5d8b16df6c1dde20ed0354b3/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script> -->
  <!--End of Tawk.to Script-->

  

</body>

</html>



    
     <script src="{{ asset('web/js/toastr.js') }}"></script>
     @if(Session::has('success'))
     <script>
     toastr.success('{{ Session::get('success') }}');
     </script>    
     @endif

     @if(Session::has('info'))
     <script>
     toastr.info('{{ Session::get('info') }}');
     </script>    
     @endif

    


