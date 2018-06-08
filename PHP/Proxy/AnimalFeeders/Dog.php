<?php 
 
namespace IcyApril\PetShop\AnimalFeeders; 
 
//use IcyApril\PetShop\AnimalFeeder; 
// class Dog implements AnimalFeeder
class Dog
{ 
 
   
    public function __construct(string $petName) 
    { 
      if (strlen($petName) > 10) { 
        throw new \Exception('Name too long.'); 
      } 
   
      $this->petName = $petName; 
    } 
   
    public function dropFood(int $hungerLevel, bool $water = false): string 
    { 
      return $this->selectFood($hungerLevel) . ($water ? ' with water'.'</br>' : ''); 
    } 
   
    public function displayFood(int $hungerLevel): string 
    { 
      return $this->selectFood($hungerLevel); 
    } 
   
    protected function selectFood(int $hungerLevel): string 
    { 
      if ($hungerLevel == 3) { 
        return "chicken and vegetables".'</br>'; 
      } elseif (date('H') < 10) { 
        return "turkey and beef".'</br>'; 
      } else { 
        return "chicken and rice".'</br>'; 
      } 
    } 
  } 
  