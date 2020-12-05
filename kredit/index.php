<?php
require 'functions.php';
$percobaansatu = query("SELECT * FROM percobaansatu ORDER BY id DESC");   
//tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$percobaansatu = cari($_POST["keyword"]);
}
?>
<DOCTYPE html>
<html>
<head>
		<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Pengajuan Kredit</h1>

<a href="tambah.php">Tambah Data Pengajuan</a>
<br><br>
<form action="" method="post">

	<input type="text" name="keyword" size="30" autofocus 
	placeholder="masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>

</form>


<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Berkas</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No.Telp</th>
		<th>Email</th>
		<th>Jumlah Pengajuan(Rp)</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $percobaansatu as $row ): ?>
	<tr>
		<td><?= $i ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>	|
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
				return confirm('yakin akan menghapus?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"</td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["notelp"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["pengajuan"]; ?></td>

	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
</body>
</html>