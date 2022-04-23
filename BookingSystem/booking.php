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
				<a href="home.php" >Home</a>
				<a href="booking.php">Booking</a>
				<form action="logout.php" method="POST" id="logout">
				<a href="javascript:{}" onclick="document.getElementById('logout').submit(); return false;">LogOut</a>
				</form>
			</div>

			<ul class="customnav" style="height:7.5%;">
				<li><button class="openbtn" onclick="openNav()"> <!--&#8801; I removed a symbol remove comment to add it again--> Menu</button> </li>
				<li><button class="navButtons" style="color:white;" onclick="document.location='home.php'"> Home </button> </li>
				<div>
				<li style="float:right"> <form action="logout.php" method="POST"><button class="navButtons" type="submit" name="logout" value="logout">Logout</button></form></li>
				<li style="float:right"> <label class="navButtons" disabled href="#about"><?php echo $_SESSION["username"]; ?></label></li>
				</div>
			</ul>
			
			<!--- Start Here for Content -->
			<div id="page2" style="padding-top:2.5%; padding-left:2.5%">
			
			<div>
				<?php
					echo '<center><p>Welcome ' . $_SESSION["username"] . '</p></center>';
				?>
			</div>
			
			<!---user booking-->
			<div class="container" style="border-style:solid;" >
				<div class="row" id="ub0"> 
					<div class="auto col">
						<u>Your Bookings</u>
					</div>
					<div class="auto col">
						<u>Date</u>
					</div>
					<div class="auto col">
						<u>Hours</u>
					</div>
					<div class="auto col">
						<u>Lesson Plan</u>
					</div>
					<div class="auto col">
						<u>Cancel</u>
					</div>
				</div>
				<div class="row"id="ub0"> 
					<div class="auto col">
						Sample Lesson
					</div>
					<div class="auto col">
						2000-11-17
					</div>
					<div class="auto col">
						2 
					</div>
					<div class="auto col">
						ITEC 1620 
					</div>
					<div class="auto col">
						<button type="submit"> Cancel </button>
					</div>
				</div>
			</div>
			
			<p></p>
			
			<!---Available Booking-->
			<div class="container" style="border-style:solid;">
				<div class="row" id="ab0"> 
					<div class="auto col">
						<u>Available Booking Slots</u>
					</div>
					<div class="auto col">
						<u>Available Date</u>
					</div>
					<div class="auto col">
						<u>Available Time</u>
					</div>
					<div class="auto col">
						<u>Choose Lesson</u>
					</div>
					<div class="auto col">
						<u>Book</u>
					</div>
				</div>
				<div class="row" id="ab0"> 
					<div class="auto col">
						Available Lesson
					</div>
					<div class="auto col">
						2000-11-30
					</div>
					<div class="auto col">
						9:00PM
					</div>
					<div class="auto col">
						Choose Lesson
					</div>
					<div class="auto col">
						<button type="submit"> Book </button>
					</div>
				</div>
			</div>

			</div>
			<!--- Content ends here-->

</div>
</body>
</html>