
	
    <div class="container">   
         <center><h2>Riwayat Simpanan</h2></center>
         <br>
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Riwayat Simpanan</h6>
                                </div>

                                <div class="card-body">
                                
                               <form class="navbar-search" action="<?php echo base_url('administrator/simpanan/hasil')?>" action="GET">
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
                                <?php echo anchor('administrator/simpanan/input','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-plus"></i> Tambah Simpanan</button>')?>
                                </center>
                                <?php } ?>
                                <?php echo $this->session->flashdata('pesan')?>
                                <br>



                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <tr>
                                    <!-- <th scope="col">NO</th> -->
                                    <th scope="col">NO Simpanan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jumlah Simpanan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Jenis Simpanan</th>
                                    <?php if($level=='Pegawai'){ ?>
                                    <th scope="col">Status</th>
                                    <?php } ?>
                                    <?php if($level=='Admin'){ ?>
                                    <th scope="col">Kelola</th>
                                    <?php } ?>
                                    </tr>
                                     <?php
                                    $no=1;
                                    foreach ($simpan as $jrs) : ?>
                                    <tr>
                                    <!-- <td width="20px"><?php echo $no++ ?></td> -->
                                    <td><?php echo $jrs->no_simpanan ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td>Rp. <?php echo $jrs->jumlah ?></td>
                                    <td><?php echo $jrs->tanggal ?></td>
                                    <td><?php echo $jrs->jam ?></td>
                                    <td><?php echo $jrs->jenis ?></td>
                                    <?php if($level=='Pegawai'){ ?>
                                    <td> 
                                    <?php if($jrs->status=='tarik'){ ?>
                                    <div class="btn btn-sm btn-warning">Saldo Sudah Ditarik</div>
                                    <?php } elseif($jrs->status=='masuk'){ ?>
                                    <div class="btn btn-sm btn-success">Saldo Tersedia</div>
                                    <?php } ?>
                                    </td>
                                    <?php } ?>
                                    <?php if($level=='Admin'){ ?>
                                    <td width="20px">
                                    <?php if($jrs->status=='tarik'){ ?>
                                    <div class="btn btn-sm btn-success">Saldo Sudah Ditarik</div><hr>
                                    <!-- <?php echo anchor('administrator/simpanan/delete/'.$jrs->id_simpanan,'<div class="btn btn-sm btn-danger">Delete</div><i class="fa fa trash"></i>') ?> -->
                                    <?php } else{ ?>
                                    <?php echo anchor('administrator/simpanan/update/'.$jrs->id_simpanan,'<div class="btn btn-sm btn-warning">Edit<i class="fa edit"></i></div>') ?><hr>
                                    <!-- <?php echo anchor('administrator/simpanan/delete/'.$jrs->id_simpanan,'<div class="btn btn-sm btn-danger">Delete</div><i class="fa fa trash"></i>') ?>                                    -->
                                    <?php } ?>
                                    </td>

                                    <?php } ?> 
                                    </tr> 
                                    <?php endforeach;?>
                                    </table>
                                    <?php         
                                        foreach($jumlah as $rows){ 
                                        ?>
                                        <p> Total Simpanan : Rp. <?php echo $rows->total; ?></p>
                                        <?php } ?>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        