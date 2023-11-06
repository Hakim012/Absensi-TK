<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Edit Data Anggota</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($anggota as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/anggota/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_anggota" value="<?php echo $jrs->id_anggota ?>">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $jrs->nama ?>" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NIK</label>
<input type="text" name="nik" value="<?php echo $jrs->nik ?>" class="form-control" require>
<?php echo form_error('nik','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>
<input type="hidden" name="kelamin" >
<select name="kelamin" class="form-control">
<option value="<?php echo $jrs->kelamin ?>"><?php echo $jrs->kelamin ?></option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<?php echo form_error('kecamatan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Alamat</label>
<input type="text" name="alamat" value="<?php echo $jrs->alamat ?>" class="form-control" require>
<?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NO HP</label>
<input type="text" name="no_hp" value="<?php echo $jrs->no_hp ?>" class="form-control" require>
<?php echo form_error('no_hp','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>KTP</label>
<br><?php echo $jrs->ktp ?>
<input type="file" name="ktp" class="form-control" value="<?php echo $jrs->ktp ?>" class="form-control" require>
<?php echo form_error('ktp','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
<?php endforeach; ?>

</div>
</div>
