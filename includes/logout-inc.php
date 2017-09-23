<?php

if (isset($_SESSION['id'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php?index=loggedout");
	exit();
} else {
	header("Location: ../login.php");
	exit;
}