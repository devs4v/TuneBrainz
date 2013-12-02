<?php
/*
webpage: http://tunebrainz.net46.net
Username: a4816234 		Password: tunebrainz!23		Server: server12.000webhost.com
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>TuneBrainz | Home</title>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<script type="text/javascript" src="backend/getdetails.js"></script>
		<script type="text/javascript" src="js/jit.js"></script>
		<script type="text/javascript" src="js/buildgraph.js"></script>
		<script type="text/javascript" src="js/jquery-jplayer/jquery.jplayer.js"></script>
		<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
		<script type="text/javascript"><!--Insert immediate scripts here--></script>
		<link type="text/css" rel="stylesheet" href="mainbeta.css"/>
		<link type="text/css" rel="stylesheet" href="tabs.css"/>
		<link type="text/css" href="css/ForceDirected.css" rel="stylesheet"/>
		<link type="text/css" href="js/musicplayercss/style.css" rel="stylesheet"/>
		<link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>
	</head>

	<body>
			<div id="sidebar" style="display: none;">
				<ul>
					<li class="sidebar-item side-selected first-item">Welcome</li>
					<li class="sidebar-item">Discover</li>
					<li class="sidebar-item">Latest</li>
					<li class="sidebar-item">Search</li>
					<li class="sidebar-item last-item">View Map</li>
				</ul>
			</div>
			<div id="home" class="tab">
				<div id="home-head"><img src="data/images/web/logo.png"/></div>
				<div id="home-sub">Ontology Intelligence with Music and Books</div>
			</div>
			<div id="search" class="tab">
				<div>Search here</div>
				<div>Type your query below</div>
				<div>
					<input type="text" id="search-query" placeholder="Search here" style="font-size: 36px;border: none;background-color: transparent;border-bottom: 1px solid #aaa;width: 98%;"/>
				</div>
				<div id="search-showcase">
					<div id="concept-matches" class="showcase-case">
						<h5>Concept Matches</h5>
						<ul>
							<a href="git_cheat_sheet.pdf" target="iframe-book">
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));">
									<img src="data/images/books/Inferno.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">Inferno</div>
								<br/>
								<div class="showcase-case-item-artist">Dan Brown</div>
							</li>
							</a>
							<a href="Odyssey.pdf" target="iframe-book">
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover" data-mp3="data/tracks/StudioAlbums/InTheEnd.mp3" data-title="In The End" data-artist="Linkin Park" data-duration="03:36" data-cover="data/images/albums/HybridTheory.jpg" onclick="playMusic($(this));">
									<img src="data/images/books/GodOfSmallThings.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">God Of Small Things</div>
								<br/>
								<div class="showcase-case-item-artist">Arundhati Roy</div>
							</li>
							</a>
						</ul>
					</div>
					<div id="related-matches" class="showcase-case">
						<h5>Related</h5>
						<ul>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/albums/Fearless.jpg"/>
									<div class="showcase-case-item-playbtn" title="Play this track"></div>
								</div>
								<div class="showcase-case-item-track">Love Story</div>
								<br/>
								<div class="showcase-case-item-artist">Taylor Swift</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/albums/HybridTheory.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">In The End</div>
								<br/>
								<div class="showcase-case-item-artist">Linkin Park</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/albums/Aashiqui2.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">Tum Hi Ho</div>
								<br/>
								<div class="showcase-case-item-artist">Arijit Singh</div>
							</li>
						</ul>
				
					</div>
						<iframe style='margin: 0 15px 15px 0;float:right;width:50%;height:100%' name="iframe-book" frameborder="0" scrolling="no" src="git_cheat_sheet.pdf"></iframe>

				</div>
			</div>
			<div id="ontomap" class="tab">
				<div id="ontologyGraph"></div>
				<div id="log" style="display: none;"></div>
			</div>
			
		</div>
		<div id="footer">
			<div id="foot-main">
				<div id="logo" class="foot-tab foot-tab-selected" onclick="openTab('home');showHome();">TuneBrainz</div>
				<div class="foot-tab" onclick="openTab('discover')">Discover</div>
				<div class="foot-tab" onclick="openTab('latest')">Latest</div>
				<div class="foot-tab" onclick="openTab('ontomap')">Ontology Map</div>
				<div class="foot-tab" onclick="openTab('search');$('#search-query').focus();"><img src="http://localhost/data/images/web/search.png"/></div>
				<div id="musicPlayer"></div>
			</div>
			<div id="foot-low" style="padding-right: 10px;">This Experiment brought to you by
				<input id="footer-button" type="button" onclick="$(this).hide();scrollNames();" value="Group-6" title="Click for DevTeam"/>
				<div id="names">
					<span>Shivam</span>
					<span>&nbsp;Akif&nbsp;</span>
					<span>Archit</span>
					<span>Mithun</span>
				</div>
			&copy; 2013 IIIT-Delhi</div>
		</div>
	</body>
</html>
