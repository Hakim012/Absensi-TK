<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Form Input Simpanan</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
                                <?php echo $this->session->flashdata('pesan1')?>

<!-- method post untuk mengambil fungsi input_aksi di controller-->
<form method="post" action="<?php echo base_url('administrator/simpanan/input_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_simpanan" >
<input type="hidden" name="status" value="masuk" >

<div class="form-group">
<label>Tanggal Simpanan</label>
<input type="date" name="tanggal" class="form-control" require>
<?php echo form_error('tanggal','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jam</label>
<input type="text" name="jam" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('h:i:s');  ?>" class="form-control" readonly>
<?php echo form_error('jam','<div class="text-danger small" ml-3>')?>
</div>
                                 
<?php         
        foreach($jumlah as $rows){
        $nowId=1; 
        $nowId=$rows->latestId+1;
?>
<input type="hidden" name="no_simpanan" placeholder="" value="<?php echo $nowId; ?>" class="form-control" require>
<?php } ?>


<div class="form-group">
<label>Nama Anggota</label>
<input type="hidden" name="nama" >
<select name="nama" class="form-control">
<option value="">- Pilih Anggota -</option>
<?php
$no=1;
foreach ($anggota as $jrs) : ?>
<option value="<?php echo $jrs->nama ?>"><?php echo $jrs->nama ?></option>
<?php endforeach;?>

</select>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tipe Simpanan</label>
<input type="text" name="jenis" value="Pokok" class="form-control" readonly>
<?php echo form_error('jenis','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jumlah (Rp)</label>
<input type="text" name="jumlah" value="50000" class="form-control" readonly>
<?php echo form_error('jumlah','<div class="text-danger small" ml-3>')?>
</div>


<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
</div>
</div>
