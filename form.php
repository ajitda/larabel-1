<?php
session_start();
if(!empty($_SESSION['email'])){header('Location: ../larabel-1/user.php');}

if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    //$_SESSION['email'] = $email;
    
    //database connect
   // echo 'User Email : '.$email .'and password'.sha1($password);
    //die();
    $file = $_FILES['file_name'];
    //die(var_dump($file));
    move_uploaded_file($file['tmp_name'], "../larabel-1/".$file['name']);
    //header('Location: ../larabel-1/user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP FOrm</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="email" name="email" placeholder="type your email">
        <input type="password" name="password" placeholder="type your password">
        <input type="file" name="file_name">
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>