<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/18/2016
 * Time: 10:04 PM
 */
require_once "connection.php";

$id = 8;
$username = 'selim';
$email = 'selim@gmail.com';

$st = $db->prepare('UPDATE users SET username=:username, email=:email WHERE id=:id');
$st->bindValue('username', $username, PDO::PARAM_STR);
$st->bindValue('email', $email, PDO::PARAM_STR);
$st->bindValue('id', $id, PDO::PARAM_INT);
$res = $st->execute();
var_dump($res);