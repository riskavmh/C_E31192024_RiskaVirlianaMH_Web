<?php
	class kendaraan {
		public $jenis;
		public $roda;
		public $merk;
		public $bhnbkr;
		public $harga;
		public $tahun;

		public function subsidi() {
			return "mendapatkan subsidi BBM";
		}
		public function tidaksubsidi() {
			return "tidak mendapatkan subsidi BBM";
		}
	}

	$motor = new kendaraan;

	$motor -> jenis = 'motor';
	$motor -> roda = 'dua';
	$motor -> merk = 'honda';
	$motor -> bhnbkr = 'premium';
	$motor -> harga = '10000000';
	$motor -> tahun = '2004';

	echo 'Kendaraan ini berjenis '. $motor -> jenis . '. Kendaraan ini memiliki '. $motor -> roda . ' roda. Memiliki merk '. $motor -> merk . ' berbahan bakar '. $motor -> bhnbkr . '. Harga barunya adalah Rp ' . $motor -> harga . ' dengan tahun pembuatan ' . $motor -> tahun . '. Sehingga kendaraan ini ' . $motor -> subsidi() . '. <br /> <hr />';

	$motor -> jenis = 'motor';
	$motor -> roda = 'dua';
	$motor -> merk = 'honda';
	$motor -> bhnbkr = 'pertamax';
	$motor -> harga = '20000000';
	$motor -> tahun = '2019';

	echo 'Kendaraan ini berjenis '. $motor -> jenis . '. Kendaraan ini memiliki '. $motor -> roda . ' roda. Memiliki merk '. $motor -> merk . ' berbahan bakar '. $motor -> bhnbkr . '. Harga barunya adalah Rp ' . $motor -> harga . ' dengan tahun pembuatan ' . $motor -> tahun . '. Sehingga kendaraan ini ' . $motor -> tidaksubsidi() . '. <br /> <hr />';

?>