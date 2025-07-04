
    <x-app-layout>
      
      <div class="app-wrapper">
      <x-navbar />
       
    

    <x-sidebar></x-sidebar>
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-12 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                  <div class="inner">
                     <i class="bi bi-upload"></i> Total Upload: {{ $count }}
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
              
                  </svg>
                  <a
                    href="{{ route('tables.index') }}"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 1-->
              </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
             
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
          <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
</x-app-layout>