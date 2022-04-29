<?php
session_start();
include('BookingClass.php');

if(!isset($_SESSION["username"]) && $_SESSION["privillege"] == "A" OR trim( $_SESSION["username"] ) == ""){
    header('location:../home.php');
}
else{
    $booking = new BookingClass($_SESSION["userID"],$_SESSION["username"]);
    $booking ->setPriv($_SESSION["privillege"]);
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
			<title> Booking </title>
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
				<a href="home.php">Home</a>
				<a href="booking.php">Booking</a>
				<?php if($_SESSION["privillege"] == "A"){echo "<a href=\"adminBooking.php\">adminBooking</a>"; } ?>
				<form action="logout.php" method="POST" id="logout">
				<a href="javascript:{}" onclick="document.getElementById('logout').submit(); return false;">LogOut</a>
				</form>
			</div>

			<ul class="customnav" style="height:7.5%;">
				<li><button class="openbtn" onclick="openNav()"> <!--&#8801; I removed a symbol remove comment to add it again--> Menu</button> </li>
				<li><button class="navButtons" style="color:white;" onclick="document.location='home.php'"> Home </button> </li>
				<li><button class="navButtons" style="color:white;" onclick="document.location='booking.php'"> Booking </button> </li>
				<?php if($_SESSION["privillege"] == "A"){echo "<li><button class=\"navButtons\" style=\"color:white;\" onclick=\"document.location='adminBooking.php'\"> AdminBooking </button> </li>";}?>
				<li style="float:right"> <form action="logout.php" method="POST"><button class="navButtons" type="submit" name="logout" value="logout">Logout</button></form></li>
				<li style="float:right"> <label class="navButtons" disabled href="#about"><?php echo $_SESSION["username"]; ?></label></li>
			</ul>
			
			<!--- Start Here for Content -->
			<div id="page2" style="padding-top:2.5%; padding-left:2.5%">
			
			<div>
				<?php
					print '<center><p>Welcome ' . $_SESSION["username"] . '</p></center>';
				?>
			</div>
			

			</div>
			<!--- Content ends here-->

</div>
</body>
</html>