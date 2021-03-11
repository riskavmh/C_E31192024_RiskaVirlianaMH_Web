<?php
	class kendaraan {
		public $jenis;
		public $harga;
		public $tahun;
		public $second;

		function hargasecond() {
			$second = $this -> tahun;
			if ($second > 2010) {
				echo $this -> harga * 20/100;
			}
			elseif ($second >= 2005 and $second <= 2010){
				echo $this -> harga * 30/100;
			}
			else {
				echo $this -> harga * 40/100;     
			}
		}
	}

	$motor = new kendaraan;
	$mobil = new kendaraan;
	$truk = new kendaraan;

	echo $motor -> jenis = 'Motor';
	echo ' ini berharga Rp ';
	echo $motor -> harga = 20000000;
	echo ' dengan tahun pembuatan ';
	echo $motor -> tahun = 2006;
	echo ' harga secondnya turun menjadi Rp ';
	echo $motor -> hargasecond();
	echo "<br />";
	echo "<hr />";

	echo $mobil -> jenis = 'Mobil';
	echo ' ini berharga Rp ';
	echo $mobil -> harga = 100000000;
	echo ' dengan tahun pembuatan ';
	echo $mobil -> tahun = 2020;
	echo ' harga secondnya turun menjadi Rp ';
	echo $mobil -> hargasecond();
	echo "<br />";
	echo "<hr />";

	echo $truk -> jenis = 'Truk';
	echo ' ini berharga Rp ';
	echo $truk -> harga = 300000000;
	echo ' dengan tahun pembuatan ';
	echo $truk -> tahun = 2001;
	echo ' harga secondnya turun menjadi Rp ';
	echo $truk -> hargasecond();
	echo "<br />";
	echo "<hr />";
?>