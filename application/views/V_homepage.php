<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Dashboard Admin | Sistem Informasi Prakerin SMK</title>

    <!-- Bootstrap core CSS -->	
    <!--<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />  -->
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/vendor.css");?>">	   
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">	   	
	<link rel="stylesheet" id="theme-style" href="<?php echo base_url("assets/css/app-red.css");?>">

    <!-- Custom styles for this template -->
    <!--<link href="dashboard.css" rel="stylesheet"  type="text/css" >-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
	
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
                                <li class="active">
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
                                <li> 
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
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Dashboard </h1>                  
                    </div>
                    <section class="section">
                        <div class="row">
						<div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Jumlah Peminat </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Laboratorium</th>
                                                        <th>Total</th>                                                        
                                                    </tr>
                                                </thead>
												<?php $i=0;?>
                                                <tbody>
												<?php foreach($jml_peminat->result() as $ng){?>												
                                                    <tr>
                                                        <th scope="row"><?php $i=$i+1;?><?php echo $i?></th>                                                                                                                
                                                        <td><?php echo $ng->nama_lab;?></td>
														<td><?php echo $ng->total;?></td>
                                                    </tr>                                                    												
												<?php }?>
                                                </tbody>
                                            </table>											
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Jumlah Sedang Prakerin </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Laboratorium</th>
                                                        <th>Total</th>                                                        
                                                    </tr>
                                                </thead>
												<?php $i=0;?>
                                                <tbody>
												<?php foreach($jml_sedang->result() as $ns){?>												
                                                    <tr>
                                                        <th scope="row"><?php $i=$i+1;?><?php echo $i?></th>                                                                                                                
                                                        <td><?php echo $ns->nama_lab;?></td>
														<td><?php echo $ns->total;?></td>
                                                    </tr>                                                    												
												<?php }?>
                                                </tbody>
                                            </table>											
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Pengajuan </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Pembimbing</th>
                                                        <th>Asal Sekolah</th>
                                                        <th>Tempat Praktik</th>
														<th>Waktu Pengajuan</th>
                                                    </tr>
                                                </thead>
												<?php $i=0;?>
                                                <tbody>
												<?php foreach($data_pengajuan->result() as $peng){?>
                                                    <tr>
                                                        <th scope="row"><?php $i=$i+1;?><?php echo $i?></th>
                                                        <td><a href="<?php echo site_url('Pengajuan/klikPengajuan/' .$peng->kode_masuk);?>" ><?php echo $peng->nama_pembimbing;?></a></td>
                                                        <td><?php echo $peng->nama_sekolah;?></td>
                                                        <td><?php echo $peng->nama_lab;?></td>
														<td><?php echo $peng->tanggal_pengajuan;?></td>
                                                    </tr>                                                    
												<?php }?>
                                                </tbody>
                                            </table>											
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Laboratorium </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Laboratorium</th>
                                                        <th>Terisi</th>
                                                        <th>Maksimal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php $j=0;?>
                                                    <?php foreach($laboratorium->result() as $lab){?>
                                                    <tr>
                                                        <th scope="row"><?php $j=$j+1;?><?php echo $j?></th>
                                                        <td><?php echo $lab->nama_lab;?></td>
                                                        <td><?php echo $lab->kapasitas_isi;?></td>
                                                        <td><?php echo $lab->kapasitas_maksimum;?></td>
                                                    </tr>                                                    
												<?php }?>                                                    
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Data Siswa </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Kode Pembimbing</th>
                                                        <th>Jurusan</th>														
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php $k=0;?>
                                                    <?php foreach($dataSiswa->result() as $sis){?>
                                                    <tr>
                                                        <th scope="row"><?php $k = $k+1;?><?php echo $k;?></th>
                                                        <td><?php echo $sis->nama_siswa;?></td>
                                                        <td><?php echo $sis->kode_masuk;?></td>
                                                        <td><?php echo $sis->jurusan_siswa;?></td>														
                                                    </tr>
                                                    <?php }?>                                                    
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Catatan Kegiatan </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Judul Catatan</th>
                                                        <th>Penulis Catatan</th>                                                        
                                                    </tr>
                                                </thead>
												<?php $m=0;?>
                                                    <?php foreach($dataKegiatan->result() as $keg){?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php $m=$m+1;?><?php echo $m;?></th>
                                                        <td><a href="<?php echo site_url('DataSiswa/IsiCatatanKegiatan/' .$keg->id_kegiatan);?>" ><?php echo $keg->judul_tulisan;?></a></td>
                                                        <td><?php echo $keg->username_akun;?></td>  
                                                    </tr>
													<?php }?>
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>                    
					</section>
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
