<?php 

	function hitung($nama){
		$jumlah_karakter = strlen($nama);
		return $jumlah_karakter;
	}

	function warna($warnas = "red"){
		global $jumT;
		 echo '<font color="'.$warnas.'">'.$jumT.'</font> <br>';
	}

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>menghitung karakter</title>
</head>
<body>
	<h1>menghitung karakter</h1>

	<form method="post" action="">

	<label>nama : </label>
	<input type="text" name="nama" placeholder="masukan nama">

	<label>warna</label>
	<input type="text" name="warna" placeholder="masukan warna">

	<button type="submit" name="submit">hitung</button>
	</form>

	<br> <br>

	<?php 
	if(isset($_POST["submit"])){
		$nama = $_POST["nama"];
		$warna = $_POST["warna"];
		$jumlah = hitung($nama);
		

		if($jumlah <= 10){
			$jumT=$jumlah*300;
			echo "nama : ".$nama."<br>";
			echo "harga total : ";
			warna($warna);
		}
		elseif($jumlah > 10 and $jumlah <=20){
			$jumT=$jumlah*500;
			echo "nama : ".$nama."<br>";
			echo "harga total : ";
			warna($warna);

		}elseif($jumlah > 20){
			$jumT=$jumlah*700;
			echo "nama : ".$nama."<br>";
			echo "harga total : ";
			warna($warna);
		}

	}

	 ?>

	
</body>
</html>