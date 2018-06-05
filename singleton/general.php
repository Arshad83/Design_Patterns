<?php

 class MysqlConnection{
     public function __construct($params){

        $this->conn=new PDO(
            'mysql:host='.$params['host'].';dbname='.$params['dbName'],
            $params['username'],$params['password']
        );

     }
 }

 $params=array(
        'host'=>'127.0.0.1',
        'dbName'=>'designPatterns',
        'username'=>'root',
        'password'=>''
 );

 $conn=new MysqlConnection($params);
 var_dump($conn);
 $conn2=new MysqlConnection($params);
 var_dump($conn2);
