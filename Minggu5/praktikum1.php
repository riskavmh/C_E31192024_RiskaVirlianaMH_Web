<?php
	interface car {
		public function setModel($name);

		public function getModel();
	}

	class minicar implements car {
		private $model;

		public function setModel($name)
		{
			$this -> model = $name;
		}

		public function getModel()
		{
			return $this -> model;
		}
	}
?>