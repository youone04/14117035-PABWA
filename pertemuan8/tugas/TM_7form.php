<!DOCTYPE html>
<html>
<head>
	<title>form data</title>
</head>
<body>

	<h1>FORM DATA MAHASISWA</h1>
	<form method="post" action="TM_7hasil.php">
		<ul>
			<li>
		    <label>Nama :</label>
		    <input type="text" name="nama" required>
			</li>

			<li>
				<label>Alamat : </label>
				<input type="text" name="alamat">
			</li>

			<li>
				<label>Jenis kelamin : </label>
				<input type="radio" name="jk" value="laki-laki"> laki-laki 
				<input type="radio" name="jk" value="perempuan"> perempuan <br>
			</li>

			<li>
				<label>Golongan Darah : </label>
				<select name="gd">
					<option value="A">A</option>
					<option value="AB">AB</option>
					<option value="B">B</option>
					<option value="O">O</option>
				</select>
			</li>

			<li>
				<label>Hoby :</label>
				<input type="checkbox" name="hobi" value="futsal"> futsal
				<input type="checkbox" name="hobi" value="sepak bola"> sepak bola
				<input type="checkbox" name="hobi" value="basket"> basket
			</li>

			<li>
				<label>Keterangan : </label> <br>
				<textarea name="area"></textarea>
			</li>
			<button type="submit" name="submit">SIMPAN</button>
		</ul>
		
	</form>

</body>
</html>