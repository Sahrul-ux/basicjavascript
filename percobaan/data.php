<?php
	include 'db.php';
?>
<DOCTYPE html>
<html>
<head>
	<title>Halaman Data</title>
</head>
<body>
	<h2>Data Gambar</h2>
	<a href= "index.php">Tambah</a>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Gambar</td>
			<td>Aksi</td>
		</tr>
		<?php
		$query = mysqli_query($conn, "SELECT * FROM tb_admin");
		while($row = mysqli_fetch_array($query)){
		?>	
		<tr>
			<td><?php echo $row ['id'] ?></td>
			<td><?php echo $row ['nama'] ?></td>
			<td><img src="uploads/<?php echo $row ['file'] ?>" width="100px" height="100px"></td>
			<td>
				<a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $row['id'] ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>