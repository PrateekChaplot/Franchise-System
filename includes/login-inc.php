<?php

session_start();

if(isset($_POST['submit'])) {

	include_once 'dbh-inc.php';

	$userid = mysqli_real_escape_string($connection, $_POST['userid']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	//Error Handlers
	//Check if inputs are empty
	if (empty($userid) || empty($password)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM log_in_details WHERE email_id='$userid';";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//Check the password
				$PwdCheck = $password = $row['password'];

				if ($hashedPwdCheck = false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif($hashedPwdCheck = true) {
					//Log in the user here
					$_SESSION['id'] = $row['user_id'];
					$_SESSION['type'] = $row['user_type'];
					$_SESSION['email'] = $row['email'];
					
					//Re-directing
					header("Location: ../index.php");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../index.php");
	exit();
}