<?php
include('koneksi.php');
//Laporan transaksi barang yang di kelompokkan per kategori
$laporan_transaksi="select ktg.id_kategori, ktg.nama_kategori, brg.nama_barang, qty, harga, qty*harga as total 
				from t_transaksi as trx inner join t_barang as brg on trx.id_barang=brg.id_barang
				inner join t_kategori as ktg on brg.kategori_id=ktg.id_kategori				
				inner join t_satuan as stn on brg.satuan_id=stn.id_satuan";

?>
<body bgcolor="#808000 ">
	<h2 align="center">UAS PEMROGRAMAN</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_transaksi.php">Input Transaksi</li></a>
		</ul>
	<tr>
		<td>Id Kategori</td>
		<td>Nama Kategori</td>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_transaksi)){ ?>
	<tr>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Menu Utama</li></a>
</ul>