<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Animashit Creative Studio</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/fontawesome6.4.2/css/all.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('backend/corona/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backend/corona/assets/css/animashit.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('backend/corona/assets/images/logodark.png') }}" />
    <link rel="stylesheet" href="{{ url('backend/corona/assets/vendors/summernote/dist/summernote-bs5.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"> --}}
    @yield('style')
  </head>

<body>
    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner d-none" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_sidebar.html -->
      @include('backend/partials/_sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('backend/partials/_navbar')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
            @include('backend/partials/_footer')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('backend/corona/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    {{-- <script src="{{ url('backend/corona/assets/js/jquery.cookie.js" type="text/javascript') }}"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="{{ url('backend/corona/assets/js/jquery.cookie.js') }}"></script> --}}
    <script src="{{ url('backend/corona/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('backend/corona/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ url('backend/corona/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ url('backend/corona/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ url('backend/corona/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('backend/corona/assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('backend/corona/assets/js/hoverable-collapse.js') }}"></script>
    {{-- <script src="{{ url('backend/corona/assets/js/misc.js') }}"></script> --}}
    <script src="{{ url('backend/corona/assets/js/settings.js') }}"></script>
    <script src="{{ url('backend/corona/assets/js/todolist.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{ url('backend/corona/assets/vendors/summernote/dist/summernote-bs5.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('backend/corona/assets/js/dashboard.js') }}"></script>
    <script src="{{ url('backend/corona/assets/js/script.js') }}"></script>
    
    <!-- End custom js for this page -->
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    {{-- <script>  
      $(document).ready(function(){
        $('textarea.richtext').summernote('code');
      });
    </script> --}}
    @yield('script')
</body>
</html> 