<?php 
session_start();
session_unset();
session_destroy();
$_SESSION['tick'] = false;
header("Location: profile.php");

?>