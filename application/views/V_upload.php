<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload Jurnal | Jurnalizm - Admin Side</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/normalize.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/ns-style-default.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/ns-style-growl.css"); ?>">
	
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Home">Jurnalizm</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello <?php echo $this->session->userdata('uname'); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Edit</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
              </ul>
            </li>
				<li><a href="<?php echo base_url(); ?>index.php/anggota">Kelola Anggota</a></li>
				<li class="active"><a href="<?php echo base_url(); ?>index.php/Upload">Upload Jurnal</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/admin_login">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 well">
		<?php $attributes = array("jurnal" => "topupform");
			echo form_open_multipart('Topup/do_topup',$attributes);?>
			<legend>Upload</legend>
			<div class="form-group">
				<label for="name">Judul Jurnal</label>
				<input class="form-control" name="judul_jurnal"  type="text" value="<?php echo set_value('judul_jurnal'); ?>" />
				<span class="text-danger"><?php echo form_error('judul_jurnal'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Abstraksi</label>
				<textarea class="form-control" name="abstraksi" id="abstraksi" placeholder="Isi abstraksi disini" rows="6" cols="60"
				value="<?php form_textarea(array('abstraksi'=>'abstraksi'),set_value('abstraksi'));?>"></textarea>
				<span class="text-danger"><?php echo form_error('abstraksi'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Pengarang</label>
				<input class="form-control" name="author" placeholder="Isi Pengarang disini" type="textarea" value="<?php echo set_value('author'); ?>" />
				<span class="text-danger"><?php echo form_error('author'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Tahun</label>
				<input class="form-control" name="tahun" type="text" value="<?php echo set_value('tahun'); ?>" />
				<span class="text-danger"><?php echo form_error('tahun'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Kata Kunci</label>
				<input class="form-control" name="key" placeholder="Masukkan kata kunci" type="text" value="<?php echo set_value('key'); ?>" />
				<span class="text-danger"><?php echo form_error('key'); ?></span>
			</div>
			<div class="form-group">
				<input type="file" name="userfile" size="20"/><br/>
				<button name="submit" type="submit" class="btn btn-info">
						<span class="content">Upload</span>
						<span class="progress"></span>
					</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
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
