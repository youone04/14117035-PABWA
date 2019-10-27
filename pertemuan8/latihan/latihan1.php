<?php 

	function tukar(&$nilai_x,&$nilai_y){

		$z = $nilai_x;
		$nilai_x = $nilai_y;
		$nilai_y= $z;
	}

	$x = 90;
	$y = 100;

	echo "nilai sebelum ditukar <br>";
	echo "nilai x : ".$x."<br>";
	echo "nilai y :".$y."<br>";

	echo "nilai setelah ditukar <br>";
	tukar($x,$y);
	echo "nilai x : ".$x."<br>";
	echo "nilai y :".$y."<br>";
 ?>