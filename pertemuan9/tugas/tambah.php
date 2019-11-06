<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Barang</h3>
<hr/>
<form method="post" action="proses.php?action=add">

<b>NRP	: </b><input type="text" name="NRP" size="20" maxlength="50"> <br>
            <b>Nama	: </b><input type="text" name="Nama" size="20"maxlength="50"> <br>
            <b>Alamat : </b><input type="text" name="alamat" size="20"maxlength="50"><br>
            <b>Jurusan : </b>
            <select name="ID_jur">
                <option value="TL">Telekomunikasi</option>
                <option value="IF">Teknik Informatika</option>
                <option value="EL">Teknik Elektro</option>
                <option value="SA">Sains Aktuaria</option>
            </select><br>
            
            <b>Foto : </b><input type="text" size="20" disabled="disabled">
            <input type="file" name="foto" accept="image/*"> <br>
            
            <input type="submit" value="Simpan" name="submit">
            <input type="reset" value="Reset">


             <h3>===============================<br>
        SEARCH DATA</h3>
        <form  action="cari.php" method="post">
        <b>Nama : </b><input type="text" name="nama" size="20" maxlength="50">
        <input type="submit" name="submit" value="Cari Data">
        </form>
       
        
        <h3>===============================<br>
        HAPUS DATA</h3>
        <form action="hapus.php" method="POST">
        <b>NRP : </b><input type="text" name="NRP" size="20" maxlength="50">
        <input type="submit" name="submit" value="Hapus">        
        </form>

</form>
</body>
</html>