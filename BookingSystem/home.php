<?php
session_start();

if(!isset($_SESSION["username"])OR trim( $_SESSION["username"] ) == ""){
	header('location:../login.php');
}

?>

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
			
			<script type="text/javascript">
				function openNav() {
					document.getElementById("mySidepanel").style.width = "300px";
				}
				function closeNav() {
					document.getElementById("mySidepanel").style.width = "0px";
				}
			</script>
			
			<link rel="icon" href="My-Personal-Website/Images/favicon.png">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
			<title> Booking Home </title>
			<link rel="icon" href="../Images/favicon.png">
			<link rel="stylesheet" href="../Css/default.css">
			<link rel="stylesheet" href="../Css/bottom.css">
			<link rel="stylesheet" href="../Css/nav.css">
			<link rel="stylesheet" href="../Css/slidingmenu.css">
			<link rel="stylesheet" href="../Css/page.css">
			<link rel="stylesheet" href="../Css/scroll.css">
			<link rel="icon" href="../Images/favicon.png">
			
			<style>
				body{
					background-color: white;
				}
				p{
					color:black;
				}
			</style>
</head>
<body>
<div class="page">

			<div id="mySidepanel">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="" disabled>Home</a>
				<form action="logout.php" method="POST" id="logout">
				<a href="javascript:{}" onclick="document.getElementById('logout').submit(); return false;">LogOut</a>
				</form>
			</div>

			<ul class="customnav">
				<li><button class="openbtn" onclick="openNav()"> <!--&#8801; I removed a symbol remove comment to add it again--> Menu</button> </li>
				<li><button class="navButtons" style="color:white;" onclick="document.location='../index.html'" disabled> Home </button> </li>
				<div>
				<li style="float:right"> <form action="logout.php" method="POST"><button class="navButtons" type="submit" name="logout" value="logout">Logout</button></form></li>
				<li style="float:right"> <label class="navButtons" disabled href="#about"><?php echo $_SESSION["username"]; ?></label></li>
				</div>
			</ul>
			
			<div id="page2" style="padding-top:2.5%; padding-left:2.5%">
			
			<div>
				<?php
					echo '<center><p>Welcome ' . $_SESSION["username"] . ' the system does not have any booking interface or logic </p></center>';
				?>
			</div>

			</div>

</div>
</body>
</html>