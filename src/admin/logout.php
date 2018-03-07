<?php
session_start ();
$_SESSION ['canAccess'] = false;
header('Location: login.php');
exit;
?>