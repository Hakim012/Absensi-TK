<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Form Penarikan Simpanan</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php
                                    $no=1;
                                    foreach ($anggota as $a) : ?>
<?php foreach($simpan as $jrs) : ?>
    <?php if($jrs->nama == $a->nama) { ?>

<form method="post" action="<?php echo base_url('administrator/anggota/tarik')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_simpanan" value="<?php echo $jrs->id_simpanan ?>">
<input type="hidden" name="id_anggota" value="<?php echo $a->id_anggota ?>">

<div class="form-group">
<label>NO Simpanan</label>
<input type="text" name="no_simpanan" value="<?php echo $jrs->no_simpanan ?>" class="form-control" readonly>
<?php echo form_error('no_simpanan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Nama Anggota</label>
<input type="text" name="nama" value="<?php echo $a->nama ?>" class="form-control" readonly>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tipe Simpanan</label>
<input type="text" name="jenis" value="<?php echo $jrs->jenis ?>" class="form-control" readonly>
<?php echo form_error('jenis','<div class="text-danger small" ml-3>')?>
</div>

<div class="row gx-3">
                                                <div class="col-md-6">
                                                    <!-- Form Group (first name)-->
                                                    <div class="mb-3">
                                                    <label>Tanggal</label>
                                                        <input class="form-control" name="tanggal" value="<?php echo date('Y-m-d');  ?>" type="text" readonly />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Form Group (last name)-->
                                                    <div class="mb-3">
                                                    <label>Jam</label>
                                                        <input class="form-control" name="jam" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('h:i:s');  ?>" type="text" readonly />
                                                    </div>
                                                </div>
                                            </div>


<div class="form-group">
<label>Jumlah (Rp)</label>
<input type="text" name="jumlah" value="<?php echo $jrs->jumlah ?>" class="form-control" readonly>
<?php echo form_error('jumlah','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-success">Tarik Simpanan</button>
</form>
<?php } ?>
                                    <?php endforeach;?>
<?php endforeach; ?>

</div>
</div>
