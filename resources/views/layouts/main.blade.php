<!DOCTYPE html>
<html lang="en">

<!-- Header-top -->
@include('layouts.partials.header-top')
<!-- end header-top -->
<body>

  <!-- Page div nya jangan dihapus--> 
<div class="page"> 

  <!-- Header -->
@include('layouts.partials.header')
  <!-- end header -->

   <!-- Navbar -->
@include('layouts.partials.navbar')
  <!-- end nav --> 
  
  <!-- Slider -->
@include('layouts.partials.slider')
  <!-- end Slider --> 
  
  <!-- header service -->
@include('layouts.partials.header-service')
  <!-- end header service --> 

  <!--  brand logo -->
@include('layouts.partials.brand-logo')
  <!-- end  brand logo -->
  
  <!-- main slider best seller -->
@include('layouts.partials.slider-best-seller')
  <!-- End main slider best seller--> 
  
  <!-- offer banner section -->
@include('layouts.partials.banner-offer')
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->
@include('layouts.partials.slider-featured')
  <!-- End Featured Slider --> 

  <!-- promo banner section -->
@include('layouts.partials.banner-promo')
  <!-- End promo banner section -->

  <!-- middle slider -->
@include('layouts.partials.slider-middle')
  <!-- End middle slider -->

  <!-- Footer --> 
@include('layouts.partials.footer')
  <!-- End Footer -->

</div>
  <!-- End Page div nya jangan dihapus --> 

<!-- JavaScript --> 
@include('layouts.partials.script-body')

</body>
</html>