<?php 
	function bar($color = "black"){
		echo '<font color="'.$color.'">this is some text!</font> <br>';
	}
	bar();
	bar('red');
	bar('green');
	bar('blue');

 ?>