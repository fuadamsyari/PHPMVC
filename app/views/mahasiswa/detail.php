<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle "><?= $data['mhs']['nrp']; ?></h6>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link btn text-bg-warning "><i class="bi bi-backspace-fill" style="font-size: 1.2em;"></i> <i style="font-size: 1.2em;" class=" bi bi-card-checklist"></i></a>
        </div>
    </div>
</div>