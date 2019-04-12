<?php
	class Charmeleon extends Pokemon {	
		
		public function __construct($name)
		{
			$this->energyType = new EnergyType('Fire');
			$this->hitpoints = 60;
			$this->attacks = [new Attack('headButt', 10), new Attack('Flare', 30)];
			$this->weakness = new Weakness(new EnergyType('Water'), 2);
			$this->resistance = new Resistance(new EnergyType('Lighting'), 10);
			parent::__construct($name);
		}
	}