<?php
if(isset($_POST["submit"])){
 $kolom=$_POST['kolom'];
 $cari=$_POST['cari'];

 $conn=mysqli_connect("localhost","root","");
 mysqli_select_db($conn,"pabw");
 $hasil=mysqli_query($conn,"select * from buku_tamu where
$kolom like '%$cari%'");

 $jumlah=mysqli_num_rows($hasil);
 echo "<br>";
 echo "Ditemukan: $jumlah";
 echo "<br>";

 while($baris=mysqli_fetch_array($hasil)){
 echo "Nama : ";
 echo $baris[0];
 echo "<br>";
 echo "Email : ";
 echo $baris[1];
 echo "<br>";
 echo "Komentar :";
 echo $baris[2];
}

}
?> 