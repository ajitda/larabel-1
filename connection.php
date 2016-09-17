<?php
$dsn = 'mysql:host=localhost; dbname=ajlarabel;charset=utf8';
    $username = 'root';
$password = 'ajit';
//connect to database
try{
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo'Connection Established .......<br/>';
}catch (PDOException $e){
    echo $e->getMessage();
}