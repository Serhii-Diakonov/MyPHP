<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<html>
    <body>
    <h1>Registration form</h1>
    <h2><a href="login.php">Log in</a></h2>
    <form method="post" action="sign_in.php">
    <input name="firstname" type="text" placeholder="First name" required><br>
    <input name="lastname" type="text" placeholder="Last name" required><br>
    <input name="login" type="text" placeholder="Login" required><br>
    <select name="role" required>
        <option value="1">1</option>
        <option value="2">2</option>
    </select><br>
    <input name="password" type="password" id="psw_1" placeholder="Password" required><br>
    <input type="submit" id="button">
    </form> 
   </body>
</html>