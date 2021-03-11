<?php
	 class laptop {
	 	public $pemilik;
	 	public $merk;

	 	public function hidupkan_laptop()
	 	{
	 		return "a. Hidupkan laptop " . $this -> merk . " punya " . $this -> pemilik;
	 	}
	 	public function matikan_laptop()
	 	{
	 		return "b. Matikan laptop " . $this -> merk . " punya " . $this -> pemilik;
	 	}
	 	public function restart_laptop()
	 	{
	 		return "c. Matikan laptop " . $this -> merk . " punya " . $this -> pemilik . ". Hidupkan laptop " . $this -> merk . " punya " . $this -> pemilik;
	 	}
	 }

	 $asus = new laptop();
	 $acer = new laptop();
	 $lenovo = new laptop();

	 $asus -> pemilik = 'A';
	 $asus -> merk = 'ASUS';
	 echo $asus -> hidupkan_laptop();
	 echo "<br />";
	 echo "<hr />";

	 $acer -> pemilik = 'B';
	 $acer -> merk = 'Acer';
	 echo $acer -> matikan_laptop();
	 echo "<br />";
	 echo "<hr />";

	 $lenovo -> pemilik = 'Lenovo';
	 $lenovo -> merk = 'C';
	 echo $lenovo -> restart_laptop();
	 echo "<br />";
	 echo "<hr />";
?>