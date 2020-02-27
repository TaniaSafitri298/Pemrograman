<?php
include('koneksi.php');
$tampil_kategori = mysql_query('select * from t_kategori');
?>
<body bgcolor="#FFFF00">
	<h2 align="center">UAS PEMROGRAMAN</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_kategori.php">Input Kategori</li></a>
		</ul>
	<tr>
		<td>Id Kategori</td>
		<td>Nama Kategori</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_kategori)) { ?>
	<tr>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Menu Utama</li></a>
</ul>