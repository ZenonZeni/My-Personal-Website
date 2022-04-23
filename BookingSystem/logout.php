<?php
session_start();
$_SESSION = array();
$_POST = array();
header('location:../login.php');
?>
