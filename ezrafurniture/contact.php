<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/
$msg="";
if(isset($_POST['submit']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */

	$from_add = $_POST["Email"]; 

	$to_add = "ezrafurnitureco@gmail.com"; //<-- put your yahoo/gmail email address here
	
	$build_message = "You have recieved e-mail from: ".$_POST["Fname"]. "\n\n" . "This persons' email is: ".$_POST["Email"]. "\n\n" . "Message: ". $_POST["message"];

	$subject = $_POST["Subject"];
	$message = $build_message;
	
	header("Location: index3.html?mailsent successfully");

	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}
}
?>

<!DOCTYPE html>
<head>


</head>
<body>




</body>




