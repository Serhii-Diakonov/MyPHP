<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<html>
<body>
<?php
    require_once 'connection.php';

    if (count($_POST)>0) {
        $query= "SELECT * FROM users WHERE login='".$_POST['login']."'";
        $res = mysqli_query ($conn, $query);
        $row = mysqli_fetch_array($res);
        if (is_array($row)){
            echo "<h1>The login has already existed! <a href=\"reg.php\">Try</a> another one!</h1>";
        } else {
            $f_name="'".$_POST['firstname']."'";
            $l_name="'".$_POST['lastname']."'";
            $login="'".$_POST['login']."'";
            $password="'".$_POST['password']."'";
            $role="'".$_POST['role']."'";
            $query="INSERT INTO users (first_name, last_name, login, password, id_role) VALUES ($f_name, $l_name, $login, $password, $role)";
            $res=mysqli_query($conn, $query);
            if($res)echo "<h1>Your data was added! Try to <a href=\"login.php\">login</a></h1>";
            else echo "<h1>Ooops, something went wrong</h1>";
        }
    }
?>
</body>
</html>