<?php 
 
require_once('Pizza2.php'); 
require_once('PizzaBuilder.php'); 
 
$pizzaRecipe = (new PizzaBuilder(9)) 
  ->cheese(true) 
  ->pepperoni(true) 
  ->bacon(true) 
  ->build(); 
 
 
$order = new Pizza2($pizzaRecipe); 
echo $order->show(); 