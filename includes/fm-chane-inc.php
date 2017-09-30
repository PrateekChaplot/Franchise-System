<?php
session_start();

if(isset($_POST['submit']))
{
	include_once 'dbh-inc.php';

	$pass = mysqli_real_escape_string($connection, $_POST['old-pwd']);

	$sql = "SELECT `password` FROM `log_in_details` WHERE `user_id`='".$_SESSION['id']."'";
	$temp = mysqli_query($connection, $sql);
	$row = $temp->fetch_assoc();
	
	if($row['password'] == $pass)
	{
		// change first name
		if($_POST['new-fname'])
		{
			$sql = "UPDATE `franchisee_manager` SET `first_name`='".$_POST['new-fname']."' WHERE `user_id`='".$_SESSION['id']."'";
			mysqli_query($connection, $sql);
		}

		// change last name
		if($_POST['new-lname'])
		{
			$sql = "UPDATE `franchisee_manager` SET `last_name`='".$_POST['new-lname']."' WHERE `user_id`='".$_SESSION['id']."'";
			mysqli_query($connection, $sql);
		}

		// change phone number
		if($_POST['new-phone'])
		{
			$sql = "UPDATE `franchisee_manager` SET `phone_number`='".$_POST['new-phone']."' WHERE `user_id`='".$_SESSION['id']."'";
			mysqli_query($connection, $sql);
		}

		// change password
		if($_POST['new-pwd'])
		{
			$sql = "UPDATE `log_in_details` SET `password`='".$_POST['new-pwd']."' WHERE `user_id`='".$_SESSION['id']."'";
			mysqli_query($connection, $sql);
		}

		header("Location: ../franchise_manager.php?changed");
		exit();

	}
	else
	{
		header("Location: ../franchise_manager.php?pwd_error");
		exit();
	}
}
else
{
	header("Location: ../");
	exit();
}