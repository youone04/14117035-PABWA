<html>
<head>
	<title>Form HTML Pada PHP | JagoWebDev.com</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1>Form HTML Pada PHP</h1>
	<form action="h1.php" method="post">
		<div class="row">
			<label>Nama</label>
			<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
		</div>
		<div class="row">
			<label>Email</label>
			<input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
		</div>
		<div class="row">
			<label>Lokasi</label>
			<select name="area">
				<?php $options = array('Jakarta', 'Semarang', 'Surakarta', 'Yogyakarta', 'Surabaya');
				foreach ($options as $area) {
					$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
					echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
				}?>
			</select>
		</div>
		<div class="row">
			<label>Jenis Kelamin</label>
			<div class="options">
				<?php
				$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
				foreach ($jenis_kelamin as $kode => $detail) {
					$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
					echo '<label class="radio">
							<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
						</label>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<label>Skill</label>
			<div class="options">
				<?php 
				$program = array('PHP', 'MySQL', 'Javascript', 'HTML', 'CSS');
				foreach ($program as $skill) {
					$checked = isset($_POST['skill_' . $skill]) ? ' checked="checked"' : '';
					echo '<label class="checkbox">
							<input type="checkbox" name="skill_' . $skill . '"' . $checked . '>' . $skill . 
						'</label>';

				}


				?>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="PRINT"/>
		</div>
	</form>


</body>
</html>