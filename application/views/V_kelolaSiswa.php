<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Data Siswa Praktek Kerja Industri | Sistem Informasi Prakerin SMK</title>

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
				<article class="content responsive-tables-page items-list-page">
				<div class="title-search-block">
				<div class="title-block">
                        <h1 class="title"> Daftar Siswa Kerja Industri</h1>
						<div class="items-search">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary rounded-s" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <p class="title-description">Tempat kelola data siswa baik untuk di-edit atau di delete...</p>
						<!--tombol delete-->
				</div>
				</div>
                   <section class="section">
                       <div class="row">
                           <div class="col-md-12">
							  <div class="card">
                                 <div class="card-block">                         
											<?php $iDe = array();?>								 
											<?php $iDe2 = array();?>								 
											<?php if(!empty($dataSiswa)){?>											
											<div class="table-responsive">
												<table class="table table-striped">
													<thead>
													<tr>																		
														<th>Nama Siswa</th>
														<th>Asal Sekolah</th>				  																												
														<th>Tempat Praktik</th>
														<th>Status</th>
														<th>Tanggal Akhir Praktik</th>
														<th>&nbsp </th>
													</tr>
													</thead>			  
													<tbody>
													<?php foreach($dataSiswa->result() as $lab):?>			  
														<tr>				
														<?php array_push($iDe,$lab->kode_referal);?>															
														<?php array_push($iDe2,$lab->id_siswa);?>
															<td><a href="<?php echo site_url('DataSiswa/getSiswa/' .$lab->id_siswa);?>" ><?php echo $lab->nama_siswa; ?></a></td> 															
															<td><?php echo $lab->nama_sekolah; ?></td>                  															
															<td><?php if($lab->id_lab == NULL){?>																
																	<p>--</p>
															<?php }else{ ?>
																<?php echo $lab->nama_lab; ?>
															<?php } ?></td> 
															<td><?php if($lab->status_penerimaan_lab == 0){?>																
																	<p>Belum Diproses</p>
															<?php }else if($lab->status_penerimaan_lab==1){ ?>
																	<p>Diterima</p>
															<?php }else if($lab->status_penerimaan_lab==2){ ?>
																	<p>Ditolak</p>
															<?php }else if($lab->status_penerimaan_lab==3){ ?>
																	<p>Sudah Prakerin</p>
															<?php } ?>																														
															</td> 
															<td>
															<?php if($lab->tanggal_selesai_praktek == NULL){?>																
																	<p>--</p>
															<?php }else{ ?>
																<?php echo $lab->tanggal_selesai_praktek; ?>
															<?php } ?>															
															</td>    															
															<td>
																<?php if($lab->status_penerimaan_lab==1){?>
																<a href="#" data-toggle="modal" data-target="#confirm-modal2_<?php echo $lab->id_siswa;?>">Akhiri</a> | 																
																<?php } ?>															
																<a href="<?php echo site_url('DataSiswa/editSiswa/' .$lab->id_siswa);?>" >Edit</a> | 
																<a href="#" data-toggle="modal" data-target="#confirm-modal_<?php echo $lab->kode_referal;?>">Delete</a>
															</td>
														</tr>					
													</tbody>			  
													<?php endforeach ?>
											</table>										 
										</div>
										<?php }else{?>
											<center><h1>Kosong</h1></center>
										<?php }?>
								  </div>
								</div>								
							</div>
						</div>
					</section>
					<?php if(!empty($dataSiswa)){?>
					<nav class="text-right">
                        <?php echo $links;?>
					</nav>
					<?php } ?>
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
			<?php for($x = 0; $x<sizeof($iDe);$x++){?>
				<div class="modal fade" id="confirm-modal_<?php echo $iDe[$x];?>">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <i class="fa fa-warning"></i> Peringatan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin akan melakukan ini?<br/><span>Penghapusan termasuk akun </span></p>
                            </div>
                            <div class="modal-footer">
                                <a name="delete" class="btn btn-secondary" href="<?php echo site_url('HakKelola/deleteSiswa/' .$iDe[$x]);?>">Ya</a>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->				
			<?php } ?>			
			
			<?php for($y = 0; $y<sizeof($iDe2);$y++){?>
				<div class="modal fade" id="confirm-modal2_<?php echo $iDe2[$y];?>">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <i class="fa fa-warning"></i> Peringatan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin akan mengakhiri Prakerin dari siswa ini? <span class="text-danger">*Sekali dilakukan tidak akan bisa diubah lagi. </span></p>
                            </div>
                            <div class="modal-footer">														
                                <a name="Akhiri" class="btn btn-secondary" href="<?php echo site_url('HakKelola/akhiriPrakerin/'.$iDe2[$y]);?>">Ya</a>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->				
			</div>										
			<?php } ?>			
		</div>										
	</div>		

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="<?php echo base_url("assets/js/jquery-3.3.1.js");?>"></script>
	<script src="<?php echo base_url("assets/js/moment.js"); ?>"></script>	
	<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>		
    <script src="<?php echo base_url("assets/js/vendor.js");?>"></script>
    <script src="<?php echo base_url("assets/js/app.js");?>"></script>
  </body>
</html>