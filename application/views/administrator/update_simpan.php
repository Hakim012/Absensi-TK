<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Edit Data Simpanan</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($simpanan as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/simpanan/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_simpanan" value="<?php echo $jrs->id_simpanan ?>">

<div class="form-group">
<label>Tanggal Simpanan</label>
<input type="date" name="tanggal" value="<?php echo $jrs->tanggal ?>" class="form-control" readonly>
<?php echo form_error('tanggal','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jam</label>
<input type="text" name="jam" value="<?php echo $jrs->jam ?>" class="form-control" readonly>
<?php echo form_error('jam','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NO Simpanan</label>
<input type="text" name="no_simpanan" value="<?php echo $jrs->no_simpanan ?>" class="form-control" require>
<?php echo form_error('no_simpanan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Nama Anggota</label>
<input type="hidden" name="nama" >
<select name="nama" class="form-control">
<option value="<?php echo $jrs->nama ?>"><?php echo $jrs->nama ?></option>
<?php
$no=1;
foreach ($anggota as $j) : ?>
<option value="<?php echo $j->nama ?>"><?php echo $j->nama ?></option>
<?php endforeach;?>
</select>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tipe Simpanan</label>
<input type="text" name="jenis" value="<?php echo $jrs->jenis ?>" class="form-control" readonly>
<?php echo form_error('jenis','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jumlah (Rp)</label>
<input type="text" name="jumlah" value="<?php echo $jrs->jumlah ?>" class="form-control" readonly>
<?php echo form_error('jumlah','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
<?php endforeach; ?>

</div>
</div>
