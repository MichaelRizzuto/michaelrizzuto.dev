<?php

require_once('../../includes/restriction.php');

$id = $_GET['id'];

require_once('../../includes/config.php');

$mySQLInstance = mysqli_connect($host, $user, $pass, $database, $port);

$inbox = array();

$query = 'select * from contact WHERE id="' . $id . '"';

$result = mysqli_query($mySQLInstance, $query);

$query = 'update `contact` set `read` = "true" WHERE id="' . $id . '"';

$updateRead = mysqli_query($mySQLInstance, $query);

while($row = mysqli_fetch_assoc($result)) {
	$inbox[] = $row;
}

$inbox = json_encode($inbox);

mysqli_close($mySQLInstance);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>View - Michael Rizzuto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta charset="UTF-8">
		<link href="/assets/css/admin.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
	</head>
	<body>
		<p><a href="/admin">Back</a></p>
		<?php
			$inbox = json_decode($inbox);
			foreach($inbox as $message) {
				echo '<p>' . $message->date . '</p>' . PHP_EOL;
				echo '		<p>' . $message->first . ' ' . $message->last . '</p>' . PHP_EOL;
				echo '		<p>' . $message->email . '</p>' . PHP_EOL;
				echo '		<p>' . $message->message . '</p>' . PHP_EOL;
			}
		?>
	</body>
</html>
