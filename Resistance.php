<?php
	class Resistance{
		public $energyType;
		public $worth = 0;
		
		public function __construct($energyType, $worth){
			$this->energyType = $energyType;
			$this->worth = $worth;
		}
	}
