<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Vasia";
echo "Session variables are set.";
?>
</body>
</html>
