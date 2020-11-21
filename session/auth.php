<?php

    require_once 'connection.php';
    
    session_start();
    $password="1111";
    $login="admin";

    if (count($_POST)>0) {
        $query= "SELECT * FROM users WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'";
        $res = mysqli_query ($conn, $query);
        $row = mysqli_fetch_array($res);
        if (is_array($row)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname']=$row['first_name'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['auth']=true;
        } else if($login==$_POST["login"] && $password==$_POST["password"]){
            $_SESSION["auth"]=true;
            $_SESSION["firstname"]=$_POST["login"];
        }
        else $_SESSION["auth"]=false;
    }
    header('Location: restricted.php');
    exit;
?>