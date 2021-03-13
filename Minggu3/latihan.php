<?php
	class kalkulator {
		private $a;
		private $b;
		private $c;
	}

	class hitung extends kalkulator {
		public function tambah()
		{
			$hasil = $this -> a + $this -> b + $this -> c;
			return $hasil;
		}
		public function kurang()
		{
			$hasil = $this -> a - $this -> b - $this -> c;
			return $hasil;
		}
		public function bagi()
		{
			$hasil = $this -> a / $this -> b / $this -> c;
			return $hasil;
		}
		public function kali()
		{
			$hasil = $this -> a * $this -> b * $this -> c;
			return $hasil;
		}
	}

		$nilai1 = new hitung();
		$nilai2 = new hitung();
		$nilai3 = new hitung();
		$nilai4 = new hitung();

		$nilai1 -> a = '3';
		$nilai1 -> b = '6';
		$nilai1 -> c = '9';
		echo '<b>Penjumlahan</b> : ';
		echo $nilai1 -> a . ' + ' . $nilai1 -> b . ' + ' . $nilai1 -> c . ' = ';
		echo $nilai1 -> tambah();
		echo "<br />";
		echo "<hr />";

		$nilai2 -> a = '10';
		$nilai2 -> b = '2';
		$nilai2 -> c = '1';
		echo '<b>Pengurangan</b> : ';
		echo $nilai2 -> a . ' - ' . $nilai2 -> b . ' - ' . $nilai2 -> c . ' = ';
		echo $nilai2 -> kurang();
		echo "<br />";
		echo "<hr />";

		$nilai3 -> a = '500';
		$nilai3 -> b = '5';
		$nilai3 -> c = '2';
		echo '<b>Pembagian</b> : ';
		echo $nilai3 -> a . ' / ' . $nilai3 -> b . ' / ' . $nilai3 -> c . ' = ';
		echo $nilai3 -> bagi();
		echo "<br />";
		echo "<hr />";

		$nilai4 -> a = '4';
		$nilai4 -> b = '8';
		$nilai4 -> c = '7';
		echo '<b>Perkalian</b> : ';
		echo $nilai4 -> a . ' x ' . $nilai4 -> b . ' x ' . $nilai4 -> c . ' = ';
		echo $nilai4 -> kali();
		echo "<br />";
		echo "<hr />";

?>