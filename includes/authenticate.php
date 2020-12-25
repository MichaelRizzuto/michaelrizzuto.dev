<?php

require_once('functions.php');

$rootuser = '';
$rootpass = '';

$inputuser = validateInput($_GET['username']);
$inputpass = validateInput($_GET['password']);

session_start();

if ((validateInput($inputuser) == $rootuser) && (validateInput($inputpass) == $rootpass)) {
	$_SESSION['loggedIn'] = true;
	header('Location: ../admin');
} else {
	$_SESSION['failedLogin'] = true;
	header('Location: ../admin/login');
}

?>
