<?php  
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

	$pikachu = new Pikachu('John');
	$charmeleon = new Charmeleon('Doe');
	
	$pikachu->attack($pikachu->attacks[0], $charmeleon);
	$charmeleon->attack($charmeleon->attacks[1], $pikachu);
