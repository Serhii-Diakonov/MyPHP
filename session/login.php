<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <link  rel="stylesheet" href="css/style.css" type="text/css">
        </head>
        <body>
            <h1>Welcome! Please, log in</h1>
            <form method="post" action="auth.php">
                <input type="text" name="login" required placeholder="Login"><br>
                <input id="field_2" type="password" name="password" required placeholder="Password"><br>
                <input id="button" type="submit">
            </form>
        </body>
    </html>