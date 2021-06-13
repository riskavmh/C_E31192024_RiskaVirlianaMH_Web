<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); //melindungi script agar tidak dapat diakses sembarangan sehingga hanya bisa diakses melalui ".../namacontroller"
	class Mahasiswa extends CI_Controller { //
		function __construct(){ //fungsi yang dijalankan pertama kali atau secara otomatis saat program dijalankan
			parent::__construct(); //untuk menjalankan fungsi
			$this->load->model('Mahasiswa_model'); //menjalankan file model
		}
		public function index(){ //fungsi index atau fungsi yang dijalankan paling utama
			$data['user'] = $this->Mahasiswa_model->getAll()->result(); //deklarasi variable data dengan nama array user, kemudian variable tersebut memanggil file model dengan fungsi getAll dan menampilkan kolom-kolom database
			$this->template->views('crud/home_mahasiswa',$data); //memanggil template pada library dan isi dari contentnya dipanggil dari folder crud dengan nama file home_mahasiswa
		}
		public function tambah(){ //fungsi untuk meamnggil tampilan view
			$this->template->views('crud/tambah_mahasiswa'); //meamnggil template dan menampilkan view dari folder crud dan tambah_mahasiswa
		}
		public function input(){ //fungsi untuk menambahkan data ke dalam database
			$username = $this->input->post('username'); //untuk memasukkan data username
			$password = $this->input->post('pass'); //untuk memasukkan data password
			$nama = $this->input->post('nama'); //untuk memasukkan data nama
			$grup = $this->input->post('grup'); //untuk memasukkan data grup

			$data = array( //merupakan inisialisasi variable untuk deklarasi array
				'username' => $username, //array username berisikan variable username
				'password' => $password, //array password berisikan var password
				'nama' => $nama, //array nama berisi var nama
				'grup' => $grup //array grup berisikan variabel grup
			);
			$this->Mahasiswa_model->input_data($data,'tm_user'); //memnanggil file model dengan fungsi input_data dan meload data terlebih dulu kemudian tabel tm_user
			redirect('Mahasiswa/index'); //untuk beralih ke halaman lain yaitu menuju file controller Mahasiswa dan memanggil fungsi index
		}
	}
?>