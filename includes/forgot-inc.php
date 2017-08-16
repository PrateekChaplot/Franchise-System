<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh-inc.php';

	$email = mysqli_real_escape_string($connection, $_POST['email']);

	//Error Handlers
	//Check for empty field
	if (empty($email)) {
		header("Location: ../forgot.php?forgot=empty");
		exit();
	} else {
		//Check for valid email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../forgot.php?forgot=email");
			exit();
		} else {
			//check if email exists
			$sql = "SELECT * FROM log_in_details WHERE email_id='$email'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);

			//Check if email exists
			if($resultCheck < 1) {
				header("Location: ../forgot.php?forgot=userexits");
				exit();
			} else {
				$row = mysqli_fetch_assoc($result);

				$to = $row['email_id'];
				$subject = 'Password Reset!';
				$message = 
'Dear '.$to.'

Your Password is: '.$row['password'];

				mail($to, $subject, $message);

				header("Location: ../login.php?forgot=success");
				exit();
			}
		}
	}

} else {
	header("Location: ../login.php");
	exit();
}