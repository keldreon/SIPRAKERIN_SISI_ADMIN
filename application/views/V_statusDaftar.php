<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Status Pengajuan | Sistem Informasi Prakerin SMK</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
	<style>	
	
	.footer {
  		position: absolute;
  		right: 0;
  		bottom: 0;
  		left: 0;  		
  		text-align: center;  		
		z-index: -1000;
	}
	
	.diver{		
		width:100%;
		height:8%;
	}
	
	#baru{
		margin-bottom:0%;
		padding-bottom: 0%;
	}
	</style>
</head>
<body>

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>		  
          <a class="navbar-brand" href="<?php echo site_url('Home/index/');?>">Sistem Informasi Prakerin SMK</a>
        </div>
        <div  class="navbar-collapse collapse" id="navbar1">
          <ul class="nav navbar-nav navbar-right">            
            <li><a href="<?php echo base_url(); ?>index.php/Pengajuan/index">Pengajuan</a></li>
            <li class="active"><a href="#">Cek Status</a></li>			            
			</ul>			
        </div>
      </div>
    </nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 well"> 
			
			<h2 class="sub-header">Permintaan Pengajuan <?php echo $dat_lab->nama_lab;?></h2>
			<br/>			
			<legend>Data Sekolah</legend>			
			<div class="form-group">
				<label for="nSekolah">Nama Sekolah</label>
				<input class="form-control" name="nSekolah" placeholder="Nama Sekolah" type="text" value="<?php echo $data_sekolah->nama_sekolah;?>" readonly/>	
			</div>
			
			<div class="form-group">
				<label for="aSekolah">Alamat Sekolah</label>
				<input class="form-control" name="aSekolah" placeholder="Alamat Sekolah" type="text" value="<?php echo $data_sekolah->alamat_sekolah; ?>" readonly/>				
			</div>			

			<div class="form-group">
				<label for="contSekolah">No. Telp/HP</label>
				<input class="form-control" name="contSekolah" placeholder="No. Telp/HP" type="text" value="<?php echo $data_sekolah->kontak_sekolah; ?>" readonly/>				
			</div>
			
			<div class="form-group">
				<label for="surat">Surat Keterangan</label><br/>
				<a class="btn btn-primary" href="#">Unduh</a>	
			</div>											
			<br/>
						
			<legend>Data Pembimbing Sekolah</legend>						
			<div class="form-group">
				<label for="nPembimbing">Nama Pembimbing</label>
				<input class="form-control" name="nPembimbing" placeholder="Nama Pembimbing" type="text" value="<?php echo $data_pembimbing->nama_pembimbing; ?>" readonly/>
				<span class="text-danger"><?php echo form_error('nPembimbing'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="pJabatan">Jabatan</label>
				<input class="form-control" name="pJabatan" placeholder="Jabatan" type="text" value="<?php echo $data_pembimbing->jabatan_pembimbing; ?>" readonly/>
				<span class="text-danger"><?php echo form_error('pJabatan'); ?></span>
			</div>

			<div class="form-group">
				<label for="pKontak">No. Telp/HP Pembimbing</label>
				<input class="form-control" name="pKontak" placeholder="No. Telp/HP Pembimbing" type="text" value="<?php echo $data_pembimbing->kontak_pembimbing; ?>" readonly/>
				<span class="text-danger"><?php echo form_error('pKontak'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="pEmail">Email Pembimbing</label>
				<input class="form-control" name="pEmail" placeholder="Email Pembimbing" type="text" value="<?php echo $data_pembimbing->email_pembimbing; ?>" readonly/>
				<span class="text-danger"><?php echo form_error('pEmail'); ?></span>
			</div>				
		
		<legend>Siswa</legend>		
          <div class="table-responsive">
            <table class="table table-striped">			
              <thead>
                <tr>                  
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
				  <th>Status Pengajuan</th>                       
                </tr>
              </thead>			 
              <tbody>
			  <?php foreach($data_siswa->result() as $sis): ?>			
                <tr>
                  <td><?php echo $sis->NIS_siswa; ?></td>
                  <td><?php echo $sis->nama_siswa; ?></td>
                  <td><?php echo $sis->jurusan_siswa; ?></td>      
				  <td>				  											   
				  <?php if($sis->status_penerimaan_lab == 0){?>
					<span class="label label-info">Diproses</span>			  
				  <?php } else if($sis->status_penerimaan_lab == 1){ ?>				  
				    <span class="label label-success">Diterima</span>		
				  <?php } else if($sis->status_penerimaan_lab == 2){?>				  
				  <span class="label label-danger">Ditolak</span>	
				  <?php } ?>
				  </td>      
                </tr>      
			<?php endforeach?>			  				
              </tbody>			
            </table>
          </div>
		  <div class="form-group">
				<label for="pKontak">Status Pengajuan</label>
				<h4>				
				<?php if($data_pembimbing->status_pengajuan == 0){?>
				<span class="label label-info">Diproses</span>				
			    <?php } else if($data_pembimbing->status_pengajuan == 1){?>				
				<span class="label label-success">Diterima</span>						
				<?php } else if($data_pembimbing->status_pengajuan == 2){?>				  
				<span class="label label-danger">Ditolak</span>	
				<?php } ?>			    
				</h4>
				<?php if($data_pembimbing->status_pengajuan != 0){?>
				<div class="form-group">				
					<label for="surat">Surat Keterangan Balasan</label><br/>
					<a class="btn btn-primary" href="#">Unduh</a>						
				</div>	
				<?php } ?>			    
				<div class="form-group">				
					<center><a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/CekStatus/index"">Kembali</a></center>
				</div>
		  </div>		  
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>	
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>