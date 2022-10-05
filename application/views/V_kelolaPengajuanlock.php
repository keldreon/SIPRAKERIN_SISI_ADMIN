<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Pengajuan Praktek Kerja Industri | Sistem Informasi Prakerin SMK</title>
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
                                <li class="active">
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
                        <h3 class="title"> Pengajuan Praktek Kerja
                            <span class="sparkline bar" data-type="bar"></span>
                        </h3>
						<p class="title-description">Hanya mengubah status di Pengajuan. Selain itu, lakukan di menu yang tersedia.</p>
                    </div>
                    <?php $attributes = array("name" => "pengajuanform");
				echo form_open_multipart('HakKelola/prosesEditPengajuan', $attributes);?>
                        <div class="card card-block">
						<div class="title-block">
							<span class="title">Sekolah							
							</span>
						</div>
						<input name="kode_masuk" type="hidden" value="<?php echo $dataSekolah->kode_masuk; ?>" />
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Nama Sekolah: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Nama Sekolah" value="<?php echo $dataSekolah->nama_sekolah;?>" readonly> </div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Alamat Sekolah: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Alamat Sekolah" value="<?php echo $dataSekolah->alamat_sekolah;?>" readonly> </div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Kontak Sekolah: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Kontak Sekolah" value="<?php echo $dataSekolah->kontak_sekolah;?>" readonly> </div>
                            </div>
							</div>
							<div class="card card-block">							
							<div class="title-block">
							<span class="title">Pembimbing</span>
							</div>
							<div class="form-group row">														
                                <label class="col-sm-2 form-control-label text-xs-right"> Nama : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Nama Pembimbing" value="<?php echo $dataPembimbing->nama_pembimbing;?>" readonly> </div>
                            </div>							
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Jabatan : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Jabatan Pembimbing" value="<?php echo $dataPembimbing->jabatan_pembimbing;?>" readonly> </div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Kontak : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Kontak Pembimbing" value="<?php echo $dataPembimbing->kontak_pembimbing;?>" readonly> </div>								
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Email : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="Email Pembimbing" value="<?php echo $dataPembimbing->email_pembimbing;?>" readonly> </div>
                            </div>
						</div>
						<div class="card card-block">
							<div class="form-group">				
								<label for="surat">File Surat Keterangan : <?php echo $dataSekolah->file_surat;?></label><br/>
								<a class="btn btn-primary" href="<?php echo site_url('HakKelola/downloadPengajuan/'.$dataSekolah->file_surat);?>">Unduh</a>
							</div>
							<div class="form-group">
							<label for="surat">File Surat Balasan: <?php echo $dataSekolah->file_surat_balasan;?></label><br/>
								<a class="btn btn-primary" href="<?php echo site_url('HakKelola/downloadBalasan/'.$dataSekolah->file_surat_balasan);?>">Unduh</a>
							</div>
						</div>
						<div class="card card-block">					
						<div class="title-block">
							<span class="title">Siswa Yang Diajukan	</span>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>                  
									<th>No</th>
									<th>NIS</th>
									<th>Nama</th>
									<th>Jurusan</th>
									<th>Lab yang diajukan</th>                       
									<th>Status Pengajuan</th>									
									<th>Durasi Prakerin</th>
									<th>Pembimbing Lab</th>								
								</tr>
							</thead>			 
							<tbody>			  
							<?php $counter =0; ?>
							<?php foreach($dataSiswa->result() as $sis): ?>			
							<tr>			
								<td><input name="NIS[]" type="hidden" value="<?php echo $sis->id_siswa; ?>" /><?php echo $counter+1; ?></td>
								<td><?php echo $sis->NIS_siswa; ?></td>
								<td><?php echo $sis->nama_siswa; ?></td>
								<td><?php echo $sis->jurusan_siswa; ?></td>      
								<td><?php echo $sis->nama_lab; ?></td>
								<td><?php if($sis->status_penerimaan_lab == 0){?>
								<span class="label label-info">Diproses</span>			  
									<?php } else if($sis->status_penerimaan_lab == 1){ ?>				  
								<span class="label label-success">Diterima</span>		
									<?php } else if($sis->status_penerimaan_lab == 2){?>				  
								<span class="label label-danger">Ditolak</span>	
									<?php } ?>									
								</td>								
								<!-- harusnya pake ajax buat cek if status penerimaan lab diubah jadi diterima  lalu datepicker aktif -->
								<td>
									<div class="input-group input-daterange">
									<?php echo $sis->tanggal_mulai_praktek; ?> 
									<div class="input-group-addon">|</div>
									<?php echo $sis->tanggal_selesai_praktek; ?> 
									</div>
								</td>
								<td>								
										<?php echo $sis->nama_pemb_lab;?>																		
								</td>				
							</tr>  							
							<?php $counter = $counter +1;?>
							<input name="dataVal" type="hidden" value="<?php echo $counter; ?>" />											
							<?php endforeach?>			  				
						</tbody>			
					</table>            
				</div> 
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <center><a class="btn btn-default" href="<?php echo base_url(); ?>index.php/Pengajuan/index">Batal</a>
                                </div>
                            </div>
                        </div>
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
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Media Library</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                    </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row">
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Insert Selected</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
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
                                <p>Apakah anda yakin akan melakukan perubahan pada pengajuan? <br/> Untuk Perubahan Ulang Harap lakukan di menu edit...</p>
                            </div>
                            <div class="modal-footer">
                                <button name="submit" type="submit" class="btn btn-primary">Ya</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->				
            </div>
        </div>        		
        <script src="<?php echo base_url("assets/js/vendor.js");?>"></script>
		<script src="<?php echo base_url("assets/js/app.js");?>"></script>        
    </body>
</html>