<?php

// menyimpan data kedalam variabel
if(isset($_POST['submit'])){
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
echo "<br>";

echo "
	<ul>
		<li>
		Nim : ".$nim."<br>
		</li>

		<li>
		Nama : ".$nama."
		</li>

		<li>
		jurusan : ".$jurusan."
		</li>

		<li>
		jenis kelamin : ".$jenis_kelamin."
		</li>

		<li>
		alamat : ".$alamat."
		</li>
	</ul>";
}
?>
