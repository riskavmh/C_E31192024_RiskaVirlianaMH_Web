<?php
	class Mahasiswa_model extends CI_Model {
		public function getAll(){ //fungsi dengan nama getAll yang nantinya dipanggil melalui controller Mahasiswa
			$this->db->select('*'); //data yang diambil dari database
			$this->db->from('tm_user'); //yang diambil pada tabel tm_user
			$this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup'); //menggabungkan kolom grup pada tabel tm_user dengan kolom dengan nama id_grup dari tabel tm_grup
			$query = $this->db->get(); //variable query dengan deklarasi untuk memanggil isi database tersebut
			return $query; //mengemblikan nilai dari variable query dan digunakan untuk menampilkan hasil dari variable query
		}
		function input_data($data,$table){ //fungsi dengan inisialisadi varible data dan table
			$this->db->insert($table,$data); //untuk memasukkan data yang telah diinputkan
		}

		function get_grup(){
			$this->db->select('*');
			$this->db->from('tm_grup');
			$query = $this->db->get();
			return $query;
		}

		function edit_data($data,$table) {
			return $this->db->get_where($table,$data);
		}

		function update_data($where,$data,$table) {
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function hapus_data($where,$table) {
			$this->db->where($where);
			$this->db->delete($table);
		}

		function login($user,$pass,$table){
			$this->db->select('*');
			$this->db->from('tm_user');
			$this->db->where('username',$user);
			$this->db->where('password',$pass);
			$query = $this->db->get();
			return $query;
		}
	}
?>