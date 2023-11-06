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
                        <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/auth/tentang')?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('administrator/auth/faq')?>">FAQ</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <a href="<?php echo base_url('auth/login')?>" class="btn btn-outline-espeaking" >Masuk</a>
                    <a href="<?php echo base_url('auth/registrasi')?>" style="background-color:#33cc00;" class="btn btn-espeaking" >Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container-md main-content">
    
    <section class="card shadow">
    <div class="row card-body">
    <section>
	<!-- Hero -->
	<div class="my-5 offset-md-3">
		<div class="">
			<center><h2>Tentang BUMDES SUNGAI NIBUNG</h2></center>
			<p class="mt-4">1. Mengapa BUMDES SUNGAI NIBUNG ?<br> Karena satu-satunya aplikasi pelatihan BUMDES SUNGAI NIBUNG yang di dukung mentor.</p>
			<p class="mt-4">2. Apakah BUMDES SUNGAI NIBUNG Mendukung Semua Platform ?<br> Bisa di akses semua platform karena berbasis website.</p>
			<p class="mt-4">3. Bagaimana Cara Kerja BUMDES SUNGAI NIBUNG ?<br> Kita di tuntut membaca materi lalu mengerjakan kui dan melakukan submission upload video presentasi.</p>
			<p class="mt-4">4. Apa Keuntungna Menggunakan BUMDES SUNGAI NIBUNG ?<br> Untuk melatih BUMDES SUNGAI NIBUNG menjadi baik dan benar.</p>
			<p class="mt-4">5. Siapa Saja Yang Bisa Memakai ?<br> Aplikasi ini di rancang untuk semua orang yang ingin belajar BUMDES SUNGAI NIBUNG.</p>
            
		</div>
	</div>
	<!-- Tentang Section -->
	<!-- FAQs Section -->
    </section>

    </div>
    </section>

    <section>
    <div class="mb-5">
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