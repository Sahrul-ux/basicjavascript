<!Nama File : sejarah_tampil.php>
<?php
include'php/koneksi.php';
?>
<link rel="stylesheet" href="css/tampilan.css" type="text/css"/>
<div id="content" align="center">
<h2>Sejarah<h2>
<table id="table" border="5px">
<tr>
<th width="5%">No</th>
<th width="20%" align="center">Judul</th>
<th width="80%" align="center">Isi Halaman</th>
<th colspan="1" width="20%">Fungsi</th>
<th colspan="1" width="20%">Gambar</th>
</tr>
<?php
$no=1;
$query="select * from tbsejarahsatu";
$sql=mysqli_query($connect, $query);
while($hasil=mysqli_fetch_array($sql)){
$judul=$hasil['judul'];
$isi=$hasil['isi'];
?>
<td align="center"><?php echo $no?></td>
<td><?php echo $judul?></td>
<td><?php echo $isi?></td>
<td width="10" align="center"><a href="index.php?page=sejarahedit&judul=<?php echo $judul?>">
<img src="gambar/image.png" width="20px" alt="edit"></a><br/>
</tr><?php }?>
</table>
<br>
<div>
