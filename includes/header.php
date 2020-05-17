<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tags -->
		<title><?php echo $pageName;?> - Michael Rizzuto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta charset="UTF-8">
		<meta name="description" content="The official portfolio of Michael Rizzuto.">
		<meta name="keywords" content="Michael Rizzuto, Portfolio ">
		<meta name="robots" content="index, follow">
		<meta name="copyright" content="Michael Rizzuto">
		<meta name="language" content="EN">
		<meta name="author" content="Michael Rizzuto">
		<meta name="creationdate" content="01/01/2020">
		<meta name="distribution" content="global">
		<meta name="rating" content="general">
		<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
		<!-- Favicons -->
		<link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
		<link rel="manifest" href="/assets/img/site.webmanifest">
		<link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#8899a6">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<!-- Custom Stylesheet -->
		<link href="/assets/css/styles.css" rel="stylesheet" />
		<link href="/assets/css/animate.css" rel="stylesheet" />
		<!-- Main JavaScript -->
		<script src="/assets/js/main.js"></script>
	</head>
	<body>
		<div class="header">
			<ul>
				<a title="Home" href="/"><li <?php if ($pageName == 'Home') {echo 'class="active"';} ?>><i class="fas fa-home"></i></li></a>
				<a title="About" href="/about"><li><i class="far fa-user"></i></li></a>
				<a title="Projects" href="/projects"><li><i class="fas fa-list"></i></li></a>
				<a title="Contact" href="/contact"><li><i class="fas fa-envelope"></i></li></a>
			</ul>
			<img title="Socials" src="assets/img/avatar.png" onclick="headerDropdown()" />
		</div>
		<div id="header_dropdown" class="header-dropdown">
			<ul>
				<a title="Github" href="https://github.com/MichaelRizzuto" target="_blank"><li><i class="fab fa-github"></i></li></a>
				<a title="LinkedIn" href="https://www.linkedin.com/in/primestudios/" target="_blank"><li><i class="fab fa-linkedin"></i></li></a>
			</ul>
		</div>
