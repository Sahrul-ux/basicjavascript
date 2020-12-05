<?php
require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]) ) {
	
	//cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Permintaan Berkasil Dikirim!');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Permintaan Gagal Dikirimkan!');
				document.location.href = 'index.php';
			</script>
			";
	}
}
?>
<DOCTYPE html>
<html>
<head>
	<title>Form Pengajuan Berkas Kredit</title>
	<style>
		#card {
        background: #87CEFA;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
		}
	body{
	  background-image: url("gambar/binaniaga2.JPG");
     }
	 form {
	border: 3px solid #CCCCCC;
	padding: 30px;
	background-color: #87CEFA;
	}
	td a {
	background-color: #4CAF50;
	border: none;
	color: white;
	padding: 6px 12px;
	text-decoration: none;
	cursor: pointer;
	margin-top: 20px;
	}
	</style>
</head>
<body>
<div id="card">

	<h1><p>Buka Rekening Sekarang!</p></h1>
    
	<form action="" method="post" enctype="multipart/form-data">
	<table>
	<tr>
		<td><label for="nama">Nama :</label></td>
		<td><input type="text" name="nama" id="nama" required></td>
	</tr>
	<tr>
		<td><label for="alamat">Alamat :</label></td>
		<td><textarea input type="text" name="alamat" id="alamat" 
		cols="30" rows="5" required></textarea></td>
	<tr>
		<td><label for="email">Email :</label></td>
		<td><input type="text" name="email" id="email" required></td>
	</tr>
	<tr>
		<td><label for="notelp">No.telpon :</label></td>
		<td><input type="text" name="notelp" id="notelp" required></td>
	</tr>
	</tr>
	<tr>
		<td><label for="pekerjaan">Pekerjaan :</label></td>
		<td><input type="text" name="pekerjaan" id="pekerjaan" required></td>
	</tr>
	<tr>
		<td><label for="gambar">Berkas :</label></td>
		<td><input type="file" name="gambar"></td>
	</tr>
	<tr><tr>
	<tr>
		<td><button type="submit" name="submit">Kirim Pengajuan :</button></td>
	</tr>
	</table>
	</form>
</div>
</body>
</html>