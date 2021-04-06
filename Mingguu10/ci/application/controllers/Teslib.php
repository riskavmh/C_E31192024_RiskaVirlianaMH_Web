<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Teslib extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('table');
			$this->load->model('Mahasiswa_model');
		}

		public function index(){
			$this->benchmark->mark('start');
			$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
			$this->load->view('view_teslib', $data);
			$this->benchmark->mark('end');

			echo 'Hasil benchmark mark elapsed_time : ' . $this->benchmark->elapsed_time('start', 'end') . '<br/>';
			echo 'Hasil benchmark mark memory_usage : ' . $this->benchmark->memory_usage('start', 'end') . '<br/><br/>';
		}
	}
?>