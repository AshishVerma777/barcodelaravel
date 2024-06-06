  @php
  $current_route=request()->route()->getName();
  @endphp
  <!-- Main Sidebar Container -->
  {{-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> --}}
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link"> --}}
      {{-- <img src="/assets/barcode/New_logo-agio.png" alt="AdminLTE Logo" class="brand-image bg-white elevation-6" style="opacity: 2.8"> --}}
      {{-- <span class="brand-text font-weight-light"></span> --}}
      {{-- <img src="/assets/barcode/New_logo-agio.png" alt="AdminLTE Logo" class="brand-image bg-white elevation-6" style="opacity: 2.8;width: 231px;height: 179px;margin-top: 10px;margin-left: 10px;"> --}}
    {{-- </a> --}}



    <aside class="main-sidebar sidebar-light-primary elevation-4" style="
    background: linear-gradient(to top, #f3f1efc3 10%, #708ea6 100%) ">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          {{-- <img src="/assets/barcode/New_logo-agio.png" alt="Agio Logo" class="brand-image bg-white  elevation-4" style="opacity: 2.8"> --}}
          {{-- <span class="brand-text font-weight-light">Admin Panel</span> --}}
        </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/barcode/New_logo-agio.png" class="bg-white elevation-2" alt="User Image">
        </div>
        <div class="info">
            <span class="brand-text text-light">Admin Panel</span>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{$current_route=='dashboard'?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{$current_route=='users.index'?'menu-open':''}}">
            <a href="#" class="nav-link {{$current_route=='users.index'?'active':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{$current_route=='users.index'?'active':''}}">
                  <i class="far fas fa-user"></i>
                  <p>Users</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
