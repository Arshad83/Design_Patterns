<?php 
 
require_once('Book.php'); 
require_once('EBook.php'); 
require_once('DecoratorBuilderInterface.php');
require_once('DecoratorBuilder.php');

 
//$PHPBook = new EBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents."); 
 
$decoratorRecipe = (new DecoratorBuilder()) 
  ->getTitle("Mastering PHP Design Patterns") 
  ->getContents("Junade Ali") 
  ->getAuthor( "Some contents.") 
  ->build(); 
$PHPBook = new EBook($decoratorRecipe);
require_once('PrintBook.php'); 
//$PHPBook = new PrintBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents."); 
$PHPBook = new PrintBook($decoratorRecipe);
echo $PHPBook->getText(); 
