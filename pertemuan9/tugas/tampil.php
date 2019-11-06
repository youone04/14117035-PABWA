<?php 	
include('database.php');
$koneksi = new database();
$data_barang = $koneksi->tampil_data("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>almat</th>
			<th>ID_jurusan</th>
			<th>FOTO</th>
			
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $row['NRP']; ?></td>
				<td><?php echo $row['Nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['ID_Jur']; ?></td>
				<td><?php echo $row['foto']; ?></td>
				<!-- <td>
					<a href="ubah.php?id=&action=ubah">Update</a>
					<a href="proses.php?id=&action=hapus">Delete</a> 
				</td> -->
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>