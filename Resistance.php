<?php
	class Resistance {

		private $energyType;
		private $worth;
	
		public function __construct($energyType, $worth)
		{
			$this->energyType = $energyType;
			$this->worth = $worth;
		}

		public function GetEnergytype() {
			return $this->energyType;
		}

		public function GetWorth() {
			return $this->worth;
		}
	}
