<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin | Sistem Praktek Kerja Industri - Admin Side</title>
	<!--<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />  -->
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
					<?php echo $this->session->flashdata('msg'); ?>
                        <p class="text-center">Login Admin</p>
                        <?php $attributes = array("id"=>"login-form");
							echo form_open("Admin_login/index", $attributes);?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control underlined" name="username" placeholder="Enter Username" type="text" value="<?php echo set_value('username'); ?>" required/></div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control underlined" name="password" placeholder="Enter Password" type="password" value="<?php echo set_value('password'); ?>" required/></div>
                           
							<div class="form-group">
							<?php
                           /*<label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox">
                                    <span>Remember me</span>
								</label>
								*/?>
                                <a href="<?php echo base_url(); ?>index.php/HakKelola/lupaPassword" class="forgot-btn pull-right">Forgot password?</a><br/>
                            </div>							
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                            
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-center"><font color="white">&copy 2018</font></p>
                </div>				
           </div>			
       </div>		
	

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<!--
<script type="text/javascript" src="<?php echo base_url("assets/js/vendor.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/app.js"); ?>"></script>        
-->
</body>
</html>
