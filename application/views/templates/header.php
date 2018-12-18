<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- My CSS --> 
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
        <title><?= $judul ?></title>
    </head>
    <body class="bg-light">

    <?php if($this->session->userdata('masuk') == TRUE): ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>">CI_Basic</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        <!--Akses Menu Untuk Admin-->
                        <?php if($this->session->userdata('akses')=='1'):?>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa'); ?>">Data Mahasiswa</a>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa/input_nilai'); ?>">Input Nilai</a>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa/krs'); ?>">KRS</a>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa/lhs'); ?>">LHS</a>
                        <!--Akses Menu Untuk Dosen-->
                        <?php elseif($this->session->userdata('akses')=='2'):?>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa'); ?>">Data Mahasiswa</a>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa/input_nilai'); ?>">Input Nilai</a>
                        <!--Akses Menu Untuk Mahasiswa-->
                        <?php else:?>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa/krs'); ?>">KRS</a>
                            <a class="nav-item nav-link" href="<?= base_url('mahasiswa/lhs'); ?>">LHS</a>
                        <?php endif;?>
                        <a class="nav-item nav-link" href="<?= base_url('login/logout'); ?>">Sign Out</a>
                        <a class="nav-item nav-link" href="#">Selamat Datang : <?= $this->session->userdata('ses_nama');?></a>
                    </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>