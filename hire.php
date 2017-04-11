<?php

   if (isset($_POST['hireSubmit'])){

      $hireFullName = $_POST['hireFullName'];
      $hireSenderPosition = $_POST['hireSenderPosition'];
      $hireCompName = $_POST['hireCompName'];
      $hireSenderEmail = $_POST['hireSenderEmail'];
      $hireJobOffer = $_POST['hireJobOffer'];
      $hirePositionOffer = $_POST['hirePositionOffer'];

      

   }
	
// Create the email and send the message
$to = 'macalinao.bryanjames@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Hiring";
$email_body = "You have received a new message from your website hiring form.\n\n"."Here are the details:\n\nName: $hireFullName\n\nEmail: $hireSenderEmail". "<br>" . "Hello! I am $hireFullName, $hireSenderPosition from $hireCompName. I am offering you a $hireJobOffer position for $hirePositionOffer";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $hireSenderEmail";
mail($to,$email_subject,$email_body,$headers);

header('location: index.html');
    
?>