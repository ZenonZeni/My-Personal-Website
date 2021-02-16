<?php

      $name = $_POST['name'];
      $email = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];

      $email_subject = "New Form Submission from my website";

      $email_body = $subject;

      $to = "zenonzeni@gmail.com";

      $headers = "From: opc" . "\n" .
                  "CC: opc";

      $test= mail($to,$email_subject,$email_body,$headers);

      echo $test;
      echo $name;
      echo $email;
      echo $country;
      echo $subject;
      Echo "email has failed"

      //header('Location: ContactMe.html');

 ?>
