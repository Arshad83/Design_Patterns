<?php

 class MysqlConnection{
     private static $instance;
     public static function new($params){
        if(!isset(self::$instance)){
        self::$instance=new PDO(
            'mysql:host='.$params['host'].';dbname='.$params['dbName'],
            $params['username'],$params['password']
        );
    }
    return self::$instance;
     }

     private function __construct(){

     }
 }

 $params=array(
        'host'=>'127.0.0.1',
        'dbName'=>'designPatterns',
        'username'=>'root',
        'password'=>''
 );

 $conn=MysqlConnection::new($params);
 var_dump($conn);
 $conn=MysqlConnection::new($params);


 var_dump($conn);
