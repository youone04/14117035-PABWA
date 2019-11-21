<?php 
//note: untuk memanggil semua tampilan harus di controler, view hanya sebagai tempat dan untuk di panngil
	class Home extends CI_Controller{
		public function  index($nama='nama anda'){//mengambil/menangkap data yang dikirim dr url

			$data['judul'] = 'halaman Home';//untuk mengirim data judul ke halam view
			$data['nama'] = $nama;//$nama berisi data yang dikirim dr url

			$this->load->view('templates/header',$data);//$data dapat dari atas baris ke 6

			$this->load->view('home/index',$data);//data disini berasal dr atas baris ke 7
			//load disini untuk meload atau memproses dan view merupakan folder yang berisi semua tentenang tampilan, isi view nya dapat disesuaikan dengan nama filenya yang bereksistensi PHP,yang berada pada folder view
			// view('home/index') artinya memmanggil file index yang berada di foler home dan berada di folder view
			$this->load->view('templates/footer');
		}
	}

 ?>