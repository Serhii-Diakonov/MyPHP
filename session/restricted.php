<?php
    session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
        <link  rel="stylesheet" href="style.css" type="text/css">
        </head>
        <body>
            <?php
                if($_SESSION["auth"]==true){
                  echo "<h1>Welcome, ".$_SESSION['firstname']."!</h1><h2><a href=\"clear_session.php\">Log out</a></h2>";  
                } else
                 echo "<h1>Ooops, something went wrong!</h1><h2><a href=\"login.php\">Try again</a> Maybe You need to <a href=\"reg.php\">register</a></h2>";
            ?>
        </body>
    </html>