<?php
$Nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

echo "Array belum terurut: <br><br>";
foreach ($Nama as $urut) :
    echo $urut;
    echo "<br>";
endforeach;

echo "<br>";
sort($Nama, SORT_STRING | SORT_FLAG_CASE);
echo "Array telah terurut: <br><br>";
foreach ($Nama as $urut) :
    echo $urut;
    echo "<br>";

endforeach;

?>