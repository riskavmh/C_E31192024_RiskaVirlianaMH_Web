<?php
	
	include_once ('latihan1.php');
	include_once ('latihan2.php');

	$obj1 = new hitungLuasPersegi(4);
	$obj2 = new hitungLuasSegitiga(5,8);
	$obj3 = new hitungLuasLingkaran(10);

	echo 'Berikut adalah hasil dari perhitungan Luas Persegi dengan sisi 4cm : ';
	echo '<b>' . $obj1 -> hitungLuas() . 'cm<sup>2</sup></b><br />';
	echo 'Berikut adalah hasil dari perhitungan Luas Segitiga dengan alas 5cm dan tinggi 8cm : ';
	echo '<b>' . $obj2 -> hitungLuas() . 'cm<sup>2</sup></b><br />';
	echo 'Berikut adalah hasil dari perhitungan Luas Lingkaran dengan jari-jari 10cm : ';
	echo '<b>' . $obj3 -> hitungLuas() . 'cm<sup>2</sup></b>';
?>