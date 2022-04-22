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
	$sql = "Select * from Account where username = '" . $username . "'";
        if(!isset($_COOKIE["member_login"])) {
            $sql .= " AND password = '" . md5($password) . "'";
	}
    $result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["member_id"] = $user["username"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
				echo "success";
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				echo "success";
				}
			}
	} else {
		echo "Invalid Login <br>";
	}
}
else{
	echo "connection error";
}
?>