<?php
	include_once('praktikum3-1.php');

	class circle implements shape{
		private $radius;

		public function __construct($radius)
		{
			$this -> radius = $radius;
		}

		//calcArea calculates the area of circles
		public function calcArea()
		{
			return $this -> radius * $this -> radius * pi();
		}
	}
?>