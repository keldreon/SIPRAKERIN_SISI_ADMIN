<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulir Pengajuan <?php echo $laboratorium->nama_lab;?> | Sistem Informasi Prakerin SMK</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />	
</head>

<body>

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>		  
          <a class="navbar-brand" href="#">Sistem Informasi Prakerin SMK</a>
        </div>
        <div  class="navbar-collapse collapse" id="navbar1">
          <ul class="nav navbar-nav navbar-right">            
            <li class="active"><a href="#">Pengajuan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Pengajuan/status">Cek Status</a></li>			            
			</ul>			
        </div>
      </div>
    </nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open_multipart("Pengajuan/index", $attributes);?>
			<h2 class="sub-header">Formulir Pengajuan <?php echo $laboratorium->nama_lab;?></h2>
			<br/>
			<?php echo $this->session->flashdata('msg'); ?>
			<legend>Data Sekolah</legend>			
			<div class="form-group">
				<label for="nSekolah">Nama Sekolah</label>
				<input class="form-control" name="nSekolah" placeholder="Nama Sekolah" type="text" value="<?php echo set_value('nSekolah'); ?>" />
				<span class="text-danger"><?php echo form_error('nSekolah'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="aSekolah">Alamat Sekolah</label>
				<input class="form-control" name="aSekolah" placeholder="Alamat Sekolah" type="text" value="<?php echo set_value('aSekolah'); ?>" />
				<span class="text-danger"><?php echo form_error('aSekolah'); ?></span>
			</div>			

			<div class="form-group">
				<label for="contSekolah">No. Telp/HP</label>
				<input class="form-control" name="contSekolah" placeholder="No. Telp/HP" type="text" value="<?php echo set_value('contSekolah'); ?>" />
				<span class="text-danger"><?php echo form_error('contSekolah'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="subject">Surat Keterangan</label>
				<input type="file" name="userfile" size="20"/><br/>
			</div>			
					
			<br/>
			<legend>Data Pembimbing Sekolah</legend>			
			<div class="form-group">
				<label for="nPembimbing">Nama Pembimbing</label>
				<input class="form-control" name="nPembimbing" placeholder="Nama Pembimbing" type="text" value="<?php echo set_value('nPembimbing'); ?>" />
				<span class="text-danger"><?php echo form_error('nPembimbing'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="pJabatan">Jabatan</label>
				<input class="form-control" name="pJabatan" placeholder="Jabatan" type="text" value="<?php echo set_value('pJabatan'); ?>" />
				<span class="text-danger"><?php echo form_error('pJabatan'); ?></span>
			</div>

			<div class="form-group">
				<label for="pKontak">No. Telp/HP Pembimbing</label>
				<input class="form-control" name="pKontak" placeholder="No. Telp/HP Pembimbing" type="text" value="<?php echo set_value('pKontak'); ?>" />
				<span class="text-danger"><?php echo form_error('pKontak'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="pEmail">Email Pembimbing</label>
				<input class="form-control" name="pEmail" placeholder="Email Pembimbing" type="text" value="<?php echo set_value('pEmail'); ?>" />
				<span class="text-danger"><?php echo form_error('pEmail'); ?></span>
			</div>
			
			<legend>Siswa</legend>			
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>                  
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jurusan</th>				  
                </tr>
              </thead>
              <tbody>
                <tr>                  
                  <td><input class="form-control" name="nis1" placeholder="NIS" type="text" value="<?php echo set_value('nis1'); ?>" />
				<span class="text-danger"><?php echo form_error('nis1'); ?></span></td>
                  <td><input class="form-control" name="nSiswa1" placeholder="Nama" type="text" value="<?php echo set_value('nSiswa1'); ?>" />
				<span class="text-danger"><?php echo form_error('nSiswa1'); ?></span></td>
                  <td><input class="form-control" name="nJurusan1" placeholder="Jurusan" type="text" value="<?php echo set_value('nJurusan1'); ?>" />
				<span class="text-danger"><?php echo form_error('nJurusan1'); ?></span></td>				
                </tr>
                <tr>                  
                  <td><input class="form-control" name="nis2" placeholder="NIS" type="text" value="<?php echo set_value('nis2'); ?>" />
				<span class="text-danger"><?php echo form_error('nis2'); ?></span></td>
                  <td><input class="form-control" name="nSiswa2" placeholder="Nama" type="text" value="<?php echo set_value('nSiswa2'); ?>" />
				<span class="text-danger"><?php echo form_error('nSiswa2'); ?></span></td>
                  <td><input class="form-control" name="nJurusan2" placeholder="Jurusan" type="text" value="<?php echo set_value('nJurusan2'); ?>" />
				<span class="text-danger"><?php echo form_error('nJurusan2'); ?></span></td>
                </tr>
				<tr>                  
                  <td><input class="form-control" name="nis3" placeholder="NIS" type="text" value="<?php echo set_value('nis3'); ?>" />
				<span class="text-danger"><?php echo form_error('nis3'); ?></span></td>
                  <td><input class="form-control" name="nSiswa3" placeholder="Nama" type="text" value="<?php echo set_value('nSiswa3'); ?>" />
				<span class="text-danger"><?php echo form_error('nSiswa3'); ?></span></td>
                  <td><input class="form-control" name="nJurusan3" placeholder="Jurusan" type="text" value="<?php echo set_value('nJurusan3'); ?>" />
				<span class="text-danger"><?php echo form_error('nJurusan3'); ?></span></td>
                </tr>
              </tbody>
            </table>
          </div>		
			<input name="id_lab" type="hidden" value="<?php echo $laboratorium->id_lab; ?>" />
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Ajukan</button>				
			</div>
			
			<?php echo form_close(); ?>			
		</div>
	</div>	
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>