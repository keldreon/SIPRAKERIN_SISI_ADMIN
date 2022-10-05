<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Profil | Jurnalizm</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
	<style>

	label{
		color:black;
	}

	.footer {
  		position: absolute;
  		right: 0;
  		bottom: 0;
  		left: 0;
  		background-color:transparent;
  		text-align: center;
  		color:black;
		z-index: -1000;
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
				<li><a href="<?php echo base_url(); ?>index.php/Upload">Upload Jurnal</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/admin_login">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form action="<?php echo site_url('anggota/prosesEdit');?>" method="post">
			<legend>Edit Profil</legend>
			<div class="form-group">
				<label for="name">Nama</label>
				<input class="form-control" name="nama" placeholder="Masukkan nama lengkap" type="text" value="<?php echo $anggota->nama_user; ?>" readonly/>
			</div>			

			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" name="email" placeholder="Masukkan Email" type="text" value="<?php echo $anggota->email_user; ?>" readonly/>
			</div>

			<div class="form-group">
				<label for="name">Username</label>
				<input class="form-control" name="username" placeholder="Masukkan Username" type="text" value="<?php echo $anggota->uname_user; ?>" readonly/>
			</div>

			<div class="form-group">
				<label for="name">Password</label>
				<input class="form-control" name="password" placeholder="Masukkan Username" type="password" value="<?php echo $anggota->pwd_user; ?>" readonly/>
			</div>

			<input type="hidden" name="id_user" value="<?php echo $anggota->id_user; ?>">

			<div class="form-group">
				<label for="name">Verifikasi</label>
				<select name="pengakuan" id="cat" autofocus>
					<option value="Sah">Sah</option>
					<option value="Belum Sah">Belum Sah</option>
				</select>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Simpan</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>			
		</div>
	</div>
	</form>
</div>
<div class="row">
	<footer class="footer">
	<hr/>
        <p id="baru">&copy; 2017 Jurnalizm</p>
  </footer>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>