<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    
	<title>Detail Pembimbing Lab &nbsp|&nbsp Sistem Informasi Praktek Kerja Industri</title>
	<!--link the bootstrap css file-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/vendor.css");?>">	   
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">	   	
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div class="main-wrapper">
      <div class="app" id="app">
           <header class="header">
               <div class="header-block header-block-collapse d-lg-none d-xl-none">
                   <button class="collapse-btn" id="sidebar-collapse-btn">
                           <i class="fa fa-bars"></i>
                     </button>
                </div>
                <div class="header-block header-block-search">
                   <form role="search">
                        <div class="input-container">
                             <i class="fa fa-search"></i>
                             <input type="search" placeholder="Search">
                              <div class="underline"></div>
                         </div>
                    </form>
                </div>                    
                <div class="header-block header-block-nav">
                    <ul class="nav-profile">
                        <li class="notifications new">
                            <a href="" data-toggle="dropdown">
                                 <i class="fa fa-bell-o"></i>
                                 <sup>
                                    <span class="counter">8</span>
                                 </sup>
                             </a>
                             <div class="dropdown-menu notifications-dropdown-menu">
                                 <ul class="notifications-container">
                                    <li>						
										<br/>
                                        <center><span class="accent">No Notificaion</span> </center>                                            
										<br/>
                                     </li>                                        
								 </ul>
								<footer>
                                  <ul>
								  <hr></hr>
                                     <li>
                                         <a href=""> View All </a>
                                     </li>									 
                                  </ul>
								</footer>
                                </div>
                           </li>
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">                                    
										<?php $tes = $this->session->userdata('uname');?>              
										<span class="name"> <?php echo $tes;?></span>
								</a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Home/Panduan" target="_blank">
                                        <i class="fa fa-question icon"></i> Help </a>                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Home/logout">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                  </div>
        </header>
		<aside class="sidebar">
            <div class="sidebar-container">
                  <div class="sidebar-header">
                        <div class="brand">
                                Simprakerin
						 </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li>
                                    <a href="<?php echo site_url('Home/index/');?>">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Pengajuan/index/');?>"> 
                                        <i class="fa fa-envelope	"></i> Pengajuan                                        
                                    </a>                                    
                                </li>
                                <li class="active">
                                    <a href="">
                                        <i class="fa fa-desktop"></i>Laboratorium
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="<?php echo site_url('Laboratorium/index/');?>">Daftar Laboratorium</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('DataPembimbingLab/index/');?>"> Daftar Pembimbing Laboratorium</a>
                                        </li>
                                    </ul>
                                </li>
                                <li > 
                                    <a href="">
                                        <i class="fa fa-user-circle"></i>Siswa
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
									    <li>
                                            <a href="<?php echo site_url('DataSiswa/Absensi/');?>">Absensi Siswa</a>
                                        </li>										
										<li>
                                            <a href="<?php echo site_url('DataSiswa/CatatanKegiatan/');?>">Catatan Kegiatan</a>
                                        </li>
										<li>
                                            <a href="<?php echo site_url('DataSiswa/dataAkun/');?>">Data Akun Siswa</a>
                                        </li>																														
                                        <li>
                                            <a href="<?php echo site_url('DataSiswa/index/');?>">Data Siswa</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li>								
                                    <a href="<?php echo site_url('DataPembimbing_SekolahSiswa/index/');?>">
                                        <i class="fa fa-university "></i> Pembimbing Sekolah</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('CatatamAdmin/index/');?>">
                                        <i class="fa fa-line-chart"></i> Data Praktik Kerja Industri </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
					<?php $oten = $this->session->userdata('kekuasaan');?>
					<?php if($oten == 1){?>
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu" id="customize-menu">
                            <li>                             
                             <a href="<?php echo site_url('AdminRegister/index');?>">
                               <i class="fa fa-user-plus"></i> Register Admin </a>
                            </li>
                        </ul>
                    </footer>
					<?php } ?>
                </aside>
				
				<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Detail Pembimbing Lab <?php//harusnya nama lab?>
                            <span class="sparkline bar" data-type="bar"></span>
                        </h3>
						<p class="title-description"><?php//deskripsi lab?></p>
                    </div>	
                    <?php $attributes = array("name" => "pemblabform");
				echo form_open_multipart('HakKelola/prosesEditPembLab', $attributes);?>
                        <div class="card card-block">						
						<input name="id_pemb_lab" type="hidden" value="<?php echo $laboratorium->id_pemb_lab; ?>" />
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Nama : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Nama Pembimbing Laboratorium" name="nama" value="<?php echo $laboratorium->nama_pemb_lab;?>" readonly></div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Laboratorium: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Kapasitas Maksimum" name="lab" value="<?php echo $laboratorium->nama_lab;?>" readonly></div>
                            </div>							
							<div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">                                    
									<a class="btn btn-secondary" href="<?php echo base_url(); ?>index.php/DataPembimbingLab/index">Batal</a>
                                </div>
                            </div>
						</div>												
						<?php //if(){?>
						<?php //}else{?>
						<?php //} ?>						
                    <?php echo form_close(); ?>					
				</article>
				<footer class="footer">				
                    <div class="footer-block author">
                        <ul>
                            <li> &copy 2018
                            </li>
                            <li> Template by
                                <a href="https://github.com/modularcode">ModularCode</a>
                            </li>
                        </ul>
                    </div>
                </footer>
				</div>													
    <script src="<?php echo base_url("assets/js/vendor.js");?>"></script>
    <script src="<?php echo base_url("assets/js/app.js");?>"></script>		
</body>
</html>