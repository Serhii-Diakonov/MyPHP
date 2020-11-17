<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
if($_SESSION!=NULL)echo $_SESSION["name"];
else echo "Sessions are empty!";
?>
</body>
</html>
