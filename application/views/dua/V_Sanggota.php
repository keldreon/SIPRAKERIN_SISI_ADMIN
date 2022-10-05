<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulir Pengajuan| Sistem Informasi Prakerin SMK</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
	<style>	
	
	.footer {
  		position: absolute;
  		right: 0;
  		bottom: 0;
  		left: 0;  		
  		text-align: center;  		
		z-index: -1000;
	}
	
	.diver{		
		width:100%;
		height:8%;
	}
	
	#baru{
		margin-bottom:0%;
		padding-bottom: 0%;
	}
	</style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Navbar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Sistem Informasi Prakerin SMK</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url(); ?>/index.php/anggota_login">Cek Status</a></li>
				<li class="active"><a href="#">Pengajuan Lamaran</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup/index", $attributes);?>
			<h2 class="sub-header">Formulir Pengajuan</h2>
			<br/>
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
			
			<div class="form-group">
				<label for="subject">Surat Keterangan</label>
				<input type="file" name="userfile" size="20"/><br/>
			</div>
			
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Ajukan</button>				
			</div>
			
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>	
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>