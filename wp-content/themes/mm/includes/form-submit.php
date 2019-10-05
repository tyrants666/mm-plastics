<?php

//Form contact
function callback_send_email(){

    $group1 = $_POST['group1'] . "\r\n";
    $company = $_POST['company'] . "\r\n";
    $group2 = $_POST['group2'] . "\r\n";
    $website = $_POST['website'] . "\r\n";
    $challenge = $_POST['challenge'] . "\r\n";
    $name = $_POST['name'] . "\r\n";
    $email = $_POST['email'] . "\r\n";
    $group3 = $_POST['group3'] . "\r\n";

  $message = 'Group1:' . $group1 . ' Company:'. $company . ' Group2:'. $group2 . ' Website:'. $website . ' Challenge:'. $challenge . ' Group3:' . $group3;

   $subject = "Contact Form";
   $email_body = "The following prospectus has contacted you.". "\n\n" .
 "Name:" . $name.
 "Email:" . $email.
 "Message: $message";
          $to = "id.mediabrt5@gmail.com";
          $headers .= "From: $name $email \r\n";
          $headers .= "Reply-To: $email \r\n";
   $mail = mail($to,$subject,$email_body,$headers);
 if($mail){
       echo "Email Sent Successfully";
         }
}


//Form Event single

function callback_event_email(){

    $navn = $_POST['navn'] . "\r\n";
    $emal = $_POST['emal'] . "\r\n";
    $virk = $_POST['virk'] . "\r\n";
    $still = $_POST['still'] . "\r\n";
    $newsletter = $_POST['newsletter'] . "\r\n";

  $message = 'Virk:' . $virk . ' Still:'. $still . ' Newsletter:'. $newsletter;

   $subject = "Contact Form";
   $email_body = "The following prospectus has contacted you.". "\n\n" .
 "Name:" . $navn.
 "Email:" . $emal.
 "Message: $message";
          $to = "id.mediabrt5@gmail.com";
          $headers .= "From: $name $email \r\n";
          $headers .= "Reply-To: $email \r\n";
   $mail = mail($to,$subject,$email_body,$headers);
 if($mail){
       echo "Email Sent Successfully";
         }
}
 ?>
