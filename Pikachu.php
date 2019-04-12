<?php
	class Pikachu extends Pokemon {
		
		public function __construct($name)
		{
			$this->energyType = new EnergyType('Lighting');
			$this->hitpoints = 60;
			$this->attacks = [new Attack('electricRing', 50), new Attack('pikaPunch', 20)];
			$this->weakness = new Weakness(new EnergyType('Fire'), 1.5);
			$this->resistance = new Resistance(new EnergyType('Fighting'), 20);
			parent::__construct($name);
		}
	}