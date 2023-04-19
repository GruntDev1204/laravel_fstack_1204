<aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="/blog/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Gnurt's blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @if (Auth::guard('people')->check())
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::guard('people')->user()->avatar}}" class="profile-user-img img-fluid img-circle" style="height: 40px;width:40px" alt="User Image">
        </div>
        <div class="info">
            <a href="/people/profile/{{Auth::guard('people')->id()}}" class="d-block">{{Auth::guard('people')->user()->ho_va_ten}}</a>
        </div>
      </div>



      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a type="submit" class="nav-link active">
              <i class="nav-icon fa-solid fa-clock"></i>
              <p>
                Activitives
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/people/profile/{{Auth::guard('people')->id()}}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p> Your Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a type="submit" class="nav-link active">
              <i class="nav-icon fas fa-signs-post"></i>
              <p>
                Your Post
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/people/loadPrivate" class="nav-link">
                  <i class="fas fa-lock nav-icon"></i>
                  <p> See Your Private Post</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a type="submit" class="nav-link active">
                <i class="fa-solid fa-globe nav-icon"></i>
              <p>
                Public
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/people/indexUser" class="nav-link">
                        <i class="fa-solid fa-users nav-icon"></i>
                      <p> List User </p>
                    </a>
                  </li>
            </ul>
          </li>


          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      @else
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a type="submit" class="nav-link active">
                <i class="fa-solid fa-tower-broadcast"></i>
              <p>
                Join Community
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/people/signup" class="nav-link">
                    <i class="fa-solid fa-circle-plus nav-icon"></i>
                  <p>Signup </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/people/login" class="nav-link">
                    <i class="fa-solid fa-right-to-bracket nav-icon"></i>
                  <p> Login </p>
                </a>
              </li>

            </ul>
          </li>


          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      @endif

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
