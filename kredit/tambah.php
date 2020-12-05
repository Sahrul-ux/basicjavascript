<?php
require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]) ) {
	
	//cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Berkas Berkasil Dikirim!');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Berkas gagal Dikirim!');
				document.location.href = 'index.php';
			</script>
			";
	}
}
?>
<DOCTYPE html>
<html>
<head>
		<title>Tambah Data Mahasiswa</title>
</head>
<body>

	<h1>Tambah Data Mahasiswa</h1>
    
	<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat" id="alamat" required>
		</li>
		<li>
			<label for="notelp">No.telpon :</label>
			<input type="text" name="notelp" id="notelp">
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="pengajuan">Jumlah Pengajuan :</label>
			<input type="text" name="pengajuan" id="pengajuan">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="file" name="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Kirim Berkas :</button>
		</li>
	</ul>
	</form>
</body>
</html>