 <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
          <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-md-inline"> {{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <p>
                    {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                  </p>
                </li>
                
                <li class="user-footer">
                    <a href="{{ route('profile.update') }}" class="btn btn-default btn-flat">Profile</a>
                    
                    <form method="POST" action="{{ route('logout') }}" class="float-end">
                        @csrf
                        <button type="submit" class="btn btn-default btn-flat">
                            Sign out
                        </button>
                    </form>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>