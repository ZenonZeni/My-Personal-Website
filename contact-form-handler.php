<?php

      $name = $_POST['name'];
      $visitor_email = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];

      $email_subject = "New Form Submission";

      $email_body = 'From: zenonzeni.ca' . "\r\n" .
                    'Reply-To: zenonzeni.ca' . "\r\n" .
                    'X-Mailer: PHP/' $subject . phpversion();

    $to = 'zenonzeni@gmail.com';

    $headers = "From: zenonzeni.ca \r\n" .
                "Reply-To: $visitor_email \r\n";

    $send_contact= mail($to,$email_subject,$email_body,$headers);

    if($send_contact){
      header('Location: ContactMe.html');
    }
    else {
      echo "ERROR";
    }

 ?>
