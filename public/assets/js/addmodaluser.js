
    // Fungsi untuk modal
    function openModal() {
      document.getElementById('tambahUserModal').classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('tambahUserModal').classList.add('hidden');
    }
  
    // Tutup modal jika klik di luar area modal
    window.addEventListener('click', function(event) {
      const modal = document.getElementById('tambahUserModal');
      if (event.target === modal) {
        closeModal();
      }
    });


  // Fungsi untuk modal
    function openEditModal(id, name, email, phone, roles) {
    const modal = document.getElementById('EditUserModal');
    modal.classList.remove('hidden');

    // Parse role jika berupa string JSON
    const userRole = typeof roles === "string" ? JSON.parse(roles) : roles;

    // Set form action sesuai resource route
    const form = document.getElementById("editUserForm");
    form.action = `/usermanagement/${id}`;

    // Isi form
    document.getElementById('edit-name').value = name;
    document.getElementById('edit-email').value = email;
    document.getElementById('edit-phone').value = phone;
    
    // Set role (ambil pertama jika array)
    document.getElementById("edit-role").value = Array.isArray(userRole) 
        ? userRole[0] 
        : userRole;
}

    function closeEditModal() {
      document.getElementById('EditUserModal').classList.add('hidden');
    }
  
    // Tutup modal jika klik di luar area modal
    window.addEventListener('click', function(event) {
      const modal = document.getElementById('EditUserModal');
      if (event.target === modal) {
        closeModal();
      }
    });
