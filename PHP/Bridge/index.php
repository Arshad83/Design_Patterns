<?php 
 
require_once('Transmitter.php'); 
require_once('Device.php'); 
require_once('Phone.php'); 
require_once('Tablet.php'); 
 
require_once('Messenger.php'); 
require_once('SMS.php'); 
require_once('InstantMessenger.php'); 
 
$phone = new Phone(); 
$phone->setSender(new SMS()); 
 
$phone->send("Hello there!"); 
