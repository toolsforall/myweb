<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='ssherikar2005@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Message From WEBSITE From User'.$name;
		$message=.$msg;
		$headers="From: ".$email;

		mail($to, $subject, $message, $headers);
		header("location:done.html");
	}
?>