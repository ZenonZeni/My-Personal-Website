<?php
      $name = $_POST['name'];
      $subject = $_POST['message'];
      $visitor_email = $_POST['email'];

      $email_from = 'opc@zenonzeni.ca';
      $email_subject = "New Form Submission";
      $txt = "User Name: ".$name.".\n"."User Email: ".$visitor_email."\n"."User subject: ". $subject;

    $to = "ZenonZeni@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$txt,$headers);
    header("location: ContactMeSuccess.html");
 ?>
