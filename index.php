<?php $pageName = 'Home';
require_once('includes/header.php'); 

	require __DIR__ . '/SourceQuery/bootstrap.php';

	use xPaw\SourceQuery\SourceQuery;

	define( 'SQ_SERVER_PORT', 27015 );
	define( 'SQ_TIMEOUT',     15 );
	define( 'SQ_ENGINE',      SourceQuery::SOURCE );
	
	$Query = new SourceQuery( );
	
	try
	{
		$Query->Connect( '208.103.169.12', SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		$info = $Query->GetInfo();
		
		$server1online = $info['Players'];
		$server1max    = $info['MaxPlayers'];
	}
	catch( Exception $e )
	{
		$server1online = "error";
		$server1max = "error";
	}

	try
	{
		$Query->Connect( '208.103.169.16', SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		$info = $Query->GetInfo();
		
		$server2online = $info['Players'];
		$server2max    = $info['MaxPlayers'];
	}
	catch( Exception $e )
	{
		$server2online = "error";
		$server2max = "error";
	}
	
	$Query->Disconnect( );

?>
<div class="home-container">
	<div class="home-introduction-container">
		<div id="vardos" class="home-introduction-container-vardos">
			<img id="vardos_image" src="assets/img/vardos.png" class="animated slideInLeft" />
			<h1 id="vardos_header" class="animated slideInRight">Vardos</h1>
			<h2 id="vardos_subheader" class="animated slideInRight">imperial controlled planet</h2>
			<div id="vardos_text" class="description-container animated slideInRight">
				<p>Once an independent planet, Vardos was brought under Imperial control shortly after the end of the Clone War. A young Garrick Versio united the Jinata System under the Emperor’s banner, and Vardos became an Imperial utopia. Populated with Imperial installations, training grounds, and military bases, Vardos is also home to millions of loyal citizens. The stunning red soil of Vardos can be seen from space, as can its mountain ranges and oceans. But the planet’s jewel is Kestro, the capital city and Imperial hub. It is also the location of Vardos’ seminal Future Imperial Leaders Military Preparatory School, as well as Jinata Security’s headquarters.</p>
			</div>
			<ul id="vardos_select" class="animated slideInLeft">
				<li><i class="fas fa-circle"></i></li>
				<li onclick="DauntlessChose()"><i class="far fa-circle"></i></li>
			</ul>
		</div>
		<div id="dauntless" class="home-introduction-container-dauntless hidden">
			<img id="destroyer_image" src="assets/img/dauntless.png" class="animated slideInLeft" />
			<h1 id="destroyer_header" class="animated slideInRight">Imperial Star Destroyer</h1>
			<h2 id="destroyer_subheader" class="animated slideInRight">imperial navy cruiser</h2>
			<div id="destroyer_text" class="description-container animated slideInRight">
				<p>The Imperial I-class Star Destroyer, also referred to as an Imperial-class Star Destroyer or Star Destroyer, was a model of Imperial-class Star Destroyer in the service of the Imperial Navy. A wedge-shaped capital ship, it bristled with weapons emplacements, assault troops, boarding craft, and TIE line starfighters. In the era of the Galactic Empire, its command bridge was staffed by the finest crewmen in the navy.</p>
			</div>
			<ul id="destroyer_select" class="animated slideInLeft">
				<li onclick="VardosChose()"><i class="far fa-circle"></i></li>
				<li><i class="fas fa-circle"></i></li>
			</ul>
		</div>
	</div>
	<div class="home-servers-container">
		<h1><i class="fas fa-gamepad"></i> OUR SERVERS</h1>
		<div class="home-servers-options-flex">
			<div class="home-server">
				<div class="home-server-title">
					<img src="assets/img/vardos.png" />
				</div>
				<h1>Vardos Roleplay</h1>
				<div class="home-player-count">
					<div class="home-player-bar animated slideInLeft" style="width: 
						<?php $server1progress = (1 - $server1online / $server1max) * 100; echo'calc(100% - ' . $server1progress . '%)'; ?> ;">
					</div>
					<h2><?php echo $server1online ?>/<?php echo $server1max ?></h2>
				</div>
				<div class="home-connect-button">
					<a href="steam://connect:0.0.0.0:27015/" target="_blank"><p><i class="fas fa-gamepad"></i> Connect</p></a>
				</div>
			</div>
			<div class="home-server server-margin">
				<div class="home-server-title">
					<img src="assets/img/dauntless.png" />
				</div>
				<h1>Event Server</h1>
				<div class="home-player-count">
					<div class="home-player-bar animated slideInLeft" style="width: 
						<?php $server2progress = (1 - $server2online / $server2max) * 100; echo'calc(100% - ' . $server2progress . '%)'; ?> ;">
					</div>
					<h2><?php echo $server2online ?>/<?php echo $server2max ?></h2>
				</div>
				<div class="home-connect-button">
					<a href="steam://connect:0.0.0.0:27015/" target="_blank"><p><i class="fas fa-gamepad"></i> Connect</p></a>
				</div>
			</div>
		</div>
	</div>
	<div class="home-discord">
		<iframe class="discord-preview" src="https://discord.com/widget?id=706380241492508753&theme=dark" allowtransparency="true" frameborder="0"></iframe>
		<div class="connect-container">
			<h1>Connect with the community!</h1>
			<div class="discord-button">
				<p><a href="https://discord.gg/C4x59BB" target="_blank"><i class="fab fa-discord"></i> Join the Discord</a></p>
			</div>
		</div>
	</div>
	<div class="home-steam-statistics">
		<h1><i class="fas fa-chart-line"></i> Steam Group Statistics</h1>
		<div class="steam-stats-container">
			<div class="steam-online-players">
				<h2><i class="fas fa-power-off"></i> Online Members</h2>
				<p id="steam-group-online"></p>
			</div>
			<div class="steam-ig-players">
				<h2><i class="fas fa-headset"></i> In Game Members</h2>
				<p id="steam-ig-online"></p>
			</div>
			<div class="steam-all-players">
				<h2><i class="far fa-user"></i> All Members</h2>
				<p id="steam-group-all"></p>
			</div>
		</div>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>
