document.addEventListener('DOMContentLoaded', function () {
  // panggil DOM yang diperlukan
  const tampilModalUbah = document.querySelectorAll('.tampilModalUbah');
  const formModalLabel = document.querySelector('#formModalLabel');
  const tombolTambahMahasiswa = document.querySelectorAll('#tombolTambahMahasiswa');
  const tombolSubmitForm = document.querySelector('.modal-footer button[type=submit]');
  const formModal = document.querySelector('.modal-body form ');
  const key = document.querySelector('#key');
  const nama = document.querySelector('#nama');
  const nrp = document.querySelector('#nrp');
  const email = document.querySelector('#email');
  const jurusan = document.querySelector('#jurusan');

  tampilModalUbah.forEach(function (e) {
    e.addEventListener('click', function () {
      formModalLabel.innerHTML = 'Ubah data mahasiswa';
      tombolSubmitForm.innerHTML = 'Ubah Data';
      formModal.action = 'http://localhost/phpmvc/public/mahasiswa/ubah';

      const id = this.dataset.id;
      const xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          const data = JSON.parse(xhr.responseText);
          key.value = data.id;
          nama.value = data.nama;
          nrp.value = data.nrp;
          email.value = data.email;
          jurusan.value = data.jurusan;
        }
      };

      xhr.open('POST', 'http://localhost/phpmvc/public/mahasiswa/getUbah', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(`id=${id}`);
    });
  });
  tombolTambahMahasiswa.forEach(function (e) {
    e.addEventListener('click', function () {
      formModalLabel.innerHTML = 'Tambah data mahasiswa';
      tombolSubmitForm.innerHTML = 'Tambah';
    });
  });

  // selesai
});
