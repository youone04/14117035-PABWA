<?php 
	if(isset($_POST["submit"])){
		$nilai = $_POST["nilai"];

	}

	function faktorial ($nilai){
		if($nilai == 0 or $nilai == 1){
			return  $nilai;
		}else{
			return faktorial($nilai-1)*$nilai;
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>faktorial</title>
</head>
<body>

	<form method="post" >
		<input type="text" name="nilai" placeholder="masukan nilai...">
		<button type="submit" name="submit">OK</button>
		
	</form>
	<br><br>

	<?php 
	global $nilai;

	if($nilai == NULL){
		echo "anda belum memasukan nilai";
	}else{

		echo "hasil faktorial dari nilai ".$nilai." adalah = ".
		faktorial($nilai);
	}
	 ?>

</body>
</html>