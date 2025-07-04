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
            <div class="px-6 py-4 border-b border-gray-200 table-title">
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-4">
                  <h2 class="text-xl font-bold text-gray-800">
                    <i class="mb-6"></i>User Management
                  </h2>
                  <!-- Tombol Tambah User -->
                  <button 
                    onclick="openModal()"
                    class="px-4 py-2 text-sm text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400">
                    Tambah User
                  </button>
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
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama User</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Gmail</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Role</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($users as $user)
              <tr>
                <td class="table-td">{{ $loop->iteration }}</td>
                <td class="table-td">{{ $user->name }}</td>
                <td class="table-td">{{ $user->email }}</td>
                <td class="table-td">{{ $user->phone ?? '-' }}</td>
                <td class="table-td">{{ $user->role }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                  <!-- Action buttons -->
                  <button class="text-blue-500 hover:text-blue-700 mr-3"  onclick="openEditModal('{{ $user->id }}', '{{ $user->name }}', '{{ $user->email }}', '{{ $user->phone ?? '' }}', '{{ json_encode($user->roles->pluck('name')) }}')">
                    <i class="fas fa-edit"></i>
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>


  

  <!-- Tambahkan Font Awesome untuk icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <style>
    .table-td {
      padding: 12px 24px;
      text-align: left;
    }
    .table-wrapper {
      overflow-x: auto;
      margin-top: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    .table-title {
      background-color: #f9fafb;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }
  </style>
</x-app-layout>
<x-addmodaluser :roles="$roles"></x-addmodaluser>

<script>
    // Fungsi pencarian
    document.getElementById('searchInput').addEventListener('input', function() {
      document.getElementById('searchForm').submit();
    });

</script>  