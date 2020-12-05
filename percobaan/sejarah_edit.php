<!Nama File : sejarah_edit.php>
<link rel="stylesheet" href="css/tampilan.css" type="text/css"/>
<?php
include'php/koneksi.php';
if(isset($_GET['judul'])) {
	$judul = $_GET['judul'];
} else {
	die ("Eror. No Judul selected! ");
}
$query = "SELECT * FROM tblsejarah WHERE judul ='$judul'";
$sql = mysqli_query ($connect, $query);
$hasil = mysqli_fetch_array ($sql);
$judul = $hasil['judul'];
$isi = $hasil['isi'];
//proses edit
if (isset($_POST['Edit'])) {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	//update data
	$query = "UPDATE tblsejarah SET judul='$judul',isi='$isi'";
	$sql = mysqli_query($connect, $query);
	if ($sql) {
		echo "<h2><font color=blue>Data Sejarah berhasil diedit</font></h2>";
	}else {
		echo"<h2><font color=blue>Data Sejarah berhasil diedit</font></h2>";
	}
}
?>
<div id="content">
<center>
	<h2>Edit Data Sejarah</h2>
	<FORM Action="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">
			<td>Judul</td>
				<td><textarea name="judul" cols="100" rows="10"><?php echo $judul?></textarea></td>
			</tr>
			<tr>
			</tr>
			<td>Isi Sejarah</td>
				<td><textarea name="isi" cols="100" rows="10"><?php echo $isi?></textarea></td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;
				<input type="submit" name="Edit" value="Edit Data">&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</FORM>
</div>
		

			
		

