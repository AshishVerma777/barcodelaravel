<!DOCTYPE html>
<html lang="en">


{{-- header start --}}

@include('include.header')
{{-- end header --}}
<body data-layout-mode="detached"
  data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
      <div class="container-fluid">
      <div class="main_container">
      <div class="Main_logo_1" style="margin-left: 40px;">
          <img src="https://vidyagxp.com/vidhyaGxp.png" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" style="scale: 4;" />
          {{-- <p class="text-muted mt-2">Admin Head</p> --}}
          
        </div>
       <div class="main_logo" style="margin-top: -60px;">  <ul class="list-unstyled topnav-menu float-right mb-0">

          <!-- All-->

          <li class="dropdown notification-list topbar-dropdown">
          
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
              role="button" aria-haspopup="false" aria-expanded="false">
              <img src="{{ asset('user/images/ajio-removebg-preview.png') }}" alt="user-image"  style="scale: 1.6;
               background: white;" />
              <span class="pro-user-name ml-1">
                Ajio <i class="mdi mdi-chevron-down"></i>  
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
              <!-- item-->
             

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-user"></i>
                <span>My Account</span>
              </a>

              <div class="dropdown-divider"></div>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-log-out"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul></div>

        <!-- LOGO -->
        <div class="logo-box">
          {{-- <a href="index.html" class="logo logo-dark text-center"> --}}
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="" height="20" />
              
            </span>
          </a>

          {{-- <a href="index.html" class="logo logo-light text-center"> --}}
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-light.png" alt="" height="20" />
            </span>
          </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
          <li>
            <button class="button-menu-mobile waves-effect waves-light">
              <i class="fe-menu"></i>
            </button>
          </li>

          <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </li>
        </ul>
        <div class="clearfix"></div>
      </div></div>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
        @include('include.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page" style="background:aliceblue;">
      {{--  <div class="content bg-white my-4 p-4">  --}}
      <div class="content my-4 p-4" style="background-color:mintcream;">
        <!-- Start Content-->
       @yield('content')
      </div>

      <!-- Footer Start -->
    @include('include.footer')
      <!-- end Footer -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
  </div>

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- Vendor js -->
  <script src="{{asset('assets/js2/vendor.min.js')}}"></script>

  <!-- Plugins js-->
  <script src="{{asset('assets/libs2/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('assets/libs2/apexcharts/apexcharts.min.js')}}"></script>

  <!-- Dashboar 1 init js-->
  <script src="{{asset('assets/js2/pages/dashboard-1.init.js')}}"></script>

  <!-- App js-->
  <script src="{{asset('assets/js2/app.min.js')}}"></script>
</body>

</html>