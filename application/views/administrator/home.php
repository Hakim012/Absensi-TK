<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css" />
    <link rel="icon" href="<?= base_url() ?>/assets/home/images/index.png">
    <title>Beranda &mdash; BUMDES SUNGAI NIBUNG</title>
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" >
        <div class="container" >
            <a class="navbar-brand" href="<?= base_url() ?>">BUMDES SUNGAI NIBUNG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/auth/tentang')?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/auth/faq')?>">FAQ</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <!--<a href="<?php echo base_url('auth/login')?>" style="background-color:#33cc00;" class="btn btn-outline-espeaking" >Masuk</a>-->
                    <a href="<?php echo base_url('auth/login')?>"  class="btn btn-outline-espeaking" >Masuk</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container-md main-content">
    
    <section>
	<!-- Hero -->
	<div class="d-flex flex-md-row flex-column mb-5">
		<div class="col-md-6 d-flex align-item-center justify-content-center flex-column order-2 order-md-1 p-0">
			<h2>Selamat Datang di BUMDES Sungai Nibung</h2>
			<p class="mt-2">Pelayanan Pengelolaan Simpanan di <em>BUMDES</em> Untuk Masyarakat Desa Sungai Nibung </p>
			<div class="mt-2">
				<a href="" style="background-color:#33cc00;" class="btn btn-espeaking">Mulai</a>
			</div>
		</div>
		<div class="col-md-6 order-1 order-md-2 p-0">
			<img src="<?= base_url() ?>/assets/home/images/Bumdes-Badan-Usaha-Milik-Desa.jpg" width="80%" alt="">
		</div>
	</div>
	<!-- Tentang Section -->
	<!-- FAQs Section -->
    </section>

<section class="card shadow">
    <div class="container">
    <div class="row card-body">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 item-tengah">
            <center><div class="img-circle">
                    <img src="<?php echo base_url('assets/home/') ?>images/ceklis.png" width="37" height="36" alt="Icon Modul Lab & Class Activity" class="img-responsive">
                </div>
                <h2>Kemudahan</h2></center>
                <p>
                    Menyediakan Kemudahan Untuk Mengakses Dengan Mudah.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 item-tengah">
            <center><div class="img-circle">
                    <img src="<?php echo base_url('assets/home/') ?>images/Jaminan.png" width="37" height="33" alt="Icon Modul Lab & Class Activity" class="img-responsive">
                </div>
                <h2>Jaminan</h2></center>
                <p>
                    Memberikan Jaminan Yang Terpercaya Agar Mudah Dalam Melakukan Proses Pengelolaan Simpanan.
                </p>
            </div>
        </div><center><div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 item-tengah">
            <div class="img-circle">
                    <img src="<?php echo base_url('assets/home/') ?>images/tanggung.png" width="37" height="37" alt="Icon Modul Lab & Class Activity" class="img-responsive">
                </div>
                <h2>Tanggung Jawab</h2>
                <p>
                    Menciptakan Komitmen dan Pelayanan Yang Baik Sebagai Bentuk Kepuasan Pelanggan.
                </p>
            </div></center>
    </div>
</section>

    

    </div>
    <!-- Footer -->
    <footer style="background-color:#33cc00;" class="py-3 bg-espeaking text-center text-white">
        <span>Copyright &copy; 2022 BUMDES SUNGAI NIBUNG Team</span>
    </footer>

    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>