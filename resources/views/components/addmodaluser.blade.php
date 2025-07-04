
  <!-- Modal Tambah User -->
  <div id="tambahUserModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
      <div class="mt-3 text-center">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah User Baru</h3>
        <div class="mt-2 px-7 py-3">            
          <form id="userForm" action="{{ route('usermanagement.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
             @csrf
            <div class="mb-4">
              <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
              <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
              <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
              <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon</label>
              <input type="tel" id="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
              <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
              <select id="role" name="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="" disabled selected>Pilih Role</option>
                            @if(isset($roles) && count($roles) > 0)
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada role tersedia</option>
                            @endif
              </select>
            </div>
            <div class="items-center px-4 py-3">
              <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 mr-2">
                Batal
              </button>
              <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 mt-2">
                Simpan User
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

{{-- modal edit user --}}

  <div id="EditUserModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
      <div class="mt-3 text-center">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah User Baru</h3>
        <div class="mt-2 px-7 py-3">            
         <form id="editUserForm" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
          @csrf
          @method('PUT')
           <input type="hidden" id="user-id" name="id">
            <div class="mb-4">
              <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
              <input type="text" id="edit-name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
              <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
              <input type="email" id="edit-email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
              <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon</label>
              <input type="tel" id="edit-phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
              <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
              <select id="edit-role" name="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="" disabled selected>Pilih Role</option>
                            @if(isset($roles) && count($roles) > 0)
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada role tersedia</option>
                            @endif
              </select>
            </div>
            <div class="items-center px-4 py-3">
              <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 mr-2">
                Batal
              </button>
              <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 mt-2">
                Simpan User
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>