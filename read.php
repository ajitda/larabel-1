<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/18/2016
 * Time: 4:53 PM
 */

require_once "connection.php";

//$st = $db->query("SELECT * FROM users");
//$data = $st->fetchAll(PDO::FETCH_ASSOC);
//foreach($data as $row)
//echo $row['username'].'<br>';
//echo '<br>';
//conditional query
$username = 'ajit';
$password = '123';
$st = $db->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
$st->bindValue('username', $username, PDO::PARAM_STR );
$st->bindValue('password', $password, PDO::PARAM_STR );
$res = $st->execute();
var_dump($res);