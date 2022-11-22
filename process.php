<?php
$to      = 'stephen.theofanous@gmail.com';
$from    = $_POST['email'];
$email   = $_POST['email'];
$subject = 'Received New Piano Teaching Enquiry';
$message = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST["message"]."";
$headers = 'From: '.$from."\r\n" .
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
	// resend

$to1      = $_POST['email'];
$from1    = 'stephen.theofanous@gmail.com';
$email1   = "stephen.theofanous@gmail.com";
$subject1 = 'ST || Piano Teacher';
$message1 = "Thank you for getting in touch! I will respond to your message shortly.\n\nName: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST["message"]."";
$headers1 = 'From: '.$from1."\r\n" .
        'Reply-To: '.$email1."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to1, $subject1, $message1, $headers1))
{
	echo'<script>$("#form").hide()</script>';
	echo'<div class="alert alert-success"><strong>Thank you for your message,<br>I will be in touch.</strong></div>';
	echo'<script>$("#reset")[0].reset()</script>';
}
else
{
	echo'<script>swal("oops", "confirmation email not send!", "info")</script>';
}


	// end resend
}
else
{
	echo'<script>swal("oops", "email not send!", "info")</script>';
}
?>