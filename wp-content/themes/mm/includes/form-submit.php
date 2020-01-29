<?php

//Form contact
function callback_send_email(){

   $msg = $_POST['msg'] . "\r\n";
   $email = $_POST['email'] . "\r\n";

   $subject = "Write to us - Message";
   $email_body = "The following prospectus has contacted you.". "\n\n" .
                 "Email: " . $email.
                 "Message: $msg";

   $to = "akashyadav.iiita@gmail.com";
   $headers .= "From: $email \r\n";
   $headers .= "Reply-To: $email \r\n";
   $mail = mail($to,$subject,$email_body,$headers);
 if($mail){
       echo "Email Sent Successfully";
         }
}

//Form contact
function callback_contact_email(){

   $name = $_POST['name'] . "\r\n";
   $email = $_POST['email'] . "\r\n";
   $phone = $_POST['phone'] . "\r\n";
   $message = $_POST['message'] . "\r\n";

   $subject = "Contact Us - Message";
   $email_body = "The following prospectus has contacted you.". "\n\n" .
                 "Name: " . $name.
                 "Email: " . $email.
                 "Phone: " . $phone.
                 "Message: $message";

   $to = "akashyadav.iiita@gmail.com";
   $headers .= "From: $email \r\n";
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
