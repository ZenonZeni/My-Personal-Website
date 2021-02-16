<?php

      $name = $_POST['name'];
      $email = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];

      $email_subject = "New Form Submission from my website";

      $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message: {$country}", "Subject:", $subject];
      $body = join(PHP_EOL, $bodyParagraphs);

      $email_body = 'From: zenonzeni.ca' . "\r\n" .
                    'Reply-To: zenonzeni.ca' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

    $to = 'zenonzeni@hotmail.com';

    $headers = "From: zenonzeni.ca \r\n" .
                "Reply-To: $email \r\n";

    if(mail($to,$email_subject,$body,$headers)){
        header('Location: ContactMe.html');
    }
    else{
      echo "message not sent";
    }

 ?>
