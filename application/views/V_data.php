<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Data Praktik Kerja Industri Admin | Sistem Informasi Prakerin SMK</title>

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
								<li class="active">
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
					<?php $tahun = $this->session->flashdata('tahun');?>
                        <h1 class="title"> Data Praktik Kerja Industri Tahun <?php echo $tahun; //yang dipakai ?>					
						</h1>						
                    </div>
                    <section class="section">
                        <div class="row">
						<div class="col-sm-12">					
							<div class="card">
                                    <div class="card-block">						
						<?php $attributes = array("name" => "tahunform","id"=>"tahunform");
									echo form_open_multipart('CatatamAdmin/index', $attributes);?>
						<select class="c-select form-control boxed" name="tahun">
						<?php $x =0;?>
								<?php $arr = range(2018, date('Y'));
									for($l=sizeof($arr);$l>-1;$l--){
									if ( ! isset($arr[$l])) {
											$arr[$l] = null;
									}?>
									<?php if($arr[$l]==NULL){?>
									<option value="<?php echo $arr[$l];?>">Pilih Tahun Data.</option>
									<?php }else{ ?>
									<option value="<?php echo $arr[$l];?>"><?php echo $arr[$l];?></option>
									<?php } ?>										
								<?php } ?>							
						</select>
						<?php echo form_close(); ?>
						<a href="#" name="Submit" id="submit2" class="btn btn-primary btn-block">Cari</a>
						</div>
						</div>
						</div>
						</div>
						<div class="row">
						<div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Jumlah Peminat Tahun <?php echo $tahun;?> </h3>
                                        </div>
                                        <section class="example">
										<?php if(!empty($jml_peminat)){?>
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
												<tr>
													<td colspan=2>Total</td>												
													<td><b><?php echo $total_all_peminat;?></b></td>
													</tr>													
                                                </tbody>
                                            </table>											
											<?php }else{?>
											<h5 class="text-center">Tidak ada data. </h5>
										<?php } ?>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Jumlah Sedang Prakerin Tahun <?php echo $tahun;?> </h3>
                                        </div>
                                        <section class="example">
										<?php if(isset($jml_sedang)){?>
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
												<tr>
													<td colspan=2>Total</td>												
													<td><b><?php echo $total_all_sedang?></b></td>
													</tr>													
                                                </tbody>
                                            </table>	
										<?php }else{?>
										<h5 class="text-center">Tidak ada data. </h5>
										<?php } ?>											
                                        </section>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Alumni Prakerin Tahun <?php echo $tahun;?> </h3>
                                        </div>
                                        <section class="example">
										<?php if(!$jml_alumni == NULL){?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Laboratorium</th>
                                                        <th>Total</th>                                                        
                                                    </tr>
                                                </thead>
												<?php $m=0;?>												
                                                    <?php foreach($jml_alumni->result() as $keg){?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php $m=$m+1;?><?php echo $m;?></th>
                                                        <td><?php echo $keg->nama_lab;?></td>
                                                        <td><?php echo $keg->total;?></td>  
                                                    </tr>
													<?php }?>
													<tr>
													<td colspan=2>Total</td>												
													<td><b><?php echo $total_All_alumni;?></b></td>
													</tr>													
                                                </tbody>
                                            </table>
										<?php }else{?>
										<h5 class="text-center">Tidak ada alumni. </h5>
										<?php } ?>
                                        </section>
                                    </div>
                                </div>
                            </div>
							 <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Jumlah Pengajuan Tahun <?php echo $tahun;?> </h3>											
                                        </div>
                                        <section class="example">
										<?php if(!$jml_alumni == NULL){?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Sekolah</th>
                                                        <th>Jumlah Pengajuan</th>
                                                    </tr>
                                                </thead>
												<?php $m=0;?>												
                                                    <?php foreach($jml_pengajuan->result() as $ke){?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php $m=$m+1;?><?php echo $m;?></th>
                                                        <td><?php echo $ke->nama_sekolah;?></td>
                                                        <td><?php echo $ke->total;?></td>  
                                                    </tr>
													<?php }?>
													<tr>
													<td colspan=2>Total</td>												
													<td><b><?php echo $total_All_pengajuan;?></b></td>
													</tr>													
                                                </tbody>
                                            </table>
										<?php }else{?>
										<h5 class="text-center">Tidak ada data pengajuan. </h5>
										<?php } ?>
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
	<script>
	$('#submit2').click(function(){
			//when the submit button in the modal is clicked, submit the form 
			$('#tahunform').submit();
	});	 
	</script>
  </body>
</html>
