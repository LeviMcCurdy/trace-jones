<?php 

$email = $_POST['email']; 




	$subject = "Email Alert Notification";
	
	$to = "levi@webtek.cc"; 
	/*$cc = 'kelly@webtek.cc';*/

	$headers = "From: " . strip_tags($_POST['email']). "<" .strip_tags($_POST['email']). ">\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "Cc: $cc \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	// Now here we setting up the message of the mail
	$body = '<html>';
	$body .= '<head><style type="text/css">
		body{
			font-family: "Helvetica Neue", Helvetica, arial;
			color:#555;
			background:#fff;
			font-size:14px;
			padding-top:10px;
			line-height:18px;
		}
		h1{
			margin:0px;
			font-family: "Helvetica Neue", Helvetica, arial;
			font-weight: 200;
			color:#fff;
			font-size:20px;
			background-color:#7b1216;
			padding-top:15px;
			padding-bottom:15px;
			text-align:center;
		}
		.small-text{
			font-size: 12px !important;
			color:#bcbcbc;

		}
		a{
			color: #7b1216;
			font-weight: bold;
			text-decoration: none;
			border-bottom: #663300 1px dotted;
			-webkit-transition: all 0.25s ease-in-out;
			-o-transition: all 0.25s ease-in-out;
			transition: all 0.25s ease-in-out;
			cursor:pointer;
		}
		a:hover{
			color:#000;
		}
		hr{
			background:1px solid #EEE;
			height:1px;
			display:inline-block;
			width:100%;
			margin:10px 0;
		}
	</style></head>';
	$body .= '<body>';
	$body .= "<h1>Email Alert Sign Up From Your Website</h1>";
	$body .= "<p><strong>The email address below wants to be added to your notification list!</strong></p>";
	
	//$body .= "<p><strong>Contact Information</strong><br>" . strip_tags($_POST['street_address']) . "<br>" . strip_tags($_POST['city']) . ", " . strip_tags($_POST['state']) . " " . strip_tags($_POST['zip']) . "<br />";
	
	$body .= "<a href='mailto:$email'>" . strip_tags($_POST['email']) . "</a></p>";
	

	
	//$body .= "<div style='width:100%;display:inline-block;height:1px;background:#f9f9f9;margin:5px auto;'></div>";
	$body .= "<p class=\"small-text\">Email template designed and developed by <a href=\"http://www.webtekcc.com\">WebTek</a></p>";
	$body .= "</body></html>";


// Send mail
$result=mail($to, $subject, $body, $headers); 
if($result){ 
	 echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://f47.b2a.myftpupload.com/thank-you-for-signing-up\">";
}
else{ 
	echo "<p>We're sorry, your message was not sent.</p>"; 
}  

?>