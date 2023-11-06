
	
    <div class="container">   
         <center><h2>Daftar Anggota</h2></center>
         <br>
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Daftar Anggota</h6>
                                </div>

                                <div class="card-body">
                                
                               <form class="navbar-search" action="<?php echo base_url('administrator/anggota/hasil')?>" action="GET">
                                <div class="input-group">
                                <input type="text" name="cari" class="form-control bg-light border-0 small" value="Search..." aria-label="Search" require_once>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit" value="Cari">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                                </div>
                                </form>                                
                                <br>
                                <?php if($level=='Admin'){ ?>
                                <center>
                                <?php echo anchor('administrator/anggota/input','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-plus"></i> Tambah Anggota</button>')?>
                                </center>
                                <?php } ?>

                                <?php echo $this->session->flashdata('pesan1')?>
                                <br>

                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">KTP</th>
                                    <?php if($level=='Admin'){ ?>
                                    <th scope="col">Kelola</th>
                                    <?php } ?>

                                    </tr>
                                     <?php
                                    $no=1;
                                    foreach ($anggota as $jrs) : ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td><?php echo $jrs->nik ?></td>
                                    <td><?php echo $jrs->kelamin ?></td>
                                    <td><?php echo $jrs->no_hp ?></td>
                                    <td><?php echo $jrs->alamat ?></td>
                                    <td>
                                    <?php if($jrs->status==NULL) { ?>
                                    <div class="btn btn-sm btn-primary">Saldo Anda Rp. 50.000</div>
                                    <?php } else if($jrs->status=='tarik'){ ?>
                                    <div class="btn btn-sm btn-warning">Saldo Sudah Ditarik</div>
                                    <?php } ?>
                                    </td>
                                    <td><img class="img-profile "  src="<?php echo base_url() ?>upload/ktp/<?php echo $jrs->ktp; ?>" width="100px" height="100px" ></td>
                                    <?php if($level=='Admin'){ ?>
                                    <td width="20px">
                                    <?php if($jrs->status==NULL) {?>
                                    <?php echo anchor('administrator/anggota/simpanan/'.$jrs->id_anggota,'<div class="btn btn-sm btn-primary">Simpanan<i class="fa edit"></i></div>') ?><hr>              
                                    <?php echo anchor('administrator/anggota/tarik_simpanan/'.$jrs->id_anggota,'<div class="btn btn-sm btn-success">Tarik Simpanan<i class="fa edit"></i></div>') ?><hr>
                                    <?php } ?>
                                    <?php echo anchor('administrator/anggota/riwayat/'.$jrs->id_anggota,'<div class="btn btn-sm btn-dark">Riwayat<i class="fa edit"></i></div>') ?><hr>                         
                                    <?php echo anchor('administrator/anggota/update/'.$jrs->id_anggota,'<div class="btn btn-sm btn-warning">Edit<i class="fa edit"></i></div>') ?><hr>
                                    <!-- <?php echo anchor('administrator/anggota/delete/'.$jrs->id_anggota,'<div class="btn btn-sm btn-danger">Delete</div><i class="fa fa trash"></i>') ?> -->
                                    </td>
                                    <?php } ?>
                                    </tr> 
                                    <?php endforeach;?>
                                    </table>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        