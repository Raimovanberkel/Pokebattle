<?php
	class Attack {

		private $damage;
		private $name;

		public function __construct($name, $damage)
		{
			$this->name = $name;
			$this->damage = $damage;
		}

		public function GetDamage(){
			return $this->damage;
		}

		public function GetAttackName(){
			return $this->damage;
		}


	}
