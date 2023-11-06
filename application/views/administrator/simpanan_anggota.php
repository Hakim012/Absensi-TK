
	
    <div class="container">   
         <center><h2>Simpanan Anggota</h2></center>
         <br>   
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Simpanan Anggota</h6>
                                </div>

                                <div class="card-body">
                                
                              <?php
                                    $no=1;
                                    foreach ($anggota as $a) : ?>
                                <br>
                                <center>
                                <?php echo anchor('administrator/anggota/export_excel/'.$a->id_anggota,'<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i> Cetak</button>')?>
                                <h3><b>Laporan Simpanan Anggota</b></h3>
                                </center>
                                <p>
                                <br>
                                <?php echo $this->session->flashdata('pesan1')?>
                                
                                <p> Nama : <?php echo $a->nama ?></p>
                                <p> NIK : <?php echo $a->nik ?></p>
                                <p> Jenis Kelamin : <?php echo $a->kelamin ?></p>
                                <p> No Hp : <?php echo $a->no_hp ?></p>
                                <p> Alamat : <?php echo $a->alamat ?></p>
                                
                                <br>



                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jumlah Simpanan</th>
                                    <th scope="col">Tanggal </th>
                                    <th scope="col">Jam </th>
                                    <th scope="col">Jenis Simpanan</th>
                                    </tr>
                                     <?php
                                    $no=1;
                                    foreach ($simpan as $jrs) : ?>
                                    <?php if($jrs->nama == $a->nama) { ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td>Rp. <?php echo $jrs->jumlah ?></td>
                                    <td><?php echo $jrs->tanggal ?></td>
                                    <td><?php echo $jrs->jam ?></td>
                                    <td><?php echo $jrs->jenis ?></td>
                                    </tr>                                  
                                    <?php } ?>
                                    <?php endforeach;?>

                                    <?php endforeach;?>
                                    </table>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        