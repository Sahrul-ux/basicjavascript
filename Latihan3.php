<?php
$mahasiswa = [
	[
		"nama" => "Bambang Gentolet",
		"nrp" => "01234567", 
		"email" => "bambangget@gmail.com",
		"jurusan" => "Arsitek",
		"gambar" => "gambar1.jpg"
	],
	[
		"nama" => "Aris Sutrisna",
		"nrp" => "01234568",
		"email" => "arissu@gmail.com",
		"jurusan" => "Pertanian",
		"gambar" => "gambar2.jpg"
	],
	[
		"nama" => "Joko Prayitno",
		"nrp" => "01234569",
		"email" => "jokopray@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "gambar3.jpg"
	],
	[
		"nama" => "Nana Pramana",
		"nrp" => "01234570",
		"email" => "nanapra@gmail.com",
		"jurusan" => "Teknik Otomotif",
		"gambar" => "gambar4.jpg"
	],
	[
		"nama" => "Eko Setiawan",
		"nrp" => "01234571",
		"email" => "ekoset@gmail.com",
		"jurusan" => "Agropologi",
		"gambar" => "gambar5.jpg"
	],
	[
		"nama" => "Banu Prayogo",
		"nrp" => "01234572",
		"email" => "banupra@gmail.com",
		"jurusan" => "Teknik Kimia",
		"gambar" => "gambar6.jpg"
	],
	[
		"nama" => "Arif Subhan",
		"nrp" => "01234573",
		"email" => "arifsub@gmail.com",
		"jurusan" => "Hukum",
		"gambar" => "gambar7.jpg"
	],
	[
		"nama" => "Andi Ahmad",
		"nrp" => "01234574",
		"email" => "andiahm@gmail.com",
		"jurusan" => "Arsitek",
		"gambar" => "gambar8.jpg"
	],
	[
		"nama" => "Kamal Hasan",
		"nrp" => "01234575",
		"email" => "kamalhas@gmail.com",
		"jurusan" => "Pendidikan",
		"gambar" => "gambar9.jpg"
	],
	[
		"nama" => "Andri Kurniawan",
		"nrp" => "01234576",
		"email" => "andrikur@gmail.com",
		"jurusan" => "Psikologi",
		"gambar" => "gambar10.jpg"	
	];

?>
<DOCTYPE html>
<html>
<head>
		<title>GET</title>
</head>
<body>
		<h1>Daftar Mahasiswa</h1>
		
		<?php foreach($mahasiswa as $mhs) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		
		</ul>
		<?php endforeach; ?>
</body>
</html>

