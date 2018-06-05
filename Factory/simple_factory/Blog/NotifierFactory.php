<?php 
namespace My\App\Blog;
 
class NotifierFactory 
{ 
  public static function getNotifier($notifier, $to) 
  { 
 
    if (empty($notifier)) { 
      throw new Exception("No notifier passed."); 
    } 
 
    switch ($notifier) { 
      case 'SMS': 
        return new \My\App\Blog\SMS($to); 
        break; 
      case 'Email': 
        return new \My\App\Blog\Email($to, 'Junade'); 
        break; 
      default: 
        throw new Exception("Notifier invalid."); 
        break; 
    } 
  } 
} 
