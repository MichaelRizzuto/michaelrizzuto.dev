<?php $pageName = 'Portfolio';
require_once('includes/header.php'); ?>
<div class="content-container">
	<div class="about-container">
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
			<img title="C#" src="/assets/img/csharp.png" />
			<img title="NodeJS" src="/assets/img/nodejs.png" />
		</div>
		<h2>information about me</h2>
		<div class="about-description">
			<p>My name is <strong>Michael Rizzuto</strong>, I am a sixteen year old technology enthusiast based in Pennsylvania. I got my start in the gaming industry, where I still find myself spending some of my sparetime, but quickly evolved into a passion and desire to create my own games or contribute to others. During this time I also got introduced to the hosting industry where I found employment and a source of income. I spend my time nowadays enjoying my hobbies and doing freelance for others. My hobbies include gaming, as mentioned earlier, football, wrestling and overall I'm just a social person and enjoy talking with others.</p>
		</div>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>
