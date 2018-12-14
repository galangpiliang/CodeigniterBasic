<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></p>
                    <p class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nrp']; ?></p>
                    <p class="card-subtitle mb-2 text-muted"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url('mahasiswa')?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>