<?php

      $name = $_POST['name'];
      $email = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];

      $email_subject = "New Form Submission from my website";

      $email_body = 'Testing 123';

      $to = 'zenonzeni@hotmail.com';

      $headers = "From: zenonzeni.ca \r\n" .
                "CC: zenonzeni.ca \r\n";

      if(mail($to,$email_subject,$email_body,$headers)){
          header('Location: ContactMe.html');
      }
      else{
        echo "message not sent";
      }

 ?>
