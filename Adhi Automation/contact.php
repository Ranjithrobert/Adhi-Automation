<?php
 if(isset($_POST['submit']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$phone = $_POST['phone'];
 	$enquiry = $_POST['message'];
 	$message = '<html><body>';
	$message .= '<h1>Enquiry Details From Adhi Automation</h1>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
	$message .= "<tr><td><strong>Phone:</strong> </td><td>" . htmlentities($_POST['phone']) . "</td></tr>";
	$message .= "<tr><td><strong>Message:</strong> </td><td>" . htmlentities($_POST['message']) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";

     
	$to = 'adhiautomation@gmail.com';      
	$subject = 'Enquiry Details From Adhi Automation';
	$headers = "From:" . $_POST['email'] . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	if (mail($to, $subject, $message, $headers)) 
    {
		echo "<script type=\"text/javascript\">alert('Your enquiry has been sent successfully. We will contact you soon.');"."window.location='contact.html'</script>";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert('Error. Please try again !!!');"."window.location='contact.html'</script>";    
	}
 }
?>