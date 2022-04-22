<?php
session_start();

if($_SESSION["member_id"]== null){
	header('location:../login.php');
}

echo 'Welcome ' . $_SESSION["member_id"] . ' the system does not have any booking interface or logic <br>';
echo 'So, you have to implement it';

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
			<!---BOT--->
			<script>
			  window.watsonAssistantChatOptions = {
				integrationID: "ca5e5bd2-6e90-40ab-8904-4f32574d5e7e", // The ID of this integration.
				region: "us-east", // The region your integration is hosted in.
				serviceInstanceID: "2f6077c8-eecd-4c98-85a6-cfc01f4155a6", // The ID of your service instance.
				onLoad: function(instance) { instance.render(); }
			  };
			  setTimeout(function(){
				const t=document.createElement('script');
				t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
				document.head.appendChild(t);
			  });
			</script>
			<link rel="icon" href="My-Personal-Website/Images/favicon.png">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
			<title> Booking Home </title>
			<link rel="icon" href="Images/favicon.png">
</head>
<body>

<div style="padding-left:25%; padding-right:25%;">
<form class="form-horizontal" action="logout.php" method="POST">
  <button type="submit" name="logout" value="logout" class="btn btn-primary">Logout</button>
</form>
</div>

</body>
</html>