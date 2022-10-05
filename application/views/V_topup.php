<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cek Status | Sistem Informasi Prakerin SMK</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">	
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
          <a class="navbar-brand" href="<?php echo site_url('Home/index/');?>">Sistem Informasi Prakerin SMK</a>
        </div>
        <div  class="navbar-collapse collapse" id="navbar1">
          <ul class="nav navbar-nav navbar-right">                        
            <li class="active"><a href="#">Cek Status</a></li>			            
			</ul>			
        </div>
      </div>
    </nav>
<br/>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
		<?php $attributes = array("koda" => "loginform");
			echo form_open("CekStatus/index", $attributes);?>
			<legend><center>Cek Status Pengajuan</center></legend>
			<div class="form-group">								
				<input class="form-control" name="kode" placeholder="Masukkan Kode Pembimbing" type="text" value="<?php echo set_value('kode'); ?>" />
				<span class="text-danger"><?php echo form_error('kode'); ?></span>
			</div>			
			<div class="form-group" align="center">
				<button name="submit" type="submit" class="btn btn-info">Masuk</button>
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
