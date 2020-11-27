<?php

require_once('functions.php');

$rootuser = "";
$rootpass = "";

$inputuser = validateInput($_GET['username']);
$inputpass = validateInput($_GET['password']);

if(validateInput($inputuser) == $rootuser) {
	if(validateInput($inputpass) == $rootpass) {
		session_start();
		$_SESSION["loggedIn"] = true;
		header('Location: ../admin');
	}
}

?>
