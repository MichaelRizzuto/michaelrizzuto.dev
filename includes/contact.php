<?php

require_once('../../includes/config.php');
require_once('../../includes/functions.php');

$mySQLInstance = mysqli_connect($host, $user, $pass, $database, $port);

$date = date("m/d/y");
$first = validateInput($_GET['first']);
$last = validateInput($_GET['last']);
$email = validateInput($_GET['email']);
$message = validateInput($_GET['message']);

if (!$mySQLInstance) {
    header('Location: ../');
} else {
    mysqli_query($mySQLInstance, "insert INTO contact (date, first, last, email, message) values('" . $date . "', '" . $first . "', '" . $last . "', '" . $email . "', '" . $message . "');");
	header('Location: ../contact');
}

?>
