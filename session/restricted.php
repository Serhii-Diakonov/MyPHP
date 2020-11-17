<?php
    session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
        <link  rel="stylesheet" href="css/style.css" type="text/css">
        </head>
        <body>
            <?php
                $auth="<h1>Welcome, Admin!</h1><h2><a href=\"clear_session.php\">Log out</a></h2>";
                $not_auth="<h1>Ooops, something went wrong!</h1><h2><a href=\"login.php\">Try again</a></h2>";
                if($_SESSION["auth"]===true){
                  echo $auth;  
                } else
                 echo $not_auth;
            ?>
        </body>
    </html>