<?php include 'contact-form-handler.php';?>

<html>
	<head>
		<meta charset="utf-8">

		<title> Contact Me </title>
			<script type="text/javascript">
				function openNav() {
					document.getElementById("mySidepanel").style.width = "300px";
				}
				function closeNav() {
					document.getElementById("mySidepanel").style.width = "0px";
				}
			</script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="Css/default.css">
		<link rel="stylesheet" href="Css/bottom.css">
		<link rel="stylesheet" href="Css/nav.css">
		<link rel="stylesheet" href="Css/slidingmenu.css">
		<script src="/JavaScript/alert.js"> </script>
	</head>

	<body>
      <div id="mySidepanel">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<a href="../index.html">Home</a>
  			<a href="Work Experience Page Personal Website.html">Work Experience</a>
  			<a href="Education Page Personal Website.html">Education</a>
  			<a href="Projects Page Personal Website.html">Projects</a>
				<a href="ContactMe.php">Contact Me</a>
  		</div>

  		<ul class="customnav">
  			<li><button class="openbtn" onclick="openNav()"> <!--&#8801; I removed a symbol remove comment to add it again--> Menu</button> </li>
  			<li><button class="navButtons" disabled style="color:white;" onclick="document.location='../index.html'"> Home </button> </li>
  			<li><button class="navButtons" disabled style="color:white;" onclick="document.location='Home.html'"> About me </button> </li>
  			<li><button class="navButtons" style="color:white;" onclick="document.location='Work Experience Page Personal Website.html'"> Work Experience </button> </li>
  			<li><button class="navButtons" style="color:white;" onclick="document.location='Education Page Personal Website.html'"> Education </button> </li>
  			<li><button class="navButtons" style="color:white;" onclick="document.location='Projects Page Personal Website.html'"> Projects </button> </li>
  			<div>
  				<li style="float:right"><button class="navButtons" disabled href="#about">Contact Me</button></li>
  			</div>
      </ul>

        <div class="container-fluid" style="padding-left:25%; padding-right:25%">
          <form id="contact-form" method="POST">
            <div class="row">
            <label for="xname" style="color:white;">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
            </div>
						<div class="row">
						<label for="xname" style="color:white;">Subject</label>
						</div>
						<div class="row">
					<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
					</div>
            <div class="row">
            <label for="xemail" style="color:white;">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email">
            </div>
						<div class="row" style="padding-top:20px;">
						<input id="submitmessage" type="submit" name="submit" value="Send Message" onclick="alertSuccess()">
						</div>
						</div>
					</form>
				 </div>

						<?php if($message_sent){
								echo '<script>
					       document.getElementById('successAlert').style.visibility="visible;";
					      </script>';
						}
						?>

						<div class="container-fluid" id="successAlert" style="padding-left:25%; padding-right:25%; visibility:hidden;">
						<div class="alert alert-success" role="alert">
							This is a success alert—check it out!
						</div>
							</div>

        <center>
					<div class="bottomContainer">
					<p> Contact Information </p>
					<p> ZenonZeni@hotmail.com |
					<a href="https://github.com/zenonzeni" style="color:white;"> GitHub</a> |
					<a href="https://www.linkedin.com/in/zenonzeni/ " style="color:white;"> linkedin</a> |
					<a href="https://discord.gg/uTQqtxTPZ8" style="color:white;"> Discord</a>
					</p>
					</div>
  		</ul>
    </body>
    </html>
