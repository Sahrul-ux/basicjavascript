<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bpr");

function query($query){
	global $conn ;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}	
function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data['nama']);
	$alamat = htmlspecialchars($data['alamat']);
	$notelp = htmlspecialchars($data['notelp']);
	$email = htmlspecialchars($data['email']);
	$pekerjaan = htmlspecialchars($data['pekerjaan']);
	
	//upload gambar dulu
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	$query = "INSERT INTO tabungan VALUES
	('', '$nama', '$alamat', '$notelp', '$email', '$pekerjaan', '$gambar') ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukurnFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4 ){
		echo "<script>
					alert('pilih gambar terlebih dahulu!');
				</script>";
		return false;
	}
	
	//cek yang diupload gambar atau bukan
	$ekstensiGambarValid = ['pdf'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower (end($ekstensiGambar));
	if (!in_array( $ekstensiGambar, $ekstensiGambarValid ) ){
		echo "<script>
					alert('yang anda upload bukan File PDF!');
				</script>";
		return false;
		
	}
	
	//cek ukuran terlalu besar
	if($ukurnFile > 1000000){
		echo "<script>
					alert('ukuran fILE terlalu besar!');
				</script>";
		return false;
	}
	
	//lolos pengecekan gambar diupload
	//generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	
	move_uploaded_file($tmpName, 'gambartabungan/'.$namaFileBaru);
	
	return $namaFileBaru;
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tabungan WHERE id = $id");
	return mysqli_affected_rows($conn);

}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data['nama']);
	$alamat = htmlspecialchars($data['alamat']);
	$notelp = htmlspecialchars($data['notelp']);
	$email = htmlspecialchars($data['email']);
	$pekerjaan = htmlspecialchars($data['pekerjaan']);
	$gambar = htmlspecialchars($data['gambar']);

$query = "UPDATE tabungan SET
	nama = '$nama',
	alamat = '$alamat',
	notelp = '$notelp',
	email = '$email',
	pekerjaan = '$pekerjaan',
	gambar = '$gambar'
	WHERE id = $id	
	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function cari($keyword){
	$query = "SELECT * FROM tabungan
				WHERE
			nama LIKE '%$keyword%' OR
			alamat LIKE '%$keyword%' OR
			notelp LIKE '%$keyword%' OR
			email LIKE '%$keyword%' OR
			pekerjaan LIKE '%$keyword%'
			";
	return query($query);
}
?>