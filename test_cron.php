<?php
	//send test email
	$date_time = date("m/d - Ga");
	$to = "zack@mays.io";
	$subject = "Cron Job Test: $date_time ";
	$message = "This is an email to test setting up a cron job.";
	$from = "zack@flyingvines.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
?>