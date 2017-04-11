<?php

   if (isset($_POST['submit'])){

      $fullName = $_POST['name'];
      $senderEmail = $_POST['email'];
      $content = $_POST['message'];

      echo $fullName;
      echo $senderEmail;
      echo $content;

   }
	
// Create the email and send the message
$to = 'macalinao.bryanjames@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $fullName\n\nEmail: $senderEmail\n\n Message:\n $content";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $senderEmail";	
mail($to,$email_subject,$email_body,$headers);


    header('location: index.html');
?>


