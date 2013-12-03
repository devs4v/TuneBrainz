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
		<script type="text/javascript" src="jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<script type="text/javascript" src="backend/getdetails.js"></script>
		<script type="text/javascript" src="js/jit.js"></script>
		<script type="text/javascript" src="js/buildgraph.js"></script>
		<script type="text/javascript" src="js/jquery-jplayer/jquery.jplayer.js"></script>
		<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
		<link type="text/css" rel="stylesheet" href="mainbeta.css"/>
		<link type="text/css" rel="stylesheet" href="tabs.css"/>
		<link type="text/css" href="css/ForceDirected.css" rel="stylesheet"/>
		<link type="text/css" href="js/musicplayercss/style.css" rel="stylesheet"/>
		<link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>
	</head>

	<body>
			<div id="sidebar">
				<ul>
					<li class="sidebar-item side-selected first-item" title="Go back to Homepage">Welcome</li>
					<li class="sidebar-item" title="Latest at TuneBrainz" onclick="openTab('latest')">Latest</li>
					<li class="sidebar-item" title="View Ontology Map" onclick="openTab('ontomap')">View Map</li>
					<li class="sidebar-item last-item" title="Search" onclick="openTab('search');$('#search-query').focus();">Search</li>
				</ul>
			</div>
			<div id="home" class="tab">
				<div id="home-head"><img src="data/images/web/logo.png"/></div>
				<div id="home-sub">Ontology Intelligence with Music and Books</div>
			</div>
			<div id="latest" class="tab">
				<div class="showbar">
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Fearless.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Love Story</div>
								<div class="showbar-item-artist">Taylor Swift</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Aashiqui2.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Tum Hi Ho</div>
								<div class="showbar-item-artist">Aashiqui2</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/AgentVinod.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Raabta</div>
								<div class="showbar-item-artist">Agent Vinod</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/ChennaiExpress.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">One Two Three Four</div>
								<div class="showbar-item-artist">Chennai Express</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/CurtainCall.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">When I'm Gone</div>
								<div class="showbar-item-artist">Eminem</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/HybridTheory.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">In The End</div>
								<div class="showbar-item-artist">Linkin Park</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Insomniac.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Do You Know</div>
								<div class="showbar-item-artist">Enqrique Iglesias</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/JabWeMet.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Tumse Hi</div>
								<div class="showbar-item-artist">Mohit Chauhan</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Love.png"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">On The Floor</div>
								<div class="showbar-item-artist">Jennifer Lopez</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/NautankiSaala.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Saddi Gali Aaja</div>
								<div class="showbar-item-artist">Ayushmaan Khurraana</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/OceanEyes.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Fireflies</div>
								<div class="showbar-item-artist">Owl City</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Race2.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Lat Lag Gayee</div>
								<div class="showbar-item-artist">Benny Dayal</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Rockstar.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Tum Ho</div>
								<div class="showbar-item-artist">Mohit Chauhan</div>
							</div>
						</div>
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/Trouble.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">Lonely</div>
								<div class="showbar-item-artist">Akon</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="search" class="tab">
				<div>Search here</div>
				<div>Type your query below</div>
				<div>
					<input type="text" id="search-query" placeholder="Search here"/>
				</div>
				<div id="search-showcase">
					<div id="concept-matches" class="showcase-case">
						<h5>Concept Matches</h5>
						<ul>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-duration="03:56" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));">
									<img src="data/images/albums/Fearless.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-details">
									<div class="showcase-case-item-track">Love Story</div>
									<br/>
									<div class="showcase-case-item-artist">Taylor Swift</div>
								</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover" data-mp3="data/tracks/StudioAlbums/InTheEnd.mp3" data-title="In The End" data-artist="Linkin Park" data-duration="03:36" data-cover="data/images/albums/HybridTheory.jpg" onclick="playMusic($(this));">
									<img src="data/images/albums/HybridTheory.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">In The End</div>
								<br/>
								<div class="showcase-case-item-artist">Linkin Park</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover" data-mp3="data/tracks/MovieAlbums/TumHiHo.mp3" data-title="Tum Hi Ho" data-artist="Arijit Singh" data-duration="04:22" data-cover="data/images/albums/Aashiqui2.jpg" onclick="playMusic($(this));">
									<img src="data/images/albums/Aashiqui2.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">Tum Hi Ho</div>
								<br/>
								<div class="showcase-case-item-artist">Arijit Singh</div>
							</li>
						</ul>
					</div>
					<div id="related-books" class="showcase-case">
						<h5>Related Books</h5>
						<ul>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/books/KillList.jpg"/>
									<div class="showcase-case-item-playbtn" title="Play this track"></div>
								</div>
								<div class="showcase-case-item-track">Kill List</div>
								<br/>
								<div class="showcase-case-item-artist">Frederick Forsyth</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/books/Inferno.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">Inferno</div>
								<br/>
								<div class="showcase-case-item-artist">Dan Brown</div>
							</li>
						</ul>
					</div>
					<div id="related-music" class="showcase-case">
						<h5>Related Music</h5>
						<ul>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/albums/Trouble.jpg"/>
									<div class="showcase-case-item-playbtn" title="Play this track"></div>
								</div>
								<div class="showcase-case-item-track">Lonely</div>
								<br/>
								<div class="showcase-case-item-artist">Akon</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/albums/CurtainCall.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">When I'm Gone</div>
								<br/>
								<div class="showcase-case-item-artist">Eminem</div>
							</li>
							<li class="showcase-case-item">
								<div class="showcase-case-item-albumcover">
									<img src="data/images/albums/Insomniac.jpg"/>
									<div class="showcase-case-item-playbtn"></div>
								</div>
								<div class="showcase-case-item-track">Do You Know</div>
								<br/>
								<div class="showcase-case-item-artist">Enrique Iglesias</div>
							</li>
						</ul>
					</div>
					<div id="av"></div>
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
