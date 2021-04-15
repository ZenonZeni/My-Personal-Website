<?php
//by:Christopher Nguyen | 216213332
//php file for login page

// Array with names and password
$accounts = array(
  array("Anna","Password123!"),
  array("Guest","Password@"),
  array("admin","Password!"),
  array("zenon@my.yorku.ca","Password!"),
  array("zenonzeni@gmail.com","Password!"),
  array("ZenonZeni","Password!"),
  array("random","123PHx!")
);

if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {

    $username = $_POST["username"];

    $password = $_POST["password"];

    $passwordErr = "";

    //Check if password is valid with atleast 6 characters with 1 UpperCase and 1 Lowercase
    if (strlen($_POST["password"]) < 6) {
        $passwordErr = "and Your Password Must Contain At Least 6 Characters!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "and Your Password Must Contain At Least 1 Uppercase Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "and Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif(!preg_match('@[^\w]@', $password)){
        $passwordErr = "and Your Password Must Contain At Least one Special Character!";
    }

    $password = $_POST["password"];

    $validUserName = false;

    $validPassWord = false;


    //checks if account username & password match each other in Arrays
    for($i = 0; $i < count($accounts); $i++) {
      if ($accounts[$i][0] == $username) {
            $validUserName = true;
            if ($accounts[$i][1] == $password && $passwordErr == "") {
                  $validPassWord = true;
            }
      }
    }


    //Checks if login conditions are valid or not
    if($validUserName && $validPassWord){
        echo json_encode(array('success' => 1));
    }
    else if($validUserName == false){
      echo json_encode(array('success' => 2));
    }
    else if($validPassWord == false){
      echo json_encode(array('success' => 3, 'passwordErr' => $passwordErr));
    }
    else if(isset($_POST['username']) && $_POST['username']){
      echo json_encode(array('success' => 4));
    }
    else{
      echo json_encode(array('success' => 0));
    }


}
else {
      if(isset($_POST['username']) && $_POST['username']){
        echo json_encode(array('success' => 4));
      }
      else{
        echo json_encode(array('success' => 0));
      }
}
?>
