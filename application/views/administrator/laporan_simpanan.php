<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.doc");

header("Pragma: no-cache");

header("Expires: 0");

?>
<center><hr><h3>DATA SIMPANAN NASABAH BUMDES SUNGAI NIBUNG</h3><hr></center>
<br>

<div class="container">   
         <br>   
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                </div>

                                <div class="card-body">
                            
                                <?php
                                    $no=1;
                                    foreach ($anggota as $a) { ?>
                                <p> Nama : <?php echo $a->nama ?></p>
                                <p> NIK : <?php echo $a->nik ?></p>
                                <p> Jenis Kelamin : <?php echo $a->kelamin ?></p>
                                <p> No Hp : <?php echo $a->no_hp ?></p>
                                <p> Alamat : <?php echo $a->alamat ?></p>
                                
                                <br>

                                    <div class="table-responsive">
                                    <table border="1" width="100%">
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jumlah Simpanan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Jenis Simpanan</th>
                                    <th scope="col">Status</th>
                                    </tr>
                                     <?php
                                    $no=1;
                                    foreach ($simpan as $jrs) { ?>
                                    <?php if($jrs->nama == $a->nama) { ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td>Rp. <?php echo $jrs->jumlah ?></td>
                                    <td><?php echo $jrs->tanggal ?></td>
                                    <td><?php echo $jrs->jam ?></td>
                                    <td><?php echo $jrs->jenis ?></td>
                                    <td>
                                    <?php if($jrs->status=='masuk'){ ?>
                                    <div class="btn btn-sm btn-success">Saldo Tersedia</div><hr>
                                    <?php } else{ ?>
                                    <div class="btn btn-sm btn-warning">Saldo Sudah Ditarik</div><hr>
                                    <?php } ?>
                                    </td>
                                    </tr>                                  
                                    <?php } ?>
                                    <?php }?>

                                    <?php }?>
                                    </table>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        