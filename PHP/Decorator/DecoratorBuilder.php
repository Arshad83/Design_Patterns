<?php 
 
class DecoratorBuilder implements DecoratorBuilderInterface
{ 
  //public $size; 
  public $title; 
  public $author; 
  public $contents; 
 
  public function __construct() 
  { 
    
  } 
 
  public function getTitle(string $present): DecoratorBuilder 
  { 
    $this->title = $present; 
    
    return $this; 
  } 
 
  public function getAuthor(string $present): DecoratorBuilder 
  { 
    $this->author = $present; 
    return $this; 
  } 
 
  public function getContents(string $present): DecoratorBuilder 
  { 
    $this->contents = $present; 
    return $this; 
  } 
 
  public function build():DecoratorBuilder 
  { 
    return $this; 
  } 
} 
