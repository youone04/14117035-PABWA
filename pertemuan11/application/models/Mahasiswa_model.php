<?php
class Mahasiswa_model extends CI_model{

	public function getAllMahasiswa()
	{
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		return $this->db->get("user")->result_array();
		
	}

}
 ?>
