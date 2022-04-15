<?php
$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "password"){
	echo "Successful Login";
}
else{
	echo "ERROR";
}

?>