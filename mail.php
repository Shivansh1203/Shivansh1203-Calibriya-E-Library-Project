<?php

if(isset($_POST['submit'])) {
    $mailto = "jiyabansal627@gmail.com";  //My email address
    //getting customer data
    $name = $_POST['name']; //getting customer name
    $email = $_POST['email']; //getting customer email

    $subject = $_POST['subject']; //getting subject line from client
    $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
    
    //Email body I will receive
    $message = "Client Name: " . $name . "\n"

    . "Client Message: " . "\n" . $_POST['message'];
    
    //Message for client confirmation
    $message2 = "Dear" . $name . "\n"
    . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
    . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
    . "Regards," . "\n" . "- HMA WebDesign";
    
    //Email headers
    $headers = "From: " . $email; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This will receive client
    
    //PHP mailer function
    
     $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
     $result2 = mail($email, $subject2, $message2, $headers2); //This confirmation email to client
    
     //Checking if Mails sent successfully
    
     if ($result1 && $result2) {
       $success = "Your Message was sent Successfully!";
     } else {
       $failed = "Sorry! Message was not sent, Try again Later.";
     }
    
   }



echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&family=Poppins&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index2.html">homepage</a>.</p>
    </div>
</body>
</html>

';


?>