<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];

 $email_from = 'sandro.kiziria@gmail.com';
 $email_subject = "New Form Submission";
 $email_body = "User Name: $name. \n".
                "User Email: $email. \n".
                "User Message: $subject. \n";

 $to = "sandro.kiziria@gmail.com";

 $headers = "From: $email_from \r\n";
 $headers .= "Reply-To: $email \r\n"; 

 mail($to,$email_subject,$email_body,$headers);

 header("Location: Contact.html");
?>
