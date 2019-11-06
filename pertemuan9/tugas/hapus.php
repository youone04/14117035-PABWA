<!DOCTYPE html>
<html>
<head>
<title>Hapus Data</title>
</head>

<body>
<h1>Hapus Data </h1>
        <?php
            $del=$_POST['NRP'];
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"Mahasiswa");
            
            $sqlstr="Delete from mahasiswa where NRP='$del'";
            $hasil=mysqli_query($conn,$sqlstr) or die(mysqli_error());
            echo "<h2>Data dengan NRP : $del Sudah berhasil dihapus/tidak ada didalam daftar </h2>";
        ?>
        <a href="tambah.php">Return to Home</a>
</body>
</html>