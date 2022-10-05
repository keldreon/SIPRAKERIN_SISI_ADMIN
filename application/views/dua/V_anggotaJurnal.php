<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $jurnal->judul_jurnal;?> | Jurnalizm</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<style>
	body {
		background-color: #4B4646;
		color: #fff;
		/*#4F5155;*/
	}

	label{
		color:black;
	}
	
	.footer {
  		position: absolute;
		float:left;
  		right: 0;
  		bottom: 0;
  		left: 0;
  		background-color:transparent;
  		text-align: center;
  		color:white;
		z-index: -1000;
	}
	
	.diver{
		background-color:black;
		width:100%;
		height:100%;
	}

	#baru{
		margin-bottom:0%;
		padding-bottom: 0%;
	}
</style>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/anggota_home">Jurnalizm</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello <?php echo $this->session->userdata('uname'); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Edit</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url(); ?>index.php/anggota_home/logout">Log Out</a></li>
              </ul>
            </li>
				<li><a href="<?php echo base_url(); ?>index.php/anggota_cari">Cari Jurnal</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/anggota_login">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 well">
			<legend>Download Jurnal</legend>
			<div class="form-group">
				<label for="name">Judul Jurnal</label>
				<input class="form-control" name="judul_jurnal"  type="text" value="<?php echo $jurnal->judul_jurnal;?>" readonly/>
			</div>

			<div class="form-group">
				<label for="name">Abstraksi</label>
				<textarea class="form-control" name="abstraksi" id="abstraksi" placeholder="Isi abstraksi disini" rows="6" cols="60" readonly><?php echo $jurnal->abstraksi;?></textarea>
			</div>

			<div class="form-group">
				<label for="name">Pengarang</label>
				<input class="form-control" name="author" placeholder="Isi Pengarang disini" type="textarea" value="<?php echo $jurnal->author; ?>" readonly/>
			</div>

			<div class="form-group">
				<label for="name">Tahun</label>
				<input class="form-control" name="tahun" type="text" value="<?php echo $jurnal->tahun; ?>" readonly/>
			</div>

			<div class="form-group">
				<label for="name">Kata Kunci</label>
				<input class="form-control" name="keyword" placeholder="Masukkan kata kunci" type="text" value="<?php echo $jurnal->keyword; ?>" readonly/>
			</div>
			
			<div class="form-group">
				<label for="name">Nama File</label>
				<input class="form-control" name="nama_file" placeholder="Masukkan kata kunci" type="text" value="<?php echo $jurnal->alamat_file; ?>" readonly/>
			</div>

			<input name="id_jurnal" type="hidden" value="<?php echo $jurnal->id_jurnal; ?>" />

			<div class="form-group">
				<a href="<?php echo base_url(); ?>/index.php/anggota_home/download/<?php echo $jurnal->alamat_file;?>" target="_blank">Download Here</a>
			</div>
		</form>
	</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
