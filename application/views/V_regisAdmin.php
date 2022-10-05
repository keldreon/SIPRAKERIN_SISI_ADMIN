<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Formulir Registrasi Admin | Sistem Informasi Praktek Kerja Industri</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/vendor.css");?>">	   
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">	   	
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">	   	
	
  </head>
  
  <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">                                                            
                            Sistem Informasi Praktik Kerja Industri </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">Registrasi Admin Baru</p>
						<?php $attributes = array("id"=>"signup-form");
						echo form_open("AdminRegister/registration", $attributes);?>                        
                            <div class="form-group">
                                <label for="firstname">Name</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control underlined" name="nama" id="firstname" placeholder="Masukkan nama lengkap"> </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control underlined" name="username" id="email" placeholder="Username@mail.com"> </div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> </div>                                    
                                </div>
                            </div>                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-center"> Kembali ke
                                    <a href="<?php echo site_url('Home/index/');?>">Homepage</a>
                                </p>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-center"><font color="white">&copy 2018</font></p>
                </div>				
            </div>
        <!--
        <script type="text/javascript" src="<?php echo base_url("assets/js/vendor.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/app.js"); ?>"></script>
		-->
    </body>	
</html>
