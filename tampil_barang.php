<?php
include('koneksi.php');
//INNER JOIN dengan t_satuan dan t_kategori
$query_barang=mysql_query('select brg.id_barang, brg.nama_barang, ktg.id_kategori, ktg.nama_kategori, 
				stu.id_satuan, stu.nama_satuan from t_barang as brg 
				inner join t_kategori as ktg on brg.kategori_id=ktg.id_kategori
				inner join t_satuan as stu on brg.satuan_id=stu.id_satuan');

				
?>
<body bgcolor="#808080">
	<h2 align="center">UAS PEMROGRAMAN</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_barang.php">Input Barang</li></a>
		</ul>
	<tr>
		<td>Id Barang</td>
		<td>Nama Barang</td>
		<td>Id Kategori</td>
		<td>Nama Kategori</td>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysql_fetch_array($query_barang)){ ?>

	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Menu Utama</li></a>
</ul>