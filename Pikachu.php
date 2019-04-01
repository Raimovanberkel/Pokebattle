<?php
	class Pikachu extends Pokemon {
		
		public function __construct($name)
		{
			$energyType = new EnergyType('Lighting');
			$hitpoints = 60;
			$attacks = [new Attack('electricRing', 50), new Attack('pikaPunch', 20)];
			$weakness = new Weakness(new EnergyType('Fire'), 1.5);
			$resistance = new Resistance(new EnergyType('Fighting'), 20);
			parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance);
		}
	}