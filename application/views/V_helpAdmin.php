<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Panduan Penggunaan | Sistem Informasi Prakerin SMK</title>

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
                                    <a href="#Beranda">
                                        <i class="fa fa-home"></i> Laman Beranda </a>
                                </li>
                                <li>
                                    <a href="#Pengajuan"> 
                                        <i class="fa fa-envelope	"></i> Pengajuan                                        
                                    </a>                                    
                                </li>
                                                                   
                                       <li>
                                            <a href="#KelolaLab">Daftar Laboratorium</a>
                                        </li>
                                        <li>
                                            <a href="#KelolaPembLab"> Daftar Pembimbing Laboratorium</a>
                                        </li>                                                                    
                                <li>                                                                         
                                            <a href="#absensi">Absensi Siswa</a>
                                        </li>										
										<li>
                                            <a href="#catatan">Catatan Kegiatan</a>
                                        </li>
										<li>
                                            <a href="#akun">Data Akun Siswa</a>
                                        </li>																														
                                        <li>
                                            <a href="#dsiswa">Data Siswa</a>
                                        </li>                                                                                                            
                                <li>								
                                    <a href="#kPembdanSekolah">
                                        <i class="fa fa-university "></i> Pembimbing Sekolah</a>
                                </li>
								<li>
                                    <a href="#detail">
                                        <i class="fa fa-line-chart"></i> Data Praktik Kerja Industri </a>
                                </li>
								<li>                             
									<a href="#pAdmin">
									<i class="fa fa-user-plus"></i> Tentang Admin</a>
								</li>								
                            </ul>
                        </nav>
                    </div>					                    
                </aside>
				<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title" id="judul"> Panduan Penggunaan </h1>                        
                    </div>
                    <section class="section">
                        <div class="row">
						<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="Beranda"> Tampilan Beranda</h3>
                                        </div>
                                        <section class="example">
                                            <p class="text-justify">Laman Beranda/Homepage terdiri dari data jumlah siswa peminat laboratorium yang terdaftar, 
											jumlah siswa yang sedang praktik kerja industri, 5 pengajuan terbaru, jumlah lab yang terisi dan batas maksimum siswa yang
											diterima, data siswa terbaru yang disusun dari tanggal pengajuan, serta catatan kegiatan yang ditulis oleh siswa. </p>
											
											
											<p class="text-justify">Untuk mengakhiri situs admin, cukup melakukan logout di nama user admin. Selain itu, bisa digunakan untuk membuka laman ini. </p>
											
											<p class="text-justify">Jika ingin melakukan hal lain, cukup klik sidebar yang ada di sebelah kiri, yang terdiri dari dashboard, pengajuan, laboratorium, siswa, 
											pembimbing sekolah, serta data praktik kerja industri. Di menu laboratorium dan siswa memiliki sub menu. Laboratorium memiliki sub menu data laboratorium 
											dan data pembimbing laboratorium. Sedangkan di menu siswa memiliki sub menu absensi, catatan siswa, akun siswa, dan data siswa.
											</p>																																
                                        </section>										
                                    </div>									
                                </div>
                            </div>							                            
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="Pengajuan"> Kelola Pengajuan </h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Di menu kelola pengajuan, menampilkan tanggal_pengajuan, nama pembimbing sekolah, nama sekolah, tempat praktik (laboratorium) dan menu untuk mengedit/delete.										
										</p>
										<p class="text-justify">
										Menu edit akan muncul jika nama pembimbing sudah ada tanda centang yang artinya sudah diproses. 
										</p>
										<p class="text-justify">
											Untuk memproses pengajuan, ada beberapa tahap yang bisa dilakukan<br/>
											1. klik nama pembimbing<br/>
											2. ubah status pengajuan yang asalnya diproses menjadi diterima atau ditolak dan tetap diproses.<br/>
											3. klik tanggal awal praktik kerja industri, lalu akan muncul menu untuk memilih tanggal, bulan dan tahun.<br/>
											4. jika tanggal akhir sudah terisi tiba-tiba, klik tanggal akhir praktik kerja industri, lalu akan muncul menu untuk memilih tanggal, bulan dan tahun.<br/>
											5. kemudian pilih pembimbing labnya.<br/>
											6. tidak lupa unggah surat balasan dalam format pdf, dan word document. <br/>
											7. kemudian klik submit, apabila muncul konfirmasi klik ya. <br/>
											8. setelah itu pengajuan sudah diproses dengan berubahnya tanda silang ke tanda centang.
										</p>
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>                        
						<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="Pengajuan"> Kelola Pengajuan </h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Di menu kelola pengajuan, menampilkan tanggal_pengajuan, nama pembimbing sekolah, nama sekolah, tempat praktik (laboratorium) dan menu untuk mengedit/delete.										
										</p>
										<p class="text-justify">
										Menu edit akan muncul jika nama pembimbing sudah ada tanda centang yang artinya sudah diproses. 
										</p>
										<p class="text-justify">
											Untuk memproses pengajuan, ada beberapa tahap yang bisa dilakukan<br/>
											1. klik nama pembimbing<br/>
											2. ubah status pengajuan yang asalnya diproses menjadi diterima atau ditolak dan tetap diproses.<br/>
											3. klik tanggal awal praktik kerja industri, lalu akan muncul menu untuk memilih tanggal, bulan dan tahun.<br/>
											4. jika tanggal akhir sudah terisi tiba-tiba, klik tanggal akhir praktik kerja industri, lalu akan muncul menu untuk memilih tanggal, bulan dan tahun.<br/>
											5. kemudian pilih pembimbing labnya.<br/>
											6. tidak lupa unggah surat balasan dalam format pdf, dan word document. <br/>
											7. kemudian klik submit, apabila muncul konfirmasi klik ya. <br/>
											8. setelah itu pengajuan sudah diproses dengan berubahnya tanda silang ke tanda centang.
										</p>
										<p class="text-justify">Untuk kembali mengubah pengajuan cukup klik edit di menu Pengajuan kemudian kembali ke tahap 1-8.</p>
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="KelolaLab">Daftar Laboratorium </h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Daftar Laboratorium menampilkan nama lab dan menu seperti detail, tutup dan delete. Terdapat juga tombol Add new untuk menambahkan lab baru untuk lowongan prakerin.									
										</p>
										<p class="text-justify">
										Menu detail adalah menu yang menampilkan detail lab sekaligus isi siswa yang berada di dalamnya baik yang sedang diproses maupun diterima. Tutup digunakan untuk menutup lowongan prakerin dan delete untuk menghapus lab tapi tidak untuk para pembimbing lab.
										</p>
										<p class="text-justify">
											Di dalam menu detail terdapat form untuk mengedit nama laboratorium, deskripsi laboratorium, dan kapasitas maksimum untuk jumlah siswa yang diterima. jika ada perubahan cukup klik simpan dan jika tida klik batal. selain itu menampilkan daftar siswa di dalamnya baik sedang diproses maupun sudah diterima. Jika sudah diterima akan menampilkan nama pembimbing lab dan waktu prakerin.
										</p>										
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="KelolaPembLab">Daftar Pembimbing Laboratorium </h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Daftar pembimbing Laboratorium menampilkan nama pembimbing lab dan mengeditnya sesuai dengan jumlah lab. 
										</p>
										<p class="text-justify">
											Untuk menambah pembimbing lab, ada beberapa tahap yang bisa dilakukan<br/>
											1. klik tombol add new<br/>
											2. isi data yang terdiri dari nama pembimbing lab dan memilih dari option lab yang dia tugaskan<br/>
											3. klik submit, kemudian klik ya jika konfirmasi muncul.<br/>
											4. setelah itu pembimbing lab akan bertambah sesuai dengan yang dimasukkan tadi.<br/>											
										</p>
										<p class="text-justify">
											Untuk menghapusnya cukup menekan delete dan jawab ya saat konfirmasi.
										</p>										
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>                            							
							</div>                            							
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="absensi">Absensi Siswa</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Untuk menu absensi tidak jauh berbeda dari yang ada di pembimbing sekolah, cukup klik acc absen jika terbukti sesuai data tertulis dan jika ingin membatalkan cukup klik batalkan acc.
										</p>											
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="catatan">Catatan Kegiatan</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Catatan kegiatan hanya menampilkan waktu penulisan, judul dan username penulis. untuk melihat isinya klik judul kegiatan. dan jika ingin meng-acc nya klik terima acc. Admin bisa mengedit supaya tidak ada kata kasar dan tidak pantas, cukup klik edit tulisan. 
										Tulisan kegiatan hanya bisa didelete oleh admin. 
										</p>											
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							
						<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="akun">Data Akun Siswa</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Anda bisa mematikan/mengaktifkan akun yang sudah aktif dengan klik matikan akun. jika ingin mengaktifkannya klik aktifkan di akun yang diinginkan. 
										</p>											
										<p class="text-justify">
										Untuk mereset password klik reset password, kemudian di menu itu masukkan kode siswa lalu masukkan password baru. jika kembali ke laman akun siswa makan penggantian password berhasil.
										Untuk akun hanya bisa mengedit username dan menampilkan kode siswa. akun bisa di delete di sini, namun bisa terdelete jika dihapus dari pengajuan.
										</p>								
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="dsiswa">Data Siswa</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Untuk mengakhiri prakerin, klik akhiri jika melihat tanggal akhir prakerin dengan tanggal di sistem dan mengubah status menjadi lulus prakerin/alumni. Untuk edit data siswa hanya bisa meng-edit nis, nama dan jurusan. 
										</p>											
										<p class="text-justify">
										Untuk mereset password klik reset password, kemudian di menu itu masukkan kode siswa lalu masukkan password baru. jika kembali ke laman akun siswa makan penggantian password berhasil.
										Untuk akun hanya bisa mengedit username dan menampilkan kode siswa. akun bisa di delete di sini, namun bisa terdelete jika dihapus dari pengajuan.
										</p>								
										<p class="text-denger"><b>Harap klik akhiri dengan bijak karena setelah ini tidak bisa diubah kecuali menggunakan sql.</b></p>
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="kPembdanSekolah">Daftar Pembimbing Sekolah</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Laman ini menampilkan daftar pembimbing dan asal sekolahnya serta kode pembimbing.  jika di klik detail akan menampilkan identitas sekolah dan identitas pembimbing. Untuk mengedit akan mengedit identitas sekolah dan identitas pembimbing dan jika selesai klik simpan dan klik ya jika konfirmasi muncul. 
										</p>																					
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="detail">Data Praktik Kerja Industri</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Laman ini menampilkan data yang tertulis di sistem seperti pemilihan tahun data yang diambil dari tahun 2000 sampai tahun ini. Laman ini menampilkan jumlah peminat, jumlah pengajuan, alumni prakerin, dan jumlah sedang prakerin. 
										</p>
										<p class="text-justify">Jumlah peminat terdiri dari nama laboratorium dan jumlah siswa di dalamnya baik diterima, ditolak, atau masih diproses sepanjang tahun itu.</p>
										<p class="text-justify">Jumlah sedang prakerin terdiri dari nama laboratorium dan jumlah siswa yang sudah diterima di dalamnya baik diterima di tahun itu dan sudah melakukan aktivasi akun.</p>
										<p class="text-justify">Jumlah alumni prakerin terdiri dari nama laboratorium dan jumlah siswa yang sudah selesai prakerin di tahun itu.</p>
										<p class="text-justify">Jumlah pengajuan terdiri dari nama sekolah dan jumlah pengajuan yang dilakukan baik diterima maupun ditolak di tahun itu.</p>
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title" id="pAdmin">Tentang Admin</h3>
                                        </div>
                                        <section class="example">
                                        <p class="text-justify">
										Admin terdiri dari admin dan master admin. Hanya master admin yang berhak untuk mendaftarkan admin lain.
										</p>
										<p class="text-justify">
										Untuk menambah admin baru, masukkan password kemudian masukkan nama, username dan password lalu klik daftarkan. 
										</p>										
										<p class="text-justify">
										Admin bisa mengakses lupa password jika masih ingat username tapi lupa password dan cukup masukkan username lalu masukkan password baru. 
										</p>										
										<a href="#judul" class="btn btn-primary">Kembali ke atas</a>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>						
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
