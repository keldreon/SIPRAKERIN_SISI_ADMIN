<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | Jurnalizm</title>
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
		<div class="col-md-12">
			<h2>Welcome to Jurnalizm</h2>
			<div class="table-responsive">
			<table class="table table-striped">
			<thead>
			<tr>
			<td>No</td>
			<td>Judul Jurnal</td>
			<td>Pengarang</td>
			<td>Tahun</td>
			<td>Kata Kunci</td>
			<td>Status</td>
			<td>Tindakan</td>
			</tr>
			</thead>
			<tbody>
			<?php foreach($dataJurnal as $jurnal){?>
				<tr>
				<td><?php echo $jurnal->id_jurnal; ?></td>
				<td><?php echo $jurnal->judul_jurnal; ?></td>
				<td><?php echo $jurnal->author; ?></td>
				<td><?php echo $jurnal->tahun; ?></td>
				<td><?php echo $jurnal->keyword; ?></td>
				<td><?php echo $jurnal->status; ?></td>
				<td><a href="<?php echo site_url('Home/klikJurnal/' .$jurnal->id_jurnal);?>">Edit</a>&nbsp|&nbsp <a href="<?php echo site_url('Home/deleteJurnal/' .$jurnal->id_jurnal);?>">Delete</a></td>
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