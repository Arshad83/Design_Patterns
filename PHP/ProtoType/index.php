<?php

require_once('Student.php'); 

$prototypeStudent = new Student(); 
$prototypeStudent->setName('Dave'); 
$prototypeStudent->setYear(2); 
$prototypeStudent->setGrade('A*'); 
 
var_dump($prototypeStudent); 

$theLesserChild = clone $prototypeStudent; 
$theLesserChild->setName('Mike'); 
$theLesserChild->setGrade('B'); 
 
var_dump($theLesserChild);

$theChildProdigy = clone $prototypeStudent; 
$theChildProdigy->setName('Bob'); 
$theChildProdigy->setYear(3); 
$theChildProdigy->setGrade('A'); 


$theChildProdigy->danceSkills = "Outstanding"; 
$theChildProdigy->dance = function (string $style) { 
  return "Dancing $style style."; 
}; 

var_dump($theChildProdigy); 
/* You'll notice that in fact, we've had to use an __invoke magic method to
 call the anonymous function. This method is called when a script tries to call an object as a function;
 it is vital when calling anonymous functions in classes variables.

This is due to the fact that PHP class properties and methods 
are both in separate namespaces; in order to execute closures 
that are in class variables you either need to use __invoke; 
first, assign it to a class variable, use call_user_func, or 
use the __call magic method. */

var_dump($theChildProdigy->dance->__invoke('Pogo')); 
