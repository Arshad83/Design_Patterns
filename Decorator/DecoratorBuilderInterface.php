<?php 
 
interface DecoratorBuilderInterface
{ 
  //public $size; 
  /* public $title; 
  public $author; 
  public $contents; 
  */
  public function __construct();
  
 
  public function getTitle(string $present): DecoratorBuilder;
  
  public function getAuthor(string $present): DecoratorBuilder;
  
  public function getContents(string $present): DecoratorBuilder;
   
 
  public function build():DecoratorBuilder;
  
} 
