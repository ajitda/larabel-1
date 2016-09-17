<?php
require_once "connection.php";
//insert data into data base
$id = 12;
$username = 'juntu';
$password = '896';
$email = 'juntu@gmail.com';
//non secured way
//$db->exec("INSERT INTO users ( `id`, `username`, `password`, `email`) VALUES( '$id','$username', '$password', '$email')");

//$query = $db->prepare("INSERT INTO users ( `id`, `username`, `password`, `email`) VALUES( ?, ?, ?, ?)");
//$query ->execute([
//    $id, $username, $password, $email
//]);
//echo $db->lastInsertId();

//name placeholders
$PDOstatement = $db->prepare("INSERT INTO users ( `id`, `username`, `password`, `email`) VALUES( :id, :username, :password, :email)");
//$query ->execute([
//    ':id' => $id,
//    ':username' => $username,
//    ':password' => $password,
//    ':email' => $email,
//]);
$PDOstatement->bindValue('id', $id, PDO::PARAM_INT);
$PDOstatement->bindValue('username', $username, PDO::PARAM_STR);
$PDOstatement->bindValue('password', $password, PDO::PARAM_STR);
$PDOstatement->bindValue('email', $email, PDO::PARAM_STR);
$PDOstatement->execute();
echo $db->lastInsertId().'\n';