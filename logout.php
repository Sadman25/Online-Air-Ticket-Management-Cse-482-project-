
<?php 
session_start();
$_SESSION["userID"] = "";
session_destroy();
header("Location: login.html");
?>