<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-B889QJFVCJ"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());
			gtag('config', 'G-B889QJFVCJ');
			</script>
			<link rel="icon" href="My-Personal-Website/Images/favicon.png">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
			<title> Login </title>
			<link rel="icon" href="Images/favicon.png">
</head>
<body>

<div id="title" style="padding-top:10%;">

<center> <h1>Booking System</h1> </center>
<center> <h2>Under Testing</h2> </center>

</div>

<div style="padding-left:25%; padding-right:25%;">
<form class="form-horizontal" action="LoginSystem/verifyLogin.php" method="POST">
  <div class="form-group">
    <label for="text">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group" style="padding-top:10px;">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="checkbox" style="padding-top:10px;">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>