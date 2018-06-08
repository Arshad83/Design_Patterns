<?php 
//namespace My\App;
 
interface NotifierFactory 
{ 
  public static function getNotifier($notifier, $to);
 
} 
