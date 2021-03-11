<?php
	class makanan {
		public $nama = 'bakso';
		public $rasa = 'asin';
		public $lokasi = 'warung kaki lima atau depot pinggir jalan';
		public $tekstur = 'kenyal';
		public $harga = '10000';

		public function kenyang () {
			return "Makanan ini bernama " . $this -> nama . " dengan rasa yang dominan " . $this -> rasa . " dan  " . $this -> tekstur . ". makanan ini dapat dibeli di " . $this -> lokasi . " dengan harga " . $this -> harga . ". <b>Makanan ini membuat perut kenyang.</b>";
		}
		public function enak() {
			return "Makanan ini bernama " . $this -> nama . " dengan rasa yang dominan " . $this -> rasa . " dan teksturnya" . $this -> tekstur . ". makanan ini dapat dibeli di " . $this -> lokasi . " dengan harga " . $this -> harga . ". <b>Makanan ini rasanya enak.</b>";
		}
		public function beli_lagi() {
			return "Makanan ini bernama " . $this -> nama . " dengan rasa yang dominan " . $this -> rasa . " dan teksturnya" . $this -> tekstur . ". makanan ini dapat dibeli di " . $this -> lokasi . " dengan harga " . $this -> harga . ". <b>Makanan ini wajib dibeli lagi.</b>";
		}
	}

	$bakso = new makanan;

	echo $bakso -> kenyang();
	echo "<br />";
	echo "<hr />";
	echo $bakso -> enak();
	echo "<br />";
	echo "<hr />";
	echo $bakso -> beli_lagi();
	echo "<br />";
	echo "<hr />";
?>