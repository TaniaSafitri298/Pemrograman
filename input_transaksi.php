<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_transaksi="insert into t_transaksi (id_barang, nama_barang, kategori_id, satuan_id)
	values('".$_POST['id_transaksi']."',
			'".$_POST['nama_transaksi']."',
			'".$_POST['tgl_transaksi']."',
			'".$_POST['harga']."',
			'".$_POST['qty']."',
			'".$_POST['id_barang']."')";
	$proses_input_transaksi=mysql_query($home,$save);
	if($proses_input_transaksi){
		echo 'Input Data Berhasil ';
	}else{
		echo mysql_error();
	}
}
?>
<body bgcolor="#00FF00">
	<h2 align="center">UAS PEMROGRAMAN</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="tampil_transaksi.php">Tampil Transaksi</li></a>
		</ul>
		<tr>
			<td>Id Transaksi</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama Transaksi</td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input type="date" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input type="number" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Id Barang</td>
			<td><input type="number" name="satuan_id"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save"></td>
		</tr>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Home Menu Utama</li></a>
</ul>
