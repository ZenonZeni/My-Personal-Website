<?php
require_once('sqli_connect.php');
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

//if($username == "admin" && $password == "password"){
	//echo "Successful Login";
//}
//else{
	//echo "ERROR";
//}

if(!empty($_POST["login"])) {
	//SQL Query Forming
	$sql = "Select * from Account where username = '" . $username . "'";
    $sql .= " AND userpassword = '" . $password . "';";
	//MYSQLI connection and sql statement execution
    $result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["username"] = $user["username"];
			$_SESSION["email"] = $user["email"];
			if(!empty($_POST["remember"])) {
				setcookie ("user_login", $username, time()+ (86400 * 30), "/");
				header('Location:home.php');
			} else {
				if(isset($_COOKIE["user_login"])) {
					setcookie("user_login"," ", time()- (86400 * 30), "/");
					$user = null;
				}
				echo "Sucessful Login";
				header('Location:home.php');
			}
	} else {
		echo "<center> Invalid Login - Redirecting to login Page in 5 Seconds <center><br>";
		header( "refresh:5;url=../login.php" );
	}
}
else{
	echo "connection error";
}
?>