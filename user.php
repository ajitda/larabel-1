<?php
session_start();
if(empty($_SESSION['email'])){header('Location: ../larabel-1/form.php');}

    if(isset($_GET['action']) && $_GET['action'] == logout){
        unset($_SESSION);
        session_destroy();
        header('Location: ../larabel-1/form.php');
    }

echo 'logged in as '.$_SESSION['email'];

?>
<a href="?action=logout">Log Out</a>


