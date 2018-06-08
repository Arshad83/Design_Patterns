<?php 
 
require_once('AnimalFeeder.php'); 
require_once('AnimalFeederProxy.php'); 
 
 
require_once('AnimalFeeders/Cat.php'); 
$felix = new \IcyApril\PetShop\AnimalFeederProxy('Cat', 'Felix'); 
echo $felix->displayFood(1); 
echo PHP_EOL; 
echo $felix->dropFood(1, true); 
echo PHP_EOL; 
 
require_once('AnimalFeeders/Dog.php'); 
$brian = new \IcyApril\PetShop\AnimalFeederProxy('Dog', 'Brian'); 
echo $brian->displayFood(1); 
echo PHP_EOL; 
echo $brian->dropFood(1, true);
