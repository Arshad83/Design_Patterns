<?php 
 
class PrintBook implements Book 
{ 
 
  public $eBook; 
 
  //public function __construct(string $title, string $author, string $contents)
  public function __construct(DecoratorBuilder $decorator)  
  { 
    //$this->eBook = new EBook($title, $author, $contents); 
    $this->eBook = new EBook($decorator); 
  } 
 
  public function getTitle(): string 
  { 
    return $this->eBook->getTitle(); 
  } 
 
  public function getAuthor(): string 
  { 
    return $this->eBook->getAuthor(); 
  } 
 
  public function getContents(): string 
  { 
    return $this->eBook->getContents(); 
  } 
 
  public function getText(): string 
  { 
    $contents = $this->eBook->getTitle() . " by " . $this->eBook->getAuthor(); 
    $contents .= "\n"; 
    $contents .= $this->eBook->getContents(); 
 
    return $contents; 
  } 
} 
