
	
    <div class="container">   
         <center><h2>Riwayat Simpanan Anggota</h2></center>
         <br>   
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Riwayat Simpanan Anggota</h6>
                                </div>

                                <div class="card-body">
                                
                              <?php
                                    $no=1;
                                    foreach ($anggota as $a) : ?>
                                
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
                                    <th scope="col">Status</th>
                                    </tr>
                                     <?php
                                    $no=1;
                                    foreach ($riwayat as $jrs) : ?>
                                    <?php if($jrs->nama == $a->nama) { ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td>Rp. <?php echo $jrs->jumlah ?></td>
                                    <td><?php echo $jrs->tgl ?></td>
                                    <td><?php echo $jrs->jam ?></td>
                                    <td><?php echo $jrs->tipe ?></td>
                                    <td>
                                    <?php if($jrs->status=='masuk'){ ?>
                                    <div class="btn btn-sm btn-success">Saldo Tersedia</div>
                                    <?php } else{ ?>
                                    <div class="btn btn-sm btn-warning">Saldo Sudah Ditarik</div>
                                    <?php } ?>    
                                    </td>
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