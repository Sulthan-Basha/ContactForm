
<?php

if(isset($_REQUEST['submit']))
{

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];

$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
//$url='http://dmphub99.github.io/dmphub/contactus.html';

$message1="contact form information of a new user";
$mailto='sulthanbasha554@gmail.com';
$headers  = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$message1 .="\r\n";
$message1 .=$name."\r\n";
$message1 .=$email."\r\n";
//$message1 .=$phone."\r\n";

    //SEND Mail
ini_set('vizagdirectory', 'support@vizagdirectory.com'); // Set your Sendingadress here
     if (mail($mailto, $subject, $message1, $headers)) {

         echo "<script>alert('Mail Sent successfully')</script>";



      } else

	 {
        echo "<script>alert('Mail sending ... ERROR!')</script>";
	  }


}
?>
