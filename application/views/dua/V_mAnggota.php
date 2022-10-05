<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kelola Anggota | Jurnalizm - Admin Side</title>
	<!--link the bootstrap css file-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
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
				<li class="active"><a href="#">Kelola Anggota</a></li>
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
		<div class="col-md-12">
		<h2>Daftar Anggota</h2>
			<div class="table-responsive">
			<table class="table table-striped">
			<thead>
			<tr>
			<td>No</td>
			<td>Nama Anggota</td>
			<td>Email</td>
			<td>Username</td>
			<td>Pengakuan</td>
			<td>Kelola</td>
			</tr>
			</thead>
			<tbody>
			<?php foreach($dataAnggota as $anggota){?>
				<tr>
				<td><?php echo $anggota->id_user; ?></td>
				<td><?php echo $anggota->nama_user; ?></td>
				<td><?php echo $anggota->email_user; ?></td>
				<td><?php echo $anggota->uname_user; ?></td>
				<td><?php echo $anggota->pengakuan;?></td>
				<td>
				<a href="<?php echo site_url('anggota/editPetugas/' .$anggota->id_user);?>">Edit</a>&nbsp||&nbsp<a href="<?php echo site_url('anggota/deletePetugas/' .$anggota->id_user);?>">Delete</a></td>
				</tr>
				</tbody>
			<?php }?>
			</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>