<?php
session_start ();

if ($_SESSION ['canAccess'] == false){
    header('Location: login.php');
    exit;
}

echo "<h1>Hola estamos en dashboard</h1>";
?>