<?php

/* SETTINGS */
$yourEmail = "hello@copadigitalgroup.com";
$emailSubject = "Copa";

if( $_POST ) {

  /* DATA FROM HTML FORM */
  $name = $_POST['name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['message'];

  $emailSubject = $emailSubject . " by " . $name;

  //Set from address to domain name. If set to example (gmail or yahoomail), it will get rejected because of the DMAC policy.
  $headers = "From: $name <noreply@copadigital.com>\r\n" .
             "Reply-To: $name <$email>\r\n" . 
             // "Company: $company\r\n" .
             // "Phone Number: $phone\r\n" .
             "Subject: $emailSubject\r\n" .             
             "Content-type: text/plain; charset=UTF-8\r\n" .
             "MIME-Version: 1.0\r\n" . 
             "X-Mailer: PHP/" . phpversion() . "\r\n";
 
  /* PREVENT EMAIL INJECTION */
  if ( preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email)) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die("500 Internal Server Error");
  }

  $message = 'Name: '. $name . "\r\n";
  $message .= 'Company: '. $company . "\r\n";
  $message .= 'Phone: '. $phone . "\r\n";
  $message .= "Message: \r\n". $msg;

  /* SEND EMAIL */
  mail($yourEmail, $emailSubject, $message, $headers);
}

?>