<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Jurnalizm</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
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
		height:6%;
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
			<a class="navbar-brand" href="#">Jurnalizm</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
			</ul>
		</div>
	</div>
</nav>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
		<?php $attributes = array("name" => "loginform");
			echo form_open("anggota_login/index", $attributes);?>
			<legend>Login</legend>
			<div class="form-group">				
				<label for="name">Username</label>
				<input class="form-control" name="username" placeholder="Enter your Username" type="text" value="<?php echo set_value('username'); ?>" />
				<span class="text-danger"><?php echo form_error('username'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input class="form-control" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Login</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="<?php echo base_url(); ?>index.php/signup">Sign Up Here</a>
		</div>
	</div>
</div>

<div class="row">
<footer class="footer">
	<div class="diver">
	<hr>
        <p id="baru">&copy; 2017 Jurnalizm</p>
		</div>
  </footer>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
