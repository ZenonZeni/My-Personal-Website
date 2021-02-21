<?php
    $to = "zenonzeni@gmail.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: opc@zenonzeni.ca" . "\r\n" .
    "CC: opc@zenonzeni.ca";

    echo mail($to,$subject,$txt,$headers);

    echo test;

 ?>
