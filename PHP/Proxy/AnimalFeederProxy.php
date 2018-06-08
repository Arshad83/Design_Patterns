<?php 
 
namespace IcyApril\PetShop; 
 
class AnimalFeederProxy 
{ 
  protected $instance; 
 
  public function __construct(string $feeder, string $name) 
  { 
     
    $class = __NAMESPACE__ . '\\AnimalFeeders\\' . $feeder; 
    $this->instance = new $class($name); 
  } 
 
  public function __call($name, $arguments) 
  { 
     /*  var_dump($name);
      var_dump($arguments);
      var_dump(call_user_func_array([$this->instance, $name], $arguments));
      die();*/
      
    return call_user_func_array([$this->instance, $name], $arguments); 
  } 
} 
