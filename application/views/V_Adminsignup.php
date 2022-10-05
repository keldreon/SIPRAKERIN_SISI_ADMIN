<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Signup Admin | Sistem Praktek Kerja Industri - Admin Side</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
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
                        <p class="text-center">Signup Untuk Menggunakan Layanan Admin</p>
                        <?php $attributes = array("id"=>"login-form");
							echo form_open("Admin_register/index", $attributes);?>
                            <div class="form-group">
                                <label for="firstname">Name</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required=""> </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required=""> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control underlined" name="retype_password" id="retype_password" placeholder="Re-type password" required=""> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="agree">
                                    <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                                    <span>Agree the terms and
                                        <a href="#">policy</a>
                                    </span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-center">Already have an account?
                                    <a href="login.html">Login!</a>
                                </p>
                            </div>
                        </form>
                    </div>
					<div class="text-center">
                    <p class="text-center"><font color="white">&copy 2018</font></p>
                </div>				
                </div>                
            </div>
        <!-- Reference block for JS -->        
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>