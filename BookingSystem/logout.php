<?php
session_start();
if($_SESSION["member_id"]== null){
	header('location:../login.php');
}else{
	session_destroy();
	header('location:../login.php');
}
?>
