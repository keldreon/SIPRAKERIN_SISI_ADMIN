<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
	<h2>Form Tambah Data</h2>
	<form action="<?php echo site_url('petugas/prosesTambah');?>" method="post">
		Nama: <input type="text" name="nama"><br/><br/>
		Alamat: <input type="text" name="alamat"><br/><br/>
		No Telepon: <input type="text" name="telepon"><br/><br/>
		Jabatan: <input type="text" name="jabatan"><br/><br/>
		Username: <input type="text" name="username"><br/><br/>
		Password: <input type="password" name="password"><br/><br/>
		<input type="submit" name="submit" value="tambah">
	</form>
</body>
</html>