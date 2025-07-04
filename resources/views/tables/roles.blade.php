  <x-app-layout>
      <div class="app-wrapper">
        <x-navbar />
        
      <x-sidebar></x-sidebar>
      
        <!--begin::App Main-->
        <main class="app-main">
          <!--begin::App Content Header-->
          <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="row">
                <div class="co <div class="px-6 py-4 border-b border-gray-200 table-title">
                      <div class="flex justify-between items-center">
                          <div>
                              <h2 class="text-xl font-bold text-gray-800">
                                  <i class="mb-6"></i>Roles
                              </h2>
                          </div>
                          <form method="GET" action="" class="flex items-center max-w-lg mb-2" id="searchForm">
                            <div class="relative w-full">
                                <input type="text" name="search" value="" 
                                    placeholder="Cari data..." 
                                    class="search-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    id="searchInput"
                                >
                            </div>
                                <button type="submit" class="ml-2 inline-flex items-center py-2.5 px-3 text-sm font-medium text-white bg-blue-700 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Search
                                </button>
                            </form>

                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Table Container -->
                  <div class="table-wrapper">
                      <table class="table min-w-full divide-y divide-gray-200">
                          <thead>
                              <tr>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Role</th>
                              </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                             @foreach ($roles as $role)
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $role->name }}</td>
                          </tr>
                             @endforeach
                          </tbody>
                      </table>


        </main>
      </x-app-layout>

            <script>
            document.getElementById('searchInput').addEventListener('input', function() {
                document.getElementById('searchForm').submit();
            });
            </script>