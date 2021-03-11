<?php
	class buku {
		public $judul = 'Shopies World';
		public $pengarang = 'Jostein Gaarder';
		public $penerbit = 'Norwegian, Sofies Verden';
		public $tahun = '2008';
		public $cetakan = 'XIX';
	}

	$duniasophie = new buku();

	echo 'Judul : <b>';
	echo $duniasophie -> judul;
	echo '</b><br />';
	echo 'Pengarang : <b>';
	echo $duniasophie -> pengarang;
	echo '</b><br />';
	echo 'Penerbit : <b>';
	echo $duniasophie -> penerbit;
	echo '</b><br />';
	echo 'Tahun terbit : <b>';
	echo $duniasophie -> tahun;
	echo '</b><br />';
	echo 'Cetakan ke : <b>';
	echo $duniasophie -> cetakan;

?>