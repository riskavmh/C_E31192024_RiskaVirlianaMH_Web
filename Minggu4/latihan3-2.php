<?php
	class tablet {
		protected $merk;
		protected $camera;
		protected $memory;

		protected function merk()
		{
			return $this -> merk;
		}
		public function tampil_merk()
		{
			return 'iPhone';
		}

		protected function camera()
		{
			return $this -> camera;
		}
		public function tampil_camera()
		{
			return '12MP';
		}
		
		protected function memory()
		{
			return $this -> memory;
		}
		public function tampil_memory()
		{
			return '32GB';
		}
	}

	class handphone extends tablet {
		protected $handphone_baru;

		protected function handphone_baru()
		{
			return $this -> handphone_baru;
		}
		public function beli_handphone()
		{
			return 'Second';
		}
	}

	$handphone1 = new handphone();
	
	echo '<b>Spesifikasi (Hak Akses Protected)</b><br /><br />';
	echo 'Merk : ' . $handphone1 -> tampil_merk() . '<br />';
	echo 'Kamera : ' . $handphone1 -> tampil_camera() . '<br />';
	echo 'Memory : ' . $handphone1 -> tampil_memory() . '<br />';
	echo 'Kondisi : ' . $handphone1 -> beli_handphone() . '<br /><hr >';
	echo '<p>Hak akses yang digunakan pada program ini adalah protected. Apabila properti atau method dideklarasikan sebagai protected, maka kode program tidak dapat diakses oleh kode di luar class, namun kode di dalam class atau turunan dari class tersebut bisa mengaksesnya.</p>';
	echo '<p>Dalam kasus program ini, untuk mengakses properti dengan hak akses protected perlu membuat method protected untuk mendeklarasikan propertinya dan method public untuk menampilkan nilai atau isinya.</p>';
?>