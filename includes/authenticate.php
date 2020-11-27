<?php

require_once('functions.php');

$user = "";
$pass = "";

$inputuser = validateInput($_GET['username']);
$inputpass = validateInput($_GET['password']);

if(validateInput($inputuser) == $user) {
	if(validateInput($inputpass) == $pass) {
		session_start();
		$_SESSION["loggedIn"] = true;
		header('Location: ../admin');
	}
}

?>
