<?php
	class Template {
		public $_ci; //deklarasi variable _ci
		function __construct() { //fungsi yang dijalankan otomatis pertama kali.
			$this->_ci = &get_instance(); //memanggil variable _ci dan get_instance digunakan agar file ini dapat diakses dari file controller/model/view
		}
		function views($template = NULL, $data = NULL) { //fungsi yang mendeklrasikan var template kosong dan var data kosong.
			if ($template != NULL) { //jika template tidak kosong maka..
				
				// Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
				// ['head'] data yang kita panggil dari file Template.php dari folder Admin/_Template/
				$data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, TRUE);

				// Bagian $data['topbar'] untuk memanggil file topbar.php dari folder Admin/_Template/
				// ['topbar'] data yang kita panggil dari file Template.php dari folder Admin/_Template/
				$data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, TRUE);

				// Bagian $data['sidebar'] untuk memanggil file sidebar.php dari folder Admin/_Template/
				// ['sidebar'] data yang kita panggil dari file Template.php dari folder Admin/_Template/
				$data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, TRUE);

				// ['isi'] data yang kita panggil dari file content.php dari folder Admin/_Template
				$data['isi'] = $this->_ci->load->view($template, $data, TRUE);

				// Bagian $data['content'] untuk memanggil file content.php dari folder Admin/_Template/
				// ['content'] data yang kita panggil dari file Template.php dari folder Admin/_Template/
				$data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, TRUE);
				//$data['content'] = $this->_ci->load->view('crud/home_mahasiswa', $data, TRUE);
				//$data['nambah'] = $this->_ci->load->view('crud/tambah_mahasiswa', $data, TRUE);

				// Bagian $data['footer'] untuk memanggil file footer.php dari folder Admin/_Template/
				// ['footer'] data yang kita panggil dari file Template.php dari folder Admin/_Template/
				$data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);

				// Bagian $data['template'] untuk menampilkan file template.php dari folder Admin/_Template/
				// view('Admin/_Template/Template', $data, TRUE); untuk memanggil $data diatas seperti $data['head'], dll
				echo $data['Template'] = $this->_ci->load->view('Admin/_Template/Template', $data, TRUE);

				//$this->_ci->load->view('crud/home_mahasiswa');
				//$this->_ci->load->view('crud/tambah_mahasiswa');
			}
		}
	}
?>