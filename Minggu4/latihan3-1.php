<?php
	class tablet {
		public $merk;
		public $camera;
		public $memory;

		public function tampil_merk()
		{
			return $this -> merk;
		}
		public function tampil_camera()
		{
			return $this -> camera;
		}
		public function tampil_memory()
		{
			return $this -> memory;
		}
	}

	class handphone extends tablet {
		public $handphone_baru;

		public function beli_handphone()
		{
			return $this -> handphone_baru;
		}
	}

	$handphone1 = new handphone();
	
	$handphone1 -> merk = 'Samsung';
	$handphone1 -> camera = '48MP';
	$handphone1 -> memory = '64GB';
	$handphone1 -> handphone_baru = 'Baru';

	echo '<b>Spesifikasi (Hak Akses Public)</b><br /><br />';
	echo 'Merk : ' . $handphone1 -> tampil_merk() . '<br />';
	echo 'Kamera : ' . $handphone1 -> tampil_camera() . '<br />';
	echo 'Memory : ' . $handphone1 -> tampil_memory() . '<br />';
	echo 'Kondisi : ' . $handphone1 -> beli_handphone() . '<br /><hr >';
	echo '<p>Hak akses yang digunakan pada program ini adalah public. Apabila properti atau method dideklarasikan sebagai public, maka semua kode program dari luar class bisa dengan bebas mengaksesnya.</p>';

?>