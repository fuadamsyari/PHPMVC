<div class="container mt-2">
    <div class="row">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash() ?>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-6">
                <button id="tombolTambahMahasiswa" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formmodal">
                    <i class="bi bi-plus-square"></i> Tambah data mahasiswa
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Cari Mahasiswa ..." name="keyword" id="keyword">
                        <div class="input-group-append">
                            <button id="tomboCari" class="mx-2 btn btn-primary" type="submit"><i class="bi bi-search-heart-fill"></i> Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <h3>Daftar Mahasiswa</h3>
            <br>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $m) : ?>
                    <li class="list-group-item ">
                        <?= $m['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $m['id'] ?>" class=" tampilModalUbah btn text-bg-warning text-decoration-none float-end btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#formmodal" data-id="<?= $m['id'] ?>"><i style="font-size: 1.2em;" class="bi bi-pencil-square"></i></a>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $m['id'] ?>" class="btn text-bg-danger text-decoration-none float-end btn-sm mx-1" onclick="return confirm('Yakin?');"><i style="font-size: 1.2em;" class="bi bi-trash3-fill"></i></i></a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $m['id'] ?>" class="btn text-bg-success text-decoration-none float-end btn-sm mx-1"><i style="font-size: 1.2em;" class="bi bi-card-list"></i></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Menambah data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL;  ?>/mahasiswa/tambah" method="post">
                    <input class="form-control" type="hidden" id="key" name="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknik Jaringan Telekomunikasi">Teknik Jaringan Telekomunikasi</option>
                        </select>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>