<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Verifikasi Admin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
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
                        <p class="text-center">ADMIN VERIFICATION</p>
                        <p class="text-muted text-center">
                            <small>Masukkan Password untuk melanjutkan.</small>
                        </p>
						<?php $this->session->flashdata('msg');?>
                        <?php $attributes = array("id"=>"reset-form");
							echo form_open("HakKelola/PasswordVer", $attributes);?>                        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Masukkan Password untuk melanjutkan..." required> </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Verify</button>
                            </div>
                            <div class="form-group clearfix">
                                <p class="text-muted text-center"> Kembali ke
                                    <a href="<?php echo site_url('Home/index/');?>">Homepage</a>
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