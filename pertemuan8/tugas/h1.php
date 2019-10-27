<?php 
	if (isset($_POST['submit'])) {
		global $list_skill,$jenis_kelamin,$list_skil,$program;
		
		echo '<h1>Hasil Input</h1>';
		echo '<ul>';
		echo '<li>Nama: ' . $_POST['nama'] . '</li>';
		echo '<li>Email: ' . $_POST['email'] . '</li>';
		echo '<li>Lokasi: ' . $_POST['area'] . '</li>';
		echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
		
		$list_skill = array();
		foreach ($program as $skill) {
			if ( isset($_POST['skill_' . $skill]) )
			{
				$list_skill[] = $skill;
			}
		}

		echo '<li>Skill: ' . ($list_skill ? join($list_skill, ', ') : '-') . '</li>';
		echo '</ul>';
	}

	 ?>
	