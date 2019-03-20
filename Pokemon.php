<?php
	require 'Weakness.php';
	require 'Attack.php';
	require 'EnergyType.php';
	require 'Resistance.php';
	class Pokemon{
		public $name;
		public $energyType;
		public $hitpoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resistance;		

		
			public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance){
				$this->name = $name;
				$this->energyType = $energyType;
				$this->hitpoints = $hitpoints;
				$this->health = $hitpoints;
				$this->attacks = $attacks;
				$this->weakness = $weakness;
				$this->resistance = $resistance;
			}
			public function attack($attack, $target){
				$damage = $attack->damage;
				if (isset($target)) {
					$result = $target->health;
					print_r ('<h2>' . 'Player1 chooses ' . $target->name . '. ' . $target->name . ' has ' . $result . 'HP.' . '</h2>');
				}
				if ($target->weakness->energyType == $this->energyType) {
					$damage = $attack->damage * $target->weakness->multiplier;
				}elseif ($target->resistance->energyType == $this->energyType) {
					$damage = $attack->damage - $target->resistance->worth;
				}
				if (isset($damage)) {
					$result = $target->health - $damage;
					print_r ('<h2>' . 'After a attack by ' . $this->name . '\'s ' . $attack->name . '. ' . $target->name  . '\'s health is ' . $result . ' points.' . '</h2>');
				}
		}
	}