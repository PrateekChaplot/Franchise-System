<?php

// include_once 'dbh-inc.php';
// $sql = 'SELECT MAX(user_id) FROM log_in_details';
// $temp = mysqli_query($connection, $sql);
// $var = mysqli_fetch_assoc($temp);
// echo $var['MAX(user_id)'];
// die;

// SET @var = (SELECT MAX(`user_id`) FROM `log_in_details`);
// UPDATE `log_in_details` SET `user_id` = @val+1 WHERE `user_id`=0

if (isset($_POST['submit'])) {
 	
	include_once 'dbh-inc.php';

	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	//Error Handlers
	//Check for empty fields
	if (empty($email) || empty($password)) {
		header("Location: ../register.php?signup=empty");
		exit();
	} else {
		//Check if input charachters are valid
		//if(!preg_match("/^[a-zA-Z]*$", $firstName)) ## not name in registration form ##

		//Check if email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../register.php?signup=email");
			exit();
		} else {
			$sql = "SELECT * FROM log_in_details WHERE email_id='$email';";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				header("Location: ../register.php?signup=usertaken");
				exit();
			} else {
				/* Not hashing
				//Heashing the password
				$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
				*/

				//Checking the user type
				$type = $_POST['user'];

				//Insert the user into the database
				$sql = "INSERT INTO log_in_details (email_id, user_type, password, status) VALUES ('$email', '$type' ,'$password', 1);";				
				mysqli_query($connection, $sql);

				// echo "done!";die;
				
				//Updating the user_id of the user
				$sql = "SET @var=(SELECT MAX(`user_id`) FROM `log_in_details`);
						UPDATE `log_in_details` SET `user_id`=@var+1 WHERE `user_id`=0;";
				//echo $sql;die;
				mysqli_multi_query($connection, $sql);

				header("Location: ../index.php?register=success");
				exit();
			}
		}
	}

 } else {
 	header("Location: ../register.php");
	exit();
 }