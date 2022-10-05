<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Detail Siswa | Sistem Informasi Prakerin SMK</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/vendor.css");?>">	   
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">	   	
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">	   	
        <!-- Theme initialization -->   
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
                                <li>
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
                                <li class="active"> 
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
                        <h3 class="title"> Detail Siswa
                            <span class="sparkline bar" data-type="bar"></span>
                        </h3>
						<p class="title-description">Hanya mengubah identitas siswa.</p>
                    </div>				
				<div class="card card-block">						
						<input name="id_siswa" type="hidden" value="<?php echo $dataSiswa->id_siswa; ?>" />
                            <div class="form-group row">														
                                <label class="col-sm-2 form-control-label text-xs-right"> NIS Siswa: </label>
                                <div class="col-sm-10">								
                                    <input type="text" class="form-control boxed" placeholder="NIS Siswa"  name="nis" value="<?php echo $dataSiswa->NIS_siswa;?>"readonly></div>
                            </div>
							<div class="form-group row">														
                                <label class="col-sm-2 form-control-label text-xs-right"> Nama Siswa: </label>
                                <div class="col-sm-10">								
                                    <input type="text" class="form-control boxed" placeholder="Nama Siswa"  name="nama" value="<?php echo $dataSiswa->nama_siswa;?>"readonly></div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Jurusan Siswa: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Jurusan Siswa" name="jurusan" value="<?php echo $dataSiswa->jurusan_siswa;?>"readonly> </div>
                            </div>							
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tanggal Mulai Prakerin: </label>
                                <div class="col-sm-10">
								<?php if($dataSiswa->tanggal_mulai_praktek == NULL){?>
                                    <input type="text" class="form-control boxed" placeholder="Mulai" name="awal" value="Tanggal Mulai Belum Ditentukan"readonly> </div>
								<?php }else{?>
									<input type="text" class="form-control boxed" placeholder="Mulai" name="awal" value="<?php echo $dataSiswa->tanggal_mulai_praktek;?>"readonly> </div>
									<?php } ?>
                            </div>							
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tanggal Berakhir Prakerin: </label>
                                <div class="col-sm-10">
                                    <?php if($dataSiswa->tanggal_selesai_praktek == NULL){?>
                                    <input type="text" class="form-control boxed" placeholder="Selesai" name="akhir" value="Tanggal Selesai Belum Ditentukan"readonly> </div>
									<?php }else{ ?>
									<input type="text" class="form-control boxed" placeholder="Selesai" name="akhir" value="<?php echo $dataSiswa->tanggal_mulai_praktek;?>"readonly> </div>
									<?php } ?>
                            </div>							
						</div>														
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
	<script src="<?php echo base_url("assets/js/vendor.js");?>"></script>
    <script src="<?php echo base_url("assets/js/app.js");?>"></script>
</body>
</html>