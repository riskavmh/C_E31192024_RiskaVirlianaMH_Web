<?php
	class itemproduk {
		public $ukuran;
		public $warna;
		public $nama;
		private $model;
		private $tipe;

		public function tampil_ukuran()
		{
			return $this -> ukuran;
		}
		public function tampil_warna()
		{
			return $this -> warna;
		}
		public function tampil_nama()
		{
			return $this -> nama;
		}
	}

	class topi extends itemproduk {
		
		public function tampil_model()
		{
			return $this -> model;
		}
	}

	class celana extends itemproduk {

		public function tampil_model()
		{
			return $this -> model;
		}
		public function tampil_tipe()
		{
			return $this -> tipe;
		}
	}

	class baju extends itemproduk {

		public function tampil_tipe()
		{
			return $this -> tipe;
		}
	}

	$topi1 = new topi;
	$celana1 = new celana;
	$baju1 = new baju;

	$topi1 -> ukuran = '10';
	$topi1 -> warna = 'Kuning';
	$topi1 -> nama = 'Topi 1';
	$topi1 -> model = 'Baseball';
	echo 'Ukuran : ';
	echo $topi1 -> tampil_ukuran();
	echo '<br />';
	echo 'Warna : ';
	echo $topi1 -> tampil_warna();
	echo '<br />';
	echo 'Nama : ';
	echo $topi1 -> tampil_nama();
	echo '<br />';
	echo 'Model : ';
	echo $topi1 -> tampil_model();
	echo '<br /><hr />';

	$celana1 -> ukuran = 'XL';
	$celana1 -> warna = 'Hitam';
	$celana1 -> nama = 'Celana 1';
	$celana1 -> tipe = 'Loose';
	$celana1 -> model = 'Kulot';
	echo 'Ukuran : ';
	echo $celana1 -> tampil_ukuran();
	echo '<br />';
	echo 'Warna : ';
	echo $celana1 -> tampil_warna();
	echo '<br />';
	echo 'Nama : ';
	echo $celana1 -> tampil_nama();
	echo '<br />';
	echo 'Tipe : ';
	echo $celana1 -> tampil_tipe();
	echo '<br />';
	echo 'Model : ';
	echo $celana1 -> tampil_model();
	echo '<br /><hr />';

	$baju1 -> ukuran = 'L';
	$baju1 -> warna = 'Coklat';
	$baju1 -> nama = 'Baju 1';
	$baju1 -> tipe = 'Kaos';
	echo 'Ukuran : ';
	echo $baju1 -> tampil_ukuran();
	echo '<br />';
	echo 'Warna : ';
	echo $baju1 -> tampil_warna();
	echo '<br />';
	echo 'Nama : ';
	echo $baju1 -> tampil_nama();
	echo '<br />';
	echo 'Model : ';
	echo $baju1 -> tampil_tipe();
	echo '<br /><hr />';
?>