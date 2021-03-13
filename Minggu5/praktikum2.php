<?php
	include_once('praktikum1.php');

	$obj1 = new minicar;
	$obj2 = new minicar;
	$obj3 = new minicar;

	$obj1 -> setModel('multi-purpose vehicle');
	echo $obj1 -> getModel() . '<br />';

	$obj2 -> setModel('sedan');
	echo $obj2 -> getModel() . '<br />';

	$obj3 -> setModel('hatchback');
	echo $obj3 -> getModel();
?>