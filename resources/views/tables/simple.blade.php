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
                                  <i class="mb-6"></i>Tabel Upload
                              </h2>
                          </div>
                            <div class="flex space-x-3 mb-3">
                              <form class="flex items-center max-w-lg">
                                <div class="relative w-full">
                                  <input type="text" class="search-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama Mahasiswa</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nim</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Program Studi</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fakultas</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Judul Skripsi</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tahun</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Link Doi</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Kata Kunci</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Pembimbing 1</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Pembimbing 2</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Abstrak</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Dokumen Skripsi</th>
                                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Doi</th>
                              </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                              @foreach ($uploads as $upload)
                              <tr>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $loop->iteration }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->name }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->nim }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->program }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->fakultas }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->judul }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->tahun }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->link_doi }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->kata_kunci }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->dosenpembimbing1 }}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->dosenpembimbing2 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
    <a href="{{ asset('storage/' . $upload->file) }}" 
       download="{{ $upload->name }}_dokumen1.pdf" 
       class="text-blue-600 hover:underline">Download PDF 1</a>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
    <a href="{{ asset('storage/' . $upload->file2) }}" 
       download="{{ $upload->name }}_dokumen2.pdf" 
       class="text-blue-600 hover:underline">Download PDF 2</a>
</td>
                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    <a href="{{ asset('storage/' . $upload->file2) }}" 
                                      download="{{ $upload->name }}_dokumen3.pdf" 
                                      class="text-blue-600 hover:underline">Download PDF</a>
                                </td> --}}


                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $upload->doi }}</td>
                                
                              @endforeach
                              
                          </tbody>
                      </table>


        </main>
      </x-app-layout>