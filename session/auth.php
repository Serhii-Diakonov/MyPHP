<?php
    session_start();
    $login="admin";
    $password="1111";
    if($login==$_POST["login"]&&$password==$_POST["password"])$_SESSION["auth"]=true;
    else $_SESSION["auth"]=false;
    header('Location: restricted.php');
    exit;
?>