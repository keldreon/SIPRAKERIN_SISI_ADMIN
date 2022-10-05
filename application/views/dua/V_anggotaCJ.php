<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cari Jurnal | Jurnalizm</title>
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

	.jumbotron {
 	 	text-align: center;
  		border-bottom: 1px solid #e5e5e5;
  		color:black;
	}
	
	.jumbotron .btn {
  		padding: 14px 24px;
  		font-size: 21px;
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
				<li class="active"><a href="<?php echo base_url(); ?>index.php/anggota">Cari Jurnal</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/anggota_login">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<br/>
<div class="container">
<div class="jumbotron">
        <h1>Search Jurnal</h1>
        <br/>
        <div class="form-group">
        	<form class="navbar" action="<?php echo site_url('anggota_cari/prosesCari'); ?>" method="post">
            	<input type="text" class="form-control" name="cari"placeholder="Search..."/ required><br/>
            	<input type="radio" name="kategori" value="judul_jurnal" autofocus>&nbspJudul Jurnal&nbsp&nbsp
            	<input type="radio" name="kategori" value="author">&nbspAuthor&nbsp&nbsp
            	<input type="radio" name="kategori" value="keyword">&nbspKata Kunci&nbsp&nbsp<br/><br/>
            	<input class="btn btn-sm btn-default" type="submit" value="Cari" name="search">
         	</form>
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
</body>
</html>
