<div class="container">   
         <center><h2>Data User</h2></center>
         <br>
                            <!-- Illustrations -->
            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Data User</h6>
                            </div>
                            <div class="card-body">
<?php echo $this->session->flashdata('pesan') ?>
<!-- untuk memanggil fungsi input data -->
<!-- <?php echo anchor('administrator/user/input','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-plus"></i> Tambah User</button>')?> -->
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

<tr>
<th>NO</th>
<th>Username</th>
<th>Email</th>
<th>Level</th>

<th colspan="2">AKSI</th>
</tr>
<?php
$no = 1;
foreach ($user as $jrs) : ?>
<tr>
<td width="20px"><?php echo $no++ ?></td>
<td><?php echo $jrs->username ?></td>
<td><?php echo $jrs->email ?></td>
<td><?php echo $jrs->level ?></td>

<td width="20px"><?php echo anchor('administrator/user/update/'.$jrs->id,'<div class="btn btn-sm btn-success">Update<i ="fa faedit"></i></div>') ?></td>
<td width="20px"><?php echo anchor('administrator/user/delete/'.$jrs->id,'<div class="btn btn-sm btn-danger">Delete<i class="fa fatrash"></i></div>') ?></td>
</tr>
<?php endforeach;?>
</table>
</div>
</div>
</div>