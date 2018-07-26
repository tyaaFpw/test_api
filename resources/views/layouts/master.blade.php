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
 
@yield('content')

  <!-- Footer --> 
@include('layouts.partials.footer')
  <!-- End Footer -->

</div>
  <!-- End Page div nya jangan dihapus --> 

<!-- JavaScript --> 
@include('layouts.partials.script-body')

</body>
</html>