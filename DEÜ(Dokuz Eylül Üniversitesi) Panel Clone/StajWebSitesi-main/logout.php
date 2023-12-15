<?php
session_start();
ob_start();
$_SESSION = array();
session_unset();
session_destroy();

header('location:login.php');


exit();



?>