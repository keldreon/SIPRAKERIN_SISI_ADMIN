<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Result | Jurnalizm</title>
	<!--link the bootstrap css file-->
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
	table{
		border-collapse: separate;
		border:2px solid white;
		font-family: Josefin Sans;
		border-radius: 0px 10px 0px 10px;
	}

	tr.atu{
		background-color: purple;
		border:2px solid white;
	}

	tr.isi{
		background-color:violet;
		border:2px solid white;
	}

	td.isian{
		color:black;
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
		<div class="col-md-12">
			<h2>Search Result</h2>
			<div class="table-responsive">
			<table class="table table-striped">
			<thead>
			<tr class="atu">
			<td>No</td>
			<td>Judul Jurnal</td>
			<td>Pengarang</td>
			<td>Tahun</td>
			<td>Kata Kunci</td>
			<td>Tindakan</td>
			</tr>
			</thead>
			<tbody>
			<?php foreach($dataJurnal as $jurnal):?>
				<tr class="isi">
				<td class="isian"><?php echo $jurnal->id_jurnal; ?></td>
				<td class="isian"><?php echo $jurnal->judul_jurnal; ?></td>
				<td class="isian"><?php echo $jurnal->author; ?></td>
				<td class="isian"><?php echo $jurnal->tahun; ?></td>
				<td class="isian"><?php echo $jurnal->keyword; ?></td>
				<td class="isian"><a href="<?php echo site_url('anggota_home/getJurnal/' .$jurnal->id_jurnal);?>">Klik Disini</a></td>
				</tr>
				</tbody>
			<?php endforeach ?>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
	<footer class="footer">
	<div class="diver">
	<hr></hr>
        <p id="baru">&copy; 2017 Jurnalizm</p>
  	</footer>
	</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>