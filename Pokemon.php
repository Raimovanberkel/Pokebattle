<?php
	require 'Weakness.php';
	require 'Attack.php';
	require 'EnergyType.php';
	require 'Resistance.php';

	abstract class Pokemon { //so u can't say: $varname = new Pokemon();

		private $name;
		protected $energyType;
		protected $hitpoints;
		protected $health;
		protected $weakness;
		protected $resistance;	
		
			public function __construct($name)
			{
				$this->name = $name;
			}

			public function attack($attack, $target)
			{
				if (isset($attack)==false | isset($target)==false) {
					throw new Exception('Function attack cannot be invoked without $attack and $target arguments.');
					return false;
				}

				$damage = $attack->GetDamage();
				if (isset($target)) {
					$result = $this->hitpoints;
					print_r ('<h2>' . 'Player1 chooses ' . $target->name . '. ' . $target->name . ' has ' . $result . 'HP.' . '</h2>');
				}
				if ($target->weakness->GetEnergytype() == $target->resistance->GetEnergytype()) {
					$damage = $attack->GetDamage() * $target->weakness->GetMultiplier();

				}elseif ($target->resistance->GetEnergytype() == $this->energyType) {
					$damage = $attack->GetDamage() - $target->resistance->GetWorth();
				}
				if (isset($damage)) {
					$this->recieveDamage($attack, $target, $damage);
				}
			}

			private function recieveDamage($attack, $target, $damage)
			{
				print_r ('<h2>' . 'After a attack by ' . $this->name . '\'s ' . $attack->GetAttackName() . '. ' . $target->name  . '\'s health is ' . $damage . ' points.' . '</h2>');
			}		
	}