<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/18/2016
 * Time: 10:40 PM
 */
require_once "connection.php";

$id = 11;
try{
    $st = $db->prepare('DELETE FROM users WHERE id=:id');
    $st->bindValue('id', $id, PDO::PARAM_INT);
    $res = $st->execute();
    echo 'Delete Successful';
}catch (PDOException $e){
    echo $e->getMessage();
}


