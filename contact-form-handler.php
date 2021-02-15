<?php
      $name = $_POST['name'];
      $visitor_email = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];

      $email_from = 'zenonzeni.ca';
      $email_subject = "New Form Submission"
      $email_body = "User Name: $name. \n".
                    "User Email: $visitor_email.\n"
                    "User country: $country. \n"
                    "User subject: $subject. \n";

    $to = "ZenonZeni@gmail.com"  
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: ContactMe.html")
 ?>
