 
       <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light mr-10">Management Skripsi</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div><!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
          [    data-lte-toggle="treeview"]
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              
              <li class="nav-item">
                <a href="{{ route('tables.index') }}" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>Tabel Upload</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('uploadskripsi.index') }}" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Upload Skripsi
                  </p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>
                    Daftar Skripsi Mahasiswa
                  </p>
                </a>
              </li> --}}
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      