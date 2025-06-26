<x-app-layout>
    
    <div class="app-wrapper">
    <x-navbar />
 
      <x-sidebar />
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Edit Pengumpulan Data Skripsi</h3></div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <div class="app-wrapper">
        <!--begin::App Main-->
        <main class="app-main">
         
            <!--end::App Content Header-->
            
            <!--begin::App Content-->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline mb-4">
                          
                                
                                <form action="{{ route('uploads.update', $upload->id) }}" method="POST" class="card-body"  enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                    <div class="card-body">
                                        <!-- Informasi Mahasiswa -->
                                        <div class="form-section">
                                            <h5 class="form-section-title">
                                                <i class="fas fa-user-graduate"></i> Informasi Mahasiswa
                                            </h5>
                                            
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" placeholder="isi nama lengkap" name="name" required value="{{ $upload->name }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">NIM</label>
                                                    <input type="text" class="form-control" placeholder="isi NIM" name="nim" required value="{{ $upload->nim }}">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <label class="form-label">Program Studi</label>
                                                    <input type="text" class="form-control" placeholder="isi program studi" name="program" required value="{{ $upload->program }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Fakultas</label>
                                                    <input type="text" class="form-control" placeholder="fakultas" name="fakultas" required value="{{ $upload->fakultas }}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Data Skripsi -->
                                        <div class="form-section">
                                            <h5 class="form-section-title">
                                                <i class="fas fa-book"></i> Data Skripsi
                                            </h5>
                                            
                                            <div class="mb-4">
                                                <label class="form-label">Judul Skripsi</label>
                                                <input type="text" class="form-control" placeholder="Masukkan judul skripsi Anda" name="judul" required value="{{ $upload->judul }}">
                                            </div>
                                            
                                          <div class="mb-4">
                                              <label class="form-label">Tahun</label>
                                              <select class="form-select" name="tahun" required>
                                                  <option disabled {{ old('tahun', $upload->tahun) ? '' : 'selected' }}>Pilih tahun</option>
                                                  <option value="2023" @selected(old('tahun', $upload->tahun) == '2023')>2023</option>
                                                  <option value="2022" @selected(old('tahun', $upload->tahun) == '2022')>2022</option>
                                                  <option value="2021" @selected(old('tahun', $upload->tahun) == '2021')>2021</option>
                                                  <option value="2020" @selected(old('tahun', $upload->tahun) == '2020')>2020</option>
                                              </select>
                                          </div>

                                            
                                            <div class="mb-4">
                                                <label class="form-label">Link DOI</label>
                                                <input type="text" class="form-control" placeholder="Contoh: https://doi.org/10.xxxx/xxxxx" name="link_doi" value="{{ $upload->link_doi }}" required>
                                                <small class="text-muted">Pastikan link DOI valid dan dapat diakses</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Upload Dokumen -->
                                        <div class="form-section">
                                            <h5 class="form-section-title">
                                                <i class="fas fa-cloud-upload-alt"></i> Upload Dokumen
                                            </h5>
                                            
                                            <div class="mb-4">
                                                <label class="form-label">Abstrak</label>
                                                <div class="upload-area" id="abstractUploadArea">
                                                    <div class="upload-icon">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </div>
                                                    <h5 class="text-blue">Seret file abstrak ke sini atau klik untuk memilih</h5>
                                                    <p class="text-muted">Format PDF (Maks. 5MB)</p>
                                                    <input type="file" id="abstractFile" class="d-none" accept=".pdf" name="file">
                                                </div>
                                                <div id="abstractFileInfo" class="d-none">
                                                    <div class="file-info">
                                                        <span class="file-name" id="abstractFileName"></span>
                                                        <span class="file-remove" onclick="removeFile('abstract')">
                                                            <i class="fas fa-times"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-4">
                                                <label class="form-label">Dokumen Skripsi Lengkap</label>
                                                <div class="upload-area" id="thesisUploadArea">
                                                    <div class="upload-icon">
                                                        <i class="fas fa-file-word"></i>
                                                    </div>
                                                    <h5>Seret file skripsi ke sini atau klik untuk memilih</h5>
                                                    <p class="text-muted">Format DOC/DOCX atau PDF (Maks. 20MB)</p>
                                                    <input type="file" id="thesisFile" class="d-none" accept=".doc,.docx,.pdf" name="file2">
                                                </div>
                                                <div id="thesisFileInfo" class="d-none">
                                                    <div class="file-info">
                                                        <span class="file-name" id="thesisFileName"></span>
                                                        <span class="file-remove" onclick="removeFile('thesis')">
                                                            <i class="fas fa-times"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Informasi Tambahan -->
                                        <div class="form-section">
                                            <h5 class="form-section-title">
                                                <i class="fas fa-info-circle"></i> Informasi Tambahan
                                            </h5>
                                            
                                            <div class="mb-4">
                                                <label class="form-label">Kata Kunci</label>
                                                <input type="text" class="form-control" placeholder="Pisahkan dengan koma, contoh: AI, Machine Learning, Data Mining" name="kata_kunci" required value="{{ $upload->kata_kunci }}">
                                            </div>
                                            
                                            <div class="mb-4">
                                                <label class="form-label">Dosen Pembimbing</label>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" placeholder="Dosen Pembimbing 1" name="dosenpembimbing1" required value="{{ $upload->dosenpembimbing1 }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Dosen Pembimbing 2" name="dosenpembimbing2" required value="{{ $upload->dosenpembimbing2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-footer">
                                        <a href="{{ route('tables.index') }}" class="btn btn-secondary me-2">
                                            <i class="fas fa-times me-1"></i> Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-1"></i> Submit Data
                                        </button>
                                    </div>

                                </form>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!--end::App Content-->

             <script>
        // Fungsi untuk menangani upload file
        function setupFileUpload(uploadAreaId, fileInputId, fileInfoId, fileNameId) {
            const uploadArea = document.getElementById(uploadAreaId);
            const fileInput = document.getElementById(fileInputId);
            const fileInfo = document.getElementById(fileInfoId);
            const fileName = document.getElementById(fileNameId);
            
            uploadArea.addEventListener('click', () => {
                fileInput.click();
            });
            
            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.style.borderColor = '#4361ee';
                uploadArea.style.backgroundColor = 'rgba(67, 97, 238, 0.05)';
            });
            
            uploadArea.addEventListener('dragleave', () => {
                uploadArea.style.borderColor = '#dee2e6';
                uploadArea.style.backgroundColor = '#fafbfc';
            });
            
            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.style.borderColor = '#dee2e6';
                uploadArea.style.backgroundColor = '#fafbfc';
                
                if (e.dataTransfer.files.length) {
                    handleFileSelection(e.dataTransfer.files[0]);
                }
            });
            
            fileInput.addEventListener('change', () => {
                if (fileInput.files.length) {
                    handleFileSelection(fileInput.files[0]);
                }
            });
            
            function handleFileSelection(file) {
                fileName.textContent = file.name;
                fileInfo.classList.remove('d-none');
            }
        }
        
        // Fungsi untuk menghapus file
        function removeFile(type) {
            if (type === 'abstract') {
                document.getElementById('abstractFile').value = '';
                document.getElementById('abstractFileInfo').classList.add('d-none');
            } else if (type === 'thesis') {
                document.getElementById('thesisFile').value = '';
                document.getElementById('thesisFileInfo').classList.add('d-none');
            }
        }
        
        // Inisialisasi upload area
        document.addEventListener('DOMContentLoaded', () => {
            setupFileUpload('abstractUploadArea', 'abstractFile', 'abstractFileInfo', 'abstractFileName');
            setupFileUpload('thesisUploadArea', 'thesisFile', 'thesisFileInfo', 'thesisFileName');
        });
    </script>
  
</x-app-layout>