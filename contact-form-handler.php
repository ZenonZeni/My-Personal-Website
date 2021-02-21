<?php
    $to = "zenonzeni@gmail.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: opc@zenonzeni.ca" . "\r\n" .
    "CC: opc@zenonzeni.ca";

    mail($to,$subject,$txt,$headers);
 ?>
