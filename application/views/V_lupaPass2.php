<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Perbaiki Password Admin | Sistem Informasi Praktek Kerja Industri</title>

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
                        <header class="auth-header">
                        <h1 class="auth-title">                                                            
                            Sistem Informasi Praktik Kerja Industri </h1>                    
                    </header>
                    <div class="auth-content">
                        <p class="text-center">PASSWORD RECOVER</p>
                        <p class="text-muted text-center">
                            <small>Masukkan password baru untuk mengembalikan password.</small>
                        </p>
						<?php $attributes = array("id"=>"reset-form");
							echo form_open("HakKelola/updatePassword", $attributes);?>                        
							<?php $this->session->keep_flashdata('uname'); $tes = $this->session->flashdata('uname');?>
							<div class="form-group">
                                <label for="email1">Username</label>
                                <input type="email" class="form-control underlined" name="username" id="username" placeholder="Username" value="<?php echo $tes;?>" required readonly></div>                            
                            <div class="form-group">
                                <label for="email1">Password Baru</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Password Baru..." required> </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Reset</button>
                            </div>
							
                            <div class="form-group clearfix">
								<!--<a class="pull-left" href="<?php echo base_url(); ?>index.php/Admin_login/index">Test</a> -->
                                <a class="pull-left" href="<?php echo base_url(); ?>index.php/Admin_login/index">return to Login</a>                                
                            </div>							
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-center"><font color="white">&copy 2018</font></p>
                </div>				
            </div>
        </div>               
        
		<script type="text/javascript" src="<?php echo base_url("assets/js/vendor.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/app.js"); ?>"></script>
    </body>
	
</html>
