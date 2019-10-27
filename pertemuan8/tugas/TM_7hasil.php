<?php

// menyimpan data kedalam variabel
if(isset($_POST['submit'])){

$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$gd        		= $_POST['gd'];
$jenis_kelamin  = $_POST['jk'];
$hobi			= $_POST['hobi'];
$area			= $_POST['area'];

// query SQL untuk insert data
echo "<br>";

echo "
	<ul>
		<li>
		Nama : ".$nama."<br>
		</li>

		<li>
		alamat : ".$alamat."
		</li>

		<li>
		jenis kelamin : ".$jenis_kelamin."
		</li>

		<li>
		Golongan darah : ".$gd."
		</li>

		<li>
		Hobi : ".$hobi."
		</li>

		<li>
		keterangan : ".$area."
		</li>
	</ul>";

}
echo "<script>
		window.print();
	  </script>";
?>