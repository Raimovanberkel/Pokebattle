<?php
	class Weakness{
		public $energyType;
		public $multiplier = 0;
		public function __construct($energyType, $multiplier){
			$this->energyType = $energyType;
			$this->multiplier = $multiplier;
		}
	}
