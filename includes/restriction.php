<?php

session_start();

if(!(isset($_SESSION["loggedIn"]))) {
	$_SESSION["loggedIn"] = false;
}

if($_SESSION["loggedIn"] == false) {
	header('Location: /admin/login');
}

?>
