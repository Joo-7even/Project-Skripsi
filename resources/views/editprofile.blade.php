
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
              <div class="col-sm-6"><h3 class="mb-0">Edit Profile</h3></div>
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
                <div class="">
                 
              
                 <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-2">
                {{-- <div class="">
                    @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="">
                        @include('profile.partials.update-password-form')
                    </div>
                </div> --}}
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