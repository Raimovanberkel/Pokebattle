<?php
	class Weakness {

		private $multiplier;
		private $energyType;

		public function __construct($energyType, $multiplier)
		{
			$this->energyType = $energyType;
			$this->multiplier = $multiplier;
		}

		public function GetMultiplier() {
			return $this->multiplier;
		}

		public function GetEnergytype(){
			return $this->energyType;

		}

	}
