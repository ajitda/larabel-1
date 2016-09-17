<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/15/2016
 * Time: 9:41 PM
 */
$dsn = 'mysql:host=localhost;dbname=ajlarabel';
$username = 'root';
$password = 'ajit';
//connect database connection
try{
    $db = new PDO($dsn, $username, $password );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connection established......<br>';
}catch (PDOException $e){
    echo $e->getMessage();
}
//select query
try{
    $data = $db->query('SELECT * FROM users');
    $rests = $data->fetchAll();
    foreach($rests as $rest) {
        echo $rest['username'] . ' ' . $rest['password'];
        echo '<br>';
    }

}catch (PDOException $e){
    echo $e->getMessage();
}
