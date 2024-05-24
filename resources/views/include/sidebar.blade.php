{{-- sidebar start --}}

  <div class="left-side-menu">
      <div class="h-100" data-simplebar>
        <!-- User box -->
        

        <!--- Sidemenu -->
        <div id="sidebar-menu" >
          <ul id="side-menu">
            {{-- <li class="menu-title mt-2">INVENTORY</li> --}}

            <li>
              <a href="#create" data-toggle="collapse">
                <i data-feather="users"></i>
                <span>Create Barcode</span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="create">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{ route('create') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Barcode 
                      Create</a>
                  </li>
                  {{-- <li>
                    <a href="manageParties.html"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                      Parties</a>
                  </li> --}}
                </ul>
              </div>
            </li>
            <li>
              <a href="#sidebarCrm" data-toggle="collapse">
                <i data-feather="edit"></i>
                <span>Update  Barcode</span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarCrm">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{route('dashboard')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Update
                      Barcode</a>
                  </li>
                  <li>
                    {{-- <a href="managebills.html"><i data-feather="list" class="pr-0 mr-1"></i>Manage all
                      bills</a>
                  </li> --}}
                </ul>
              </div>
            </li>
              <li>
              <a href="#sidebarEcommerce" data-toggle="collapse">
                <i data-feather="users"></i>
                <span>Show Barcode</span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{ route('show') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Show
                    Barcode  </a>
                  </li>
                  {{-- <li>
                    <a href="manageParties.html"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                      Parties</a>
                  </li> --}}
                </ul>
              </div>
            </li>
            <li>
          
          </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -left -->
    </div>


{{-- End sidebar --}}