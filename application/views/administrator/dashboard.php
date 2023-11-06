<?php if($level == "Admin"){ ?>

<div class="container-fluid">
    <!-- <div class="alert alert-info" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard <?php echo $level; ?>
    </div>
    <div  class="alert alert-info" role="alert">
        <center><h4 class="alert-heading">Selamat Datang!</h4></center>
        <center><p>Selamat Datang <strong><?php echo $username;?></strong> di Website BUMDES Sungai Nibung, Anda login sebagai <strong> <?php echo $level; ?></strong></p></center>
        <hr>
        <center> <img class="img-profile " src="<?php echo base_url() ?>assets/home/images/Bumdes-Badan-Usaha-Milik-Desa.png" width="60%" ></center>
        <p>
    
        
    </div> -->

    <!-- Modal -->

    <!-- <div class="row">
                        <?php         
                                        foreach($user as $rows){ 
                                        ?>      
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rows->total; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

    <?php         
                                        foreach($simpan as $rows){ 
                                        ?>                      
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Simpanan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo $rows->total; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

    <?php         
                                        foreach($anggota as $rows){ 
                                        ?> 
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Anggota
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $rows->total; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if($level=="Admin") { ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Laporan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            <?php echo anchor('administrator/simpanan/laporan','<div class="btn btn-sm btn-warning">Lihat Laporan<i class="fa edit"></i></div>') ?>                                        
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    
    </div>
</div> -->

    <div class="my-4 d-sm-flex align-items-center justify-content-between">
        <h1>Dashboard</h1>
        <div class="btn btn-primary" id="sync-data-dashboard"><span class="fas fa-sync-alt mr-1"></span>Refresh Data</div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h4><span class="fas fa-user-tie mr-2"></span>Jumlah Siswa</h4>
                    <h6 class="mt-3">10<div class="d-inline ml-1">Siswa</div>
                    </h6>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?= base_url('datapegawai'); ?>">Lihat Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <h4><span class="fas fa-user-clock mr-2"></span>Terlambat</h4>
                    <h6 class="mt-3">10<div class="d-inline ml-1">Siswa
                        </div>
                    </h6>
                </div>
                <div class="card-footer small">
                    <div class="text-white">Data Hari Ini</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h4><span class="fas fa-user-check mr-2"></span>Hadir</h4>
                    <h6 class="mt-3">10<div class="d-inline ml-1">Siswa</div>
                    </h6>
                </div>
                <div class="card-footer small">
                    <div class="text-white">Data Hari Ini</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    <h4><span class="fas fa-clock mr-2"></span>Hari Ini</h4>
                    <div id="date-and-clock mt-3">
                        <h5 id="clocknow"></h5>
                        <h5 id="datenow"></h5>
                    </div>
                    </h6>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?= base_url(''); ?>">Lihat Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header"><span class="fas fa-user-clock mr-1"></span>Daftar Siswa Terlambat [Hari Ini]
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered dashboard" id="list-absensi-terlambat" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jam Masuk</th>
                                    <th>Nama Siswa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Jam Masuk</th>
                                    <th>Nama Siswa</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header"><span class="fas fa-user-check mr-1"></span>Daftar Siswa Hadir [Hari Ini]
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered dashboard" id="list-absensi-masuk" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Datang</th>
                                    <th>Nama Siswa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Datang</th>
                                    <th>Nama Siswa</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php if($level == "Pegawai"){ ?>

<div class="container">
    <div class="justify-content-center">
        <h1 class="my-4"><span class="fas fa-address-card mr-2"></span>Profil Saya</h1>
        <div class="card mb-4">
            <div class="card-header text-center">
                <div class="float-right">
                    <button id="qrcode-pegawai" class="btn btn-primary" data-toggle="modal" data-target="#qrcodemodal"><span class="fas fa-qrcode mr-1"></span>QR CODE</button>
                </div>
            </div>
            <div class="card-body">
                <div class="row detail">
                    <div class="col-md-2 col-sm-4 col-6 p-2">
                        <img class="img-thumbnail" src="<?php echo base_url() ?>assets/img/user.png" class="card-img" style="width:100%;">
                    </div>
                    <div class="col-md-10 col-sm-8 col-6">
                        <dl class="row">
                            <dt class="col-sm-5">Nama Lengkap:</dt>
                            <dd class="col-sm-7" id="nama_pegawai">HAKIM</dd>
                            <dt class="col-sm-5">Umur:</dt>
                            <dd class="col-sm-7">24<div class="ml-1 d-inline">Tahun</div>
                            </dd>
                            <dt class="col-sm-5">Instansi:</dt>
                            <dd class="col-sm-7 text-truncate">PERTAMINA HULU ROKAN</dd>
                            <dt class="col-sm-5">Jabatan:</dt>
                            <dd class="col-sm-7">DIREKTUR UTAMA</dd>
                            <dt class="col-sm-5">NPWP:</dt>
                            <dd class="col-sm-7">243324234</dd>
                            <dt class="col-sm-5">Tempat / Tanggal Lahir:</dt>
                            <dd class="col-sm-7">02-03-1999</dd>
                            <dt class="col-sm-5">Jenis Kelamin:</dt>
                            <dd class="col-sm-7">LAKI-LAKI</dd>
                            <dt class="col-sm-5">Shift Bekerja:</dt>
                            <dd class="col-sm-7">SENIN-JUMAT</dd>
                            <dt class="col-sm-5">Verifikasi Akun:</dt>
                            <dd class="col-sm-7"><span class="badge badge-success">Terverifikasi</span> <span class="badge badge-danger">Belum Terverifikasi</span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Id Pegawai: I78234234234</div>
                    <div class="text-muted">Akun Dibuat: 10-11-2023</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal QR Code -->
<div class="modal fade" id="qrcodemodal" tabindex="-1" role="dialog" aria-labelledby="qrcodemodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="qrcodemodallabel"><span class="fas fa-qrcode mr-1"></span>QR Code Pegawai</h5>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img class="img my-2" src="<?= $img_source = ($user['qr_code_image'] == 'no-qrcode.png' ? base_url('assets/img/no-qrcode.png') : base_url('storage/qrcode_pegawai/' . $user['qr_code_image'])); ?>" style="width:50%;">
                </div>
                <dl class="row">
                    <dt class="col-sm-5">Nama Lengkap:</dt>
                    <dd class="col-sm-7">HAKIM KURNIAWAN</dd>
                    <dt class="col-sm-5">NPWP:</dt>
                    <dd class="col-sm-7">3242342342</dd>
                    <dt class="col-sm-5">Kode Pegawai:</dt>
                    <dd class="col-sm-7">33234243234</dd>
                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php } ?>
