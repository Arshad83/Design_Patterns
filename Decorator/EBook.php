<?php 
 
class EBook implements Book 
{ 
 
  public $title; 
  public $author; 
  public $contents; 
 
 // public function __construct(string $title, string $author, string $contents) 
 public function __construct(DecoratorBuilder $decorator) 
  { 
    $this->title = $decorator->title; 
    $this->author = $decorator->author; 
    $this->contents = $decorator->contents; 
  } 
 
  public function getTitle(): string 
  { 
    return $this->title; 
  } 
 
  public function getAuthor(): string 
  { 
    return $this->author; 
  } 
 
  public function getContents(): string 
  { 
    return $this->contents; 
  } 
} 
