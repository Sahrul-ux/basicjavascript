<?php
require 'functions.php';

//ambil data diURL
$id = $_GET ["id"];
//query data mahasisswa berdasarkan id
$mhs = query("SELECT * FROM tbtabungan WHERE id = $id")[0];




//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]) ) {
	
	//cek apakah data berhasil diUBAH atau tidak
	if( ubah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
			";
	}
}
?>
<DOCTYPE html>
<html>
<head>
		<title>Ubah Data Mahasiswa</title>
</head>
<body>

	<h1>Ubah Data Mahasiswa</h1>
    
	<form action="" method="post">
	<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required
			value="<?= $mhs["nama"]; ?>">
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat" id="alamat" required
			value="<?= $mhs["alamat"]; ?>">
		</li>
		<li>
			<label for="notelp">No.Telp :</label>
			<input type="text" name="notelp" id="notelp" required
			value="<?= $mhs["notelp"]; ?>">
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email" required
			value="<?= $mhs["email"]; ?>">
		</li>
		<li>
			<label for="pekerjaan">Pekerjaan :</label>
			<input type="text" name="pekerjaan" id="pekerjaan" required 
			value="<?= $mhs["pekerjaan"]; ?>">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" 
			value="<?= $mhs["gambar"]; ?>">
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data :</button>
		</li>
	</ul>
	</form>
</body>
</html>