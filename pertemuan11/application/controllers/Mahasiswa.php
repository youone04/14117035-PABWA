<?php 
	class Mahasiswa extends CI_Controller{
		public function index(){
			$data['judul']='Daftar Mahasiswa';

			// $this->load->database();//memanggil modul database

			$this->load->model('Mahasiswa_model');//load model ,harus diatas dari filenya
			$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();//file ini berada di "model"
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/index',$data);
			$this->load->view('templates/footer');
		}
	}


 ?>