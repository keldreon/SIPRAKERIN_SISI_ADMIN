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
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu" id="customize-menu">
                            <li>                             
                             <a href="#">
                               <i class="fa fa-user-plus"></i> Register Admin </a>
                            </li>
                        </ul>
                    </footer>
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
					<?php $noNewAkun = $this->session->flashdata('upor');?>					
					<?php if($noNewAkun==0){ 
									$attributes = array("name" => "pengajuanform","id"=>"pengajuanform");
									echo form_open_multipart('HakKelola/prosesEditPengajuan', $attributes);?>
					<?php }else if($noNewAkun==1){
								$attributes = array("name" => "pengajuanform","id"=>"pengajuanform");
								echo form_open_multipart('HakKelola/prosesUpdatePengajuan', $attributes);
					}?>				
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
								<a class="btn btn-primary" href="<?php echo site_url("HakKelola/downloadPengajuan/".$dataSekolah->file_surat);?>">Unduh</a>
							</div>
							<div class="form-group">
								<label>Upload Surat Balasan</label><br/>
								<input type="file" name="userfile" size="20"/><br/>
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
									<?php } ?> | 
									<select class="c-select form-control boxed" name="status_pengajuan_lab[]"  >				  
										<option value="0">Diproses</option>
										<option value="1">Diterima</option>
										<option value="2">Ditolak</option>
										</select>
								</td>								
								<!-- harusnya pake ajax buat cek if status penerimaan lab diubah jadi diterima  lalu datepicker aktif -->
								<td>
								<div class="span5 col-md-12" id="datepick">								
								<div class="input-daterange input-group" id="datepicker">
									<input type="text" class="input-sm form-control" name="date_start[]" placeholder="Start Date" value="<?php echo set_value('date_start'); ?>"/>
								<span class="input-group-addon">to</span>
									<input type="text" class="input-sm form-control" name="date_end[]" placeholder="End Date" value="<?php echo set_value('date_end'); ?>"/>
								</div>																								
								</div>																								
								</td>
								<td><select class="selectpicker" name="pembimbing_lab[]"  >				  
									<?php foreach($dataPemLab->result() as $dataPemb){?>
										<option value="<?php echo $dataPemb->id_pemb_lab;?>"><?php echo $dataPemb->nama_pemb_lab;?></option>							
									<?php }?>					
									</select>
								</td>				
							</tr>  
							<?php $counter = $counter +1;?>
							<input name="dataVal" type="hidden" value="<?php echo $counter; ?>" />				
							<?php endforeach?>			  				
								</tbody>			
							</table>            
						</div> <!--end table-->
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#confirm-modal">Submit</a>
									<a class="btn btn-secondary" href="<?php echo base_url(); ?>index.php/Pengajuan/index">Batal</a>
                                </div>
                            </div>
                        </div><!--end card block-->
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
                                <a href="#" name="Submit" id="submit2" class="btn btn-primary">Ya</a>
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
		<script src="<?php echo base_url("assets/js/bootstrap-datepicker.js");?>"></script>    		
		<script>
		$('#datepick .input-daterange').datepicker({
			format: "yyyy-mm-dd",
			language: "id"
		});
		
		$('#submit2').click(function(){
			//when the submit button in the modal is clicked, submit the form 
			$('#pengajuanform').submit();
		});
		</script>
    </body>
</html>