<?php

      $name = $_POST['name'];
      $visitor_email = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];

      $email_subject = "New Form Submission";

      $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message: {$country}", "Subject:", $subject];
      $body = join(PHP_EOL, $bodyParagraphs);

      $email_body = 'From: zenonzeni.ca' . "\r\n" .
                    'Reply-To: zenonzeni.ca' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

    $to = 'zenonzeni@gmail.com';

    $headers = "From: zenonzeni.ca \r\n" .
                "Reply-To: $visitor_email \r\n";

    $send_contact= mail($to,$email_subject,$body,$headers);

    if($send_contact){
      header('Location: ContactMe.html');
    }
    else {
      echo "ERROR";
    }

 ?>
