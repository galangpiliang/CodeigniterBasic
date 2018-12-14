<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if(validation_errors()): ?>
                        <div class="alert alert-warning" role="alert">
                            <?= validation_errors()?>
                        </div>
                    <?php endif;?> -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $mahasiswa['nrp']?>">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <!-- <input type="email" class="form-control" id="email" name="email"> -->
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="custom-select" id="jurusan" name="jurusan">
                            <?php foreach($jurusan as $row): ?>
                                    <option value="<?= $row; ?>" <?php if($row == $mahasiswa['jurusan']):?>selected<?php endif; ?>>
                                        <?= $row; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>                    
                </div>
            </div>
            

        </div>
    </div>

</div>