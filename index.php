<?php $pageName = 'Portfolio';
require_once('includes/header.php'); ?>
<div class="content-container">
	<div class="content-about">
		<h2>about</h2>
		<h1>Creating <span id="typewriter"></span> that work</h1>
		<script>
			new TypeIt("#typewriter", {
			    speed: 100,
			    deleteSpeed: 100,
			    loop: true,
			    waitUntilVisible: true
			})
			    .type("websites")
			    .pause(1000)
			    .delete(8)
			    .type("applications")
			    .pause(1000)
			    .delete(12)
			    .type("products")
			    .pause(1000)
			    .delete(8)
			    .type("projects")
			    .pause(1000)
			    .go();
		</script>
		<h2>languages i work with</h2>
		<div class="about-languages">
			<img title="PHP" src="/assets/img/php.png" />
			<img title="Javascript" src="/assets/img/javascript.png" />
			<img title="HTML" src="/assets/img/html.png" />
			<img title="CSS" src="/assets/img/css.png" />
			<img title="LUA" src="/assets/img/lua.png" />
			<img title="NodeJS" src="/assets/img/nodejs.png" />
		</div>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>
