<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_kategori="insert into t_kategori (id_kategori, nama_kategori)
	values('".$_POST['id_kategori']."',
			'".$_POST['nama_kategori']."')";
	$proses_input_kategori=mysql_query($query_input_kategori);
	if($proses_input_kategori){
		echo 'Input Data Berhasil';
	}else{
		echo mysql_error();
	}
}
?>
<body bgcolor="#000080">
	<h2 align="center">UAS PEMROGRAMAN</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="tampil_kategori.php">Tampil Kategori</li></a>
		</ul>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="id_kategori"></td>
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="nama_kategori"></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan"></td>
		</tr>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php"> Menu Utama</li></a>
</ul>
