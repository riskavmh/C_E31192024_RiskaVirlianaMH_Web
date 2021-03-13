<?php
	class tablet {
		private $merk;
		private $camera;
		private $memory;

		private function merk()
		{
			return $this -> merk;
		}
		public function tampil_merk()
		{
			return 'Xiaomi';
		}

		private function camera()
		{
			return $this -> camera;
		}
		public function tampil_camera()
		{
			return '48MP';
		}
		
		private function memory()
		{
			return $this -> memory;
		}
		public function tampil_memory()
		{
			return '64GB';
		}
	}

	class handphone extends tablet {
		public $handphone_baru;

		private function handphone_baru()
		{
			return $this -> handphone_baru;
		}
		public function beli_handphone()
		{
			return 'Baru';
		}
	}

	$handphone1 = new handphone();
	
	echo '<b>Spesifikasi (Hak Akses Private)</b><br /><br />';
	echo 'Merk : ' . $handphone1 -> tampil_merk() . '<br />';
	echo 'Kamera : ' . $handphone1 -> tampil_camera() . '<br />';
	echo 'Memory : ' . $handphone1 -> tampil_memory() . '<br />';
	echo 'Kondisi : ' . $handphone1 -> beli_handphone() . '<br /><hr >';
	echo '<p>Hak akses yang digunakan pada program ini adalah private. Apabila properti atau method dideklarasikan sebagai private, maka kode program hanya bisa diakses oleh class itu sendiri.</p>';
	echo '<p>Dalam kasus program ini, untuk mengakses properti dengan hak akses private perlu membuat method private untuk mendeklarasikan propertinya dan method public untuk menampilkan nilai atau isinya.</p>';
?>