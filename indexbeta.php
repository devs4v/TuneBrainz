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
					<li class="sidebar-item last-item" title="Search" onclick="openTab('search');$('#search-query').val('').focus();">Search</li>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/LoveStory.mp3" data-title="Love Story" data-artist="Taylor Swift" data-cover="data/images/albums/Fearless.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/MovieAlbums/TumHiHo.mp3" data-title="Tum Hi Ho" data-artist="Arijit Singh" data-cover="data/images/albums/Aashiqui2.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/MovieAlbums/Raabta.mp3" data-title="Raabta" data-artist="Artist" data-cover="data/images/albums/AgentVinod.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/MovieAlbums/OneTwoThreeFour.mp3" data-title="One Two Three Four" data-artist="Vishal Dadlani, Hamsika Iyer" data-cover="data/images/albums/ChennaiExpress.jpg" onclick="playMusic($(this));"></div>
							<div class="showbar-item-albumcover">
								<img src="data/images/albums/ChennaiExpress.jpg"/>
								<div class="showbar-item-overlay"></div>
							</div>
							<div class="showbar-item-details">
								<div class="showbar-item-type">Track</div>
								<div class="showbar-item-track">One Two Three Four</div>
								<div class="showbar-item-artist">Vishal Dadlani, Hamsika Iyer</div>
							</div>
						</div>
					</div>
					<div class="showbar-col">
						<div class="showbar-item">
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/WhenImGone.mp3" data-title="When Im Gone" data-artist="Eminem" data-cover="data/images/albums/CurtainCall.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/InTheEnd.mp3" data-title="In The End" data-artist="Linkin Park" data-cover="data/images/albums/HybridTheory.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/DoYouKnow.mp3" data-title="Do You Know" data-artist="Enqrique Iglesias" data-cover="data/images/albums/Insomniac.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/MovieAlbums/TumseHi.mp3" data-title="Tumse Hi" data-artist="Mohit Chauhan" data-cover="data/images/albums/JabWeMet.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/OnTheFloor.mp3" data-title="On The Floor" data-artist="Jennifer Lopez" data-cover="data/images/albums/Love.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/MovieAlbums/SaddiGaliAaja.mp3" data-title="Saddi Gali Aaja" data-artist="Ayushmaan Khurraana" data-cover="data/images/albums/NautankiSaala.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/Fireflies.mp3" data-title="Fireflies" data-artist="Owl City" data-cover="data/images/albums/OceanEyes.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/MovieAlbums/LatLagGayee.mp3" data-title="Lat Lag Gayee" data-artist="Benny Dayal" data-cover="data/images/albums/Race2.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/TumHo.mp3" data-title="Tum Ho" data-artist="Mohit Chauhan" data-cover="data/images/albums/Rockstar.jpg" onclick="playMusic($(this));"></div>
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
							<div class="showbar-item-playbtn" data-mp3="data/tracks/StudioAlbums/Lonely.mp3" data-title="Lonely" data-artist="Akon" data-cover="data/images/albums/Trouble.jpg" onclick="playMusic($(this));"></div>
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
							<li>
								<div class="showcase-case-item showcase-case-item-typetrack">
									<div class="showcase-case-item-type">Track</div>
									<div class="showcase-case-item-albumcover" onclick="playMusic($(this));">
										<img src="data/images/albums/HybridTheory.jpg"/>
										<div class="showcase-case-item-playbtn"></div>
									</div>
									<div class="showcase-case-item-details">
										<div class="showcase-case-item-track">In The End</div>
										<br/>
										<div class="showcase-case-item-artist">Linkin Park</div>
									</div>
								</div>
								
								<div class="showcase-case-description">
									<div class="showcase-case-desc-type">Track</div>
									<div class="showcase-case-desc-cover">
										<img src="#" id="showcase-case-desc-coverimage"/>
										<a href="#" class="showcase-case-desc-albumlink"><div class="showcase-case-desc-album">Album:<span>Hybrid Theory</span></div></a>
									</div>
									<div class="showcase-case-desc-details">
										<div class="showcase-case-desc-track">Track: <span>In The End</span></div>
										<div class="showcase-case-desc-artist">By: <span>Linkin Park</span></div>
										<div class="showcase-case-desc-genre">Genre: <span>Rock</span></div>
										<div class="showcase-case-desc-duration">Duration: <span>03:36</span></div>
										<a href="#" class="showcase-case-desc-previewlink" target="_blank"><div class="showcase-case-desc-preview">Preview this Track</div></a>
										<div class="showcase-case-desc-production">Production: <span>Whatever Records, Inc.</span></div>
										<div class="showcase-case-desc-releasedate">October 23, 2007</div>
										<a href="#" class="showcase-case-desc-musiclink" target="_blank"><div class="showcase-case-desc-music">Buy this Track on iTunes</div></a>
									</div>
								</div>
							</li>
							<li>
								<div class="showcase-case-item showcase-case-item-typebook">
									<div class="showcase-case-item-type">Track</div>
									<div class="showcase-case-item-albumcover" onclick="playMusic($(this));">
										<img src="data/images/albums/HybridTheory.jpg"/>
										<div class="showcase-case-item-playbtn"></div>
									</div>
									<div class="showcase-case-item-details">
										<div class="showcase-case-item-track">In The End</div>
										<br/>
										<div class="showcase-case-item-artist">Linkin Park</div>
									</div>
								</div>
								<div class="showcase-case-description">
									<div class="showcase-case-desc-type">Track</div>
									<div class="showcase-case-desc-cover">
										<img src="#" id="showcase-case-desc-coverimage"/>
										<a href="#" class="showcase-case-desc-albumlink"><div class="showcase-case-desc-album">Hybrid Theory</div></a>
									</div>
									<div class="showcase-case-desc-details">
										<div class="showcase-case-desc-track">Track: <span>In The End</span></div>
										<div class="showcase-case-desc-artist">By: <span>Linkin Park</span></div>
										<div class="showcase-case-desc-genre">Genre: <span>Rock</span></div>
										<div class="showcase-case-desc-duration">Duration: <span>03:36</span></div>
										<a href="#" class="showcase-case-desc-previewlink" target="_blank"><div class="showcase-case-desc-preview">Preview this Track</div></a>
										<div class="showcase-case-desc-production">Production: <span>Whatever Records, Inc.</span></div>
										<div class="showcase-case-desc-releasedate">October 23, 2007</div>
										<a href="#" class="showcase-case-desc-musiclink" target="_blank"><div class="showcase-case-desc-music">Buy this Track on iTunes</div></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div id="related-books" class="showcase-case">
						<h5>Related Books</h5>
						<ul></ul>
					</div>
					<div id="related-music" class="showcase-case">
						<h5>Related Music</h5>
						<ul></ul>
					</div>
				</div>
				<div id="av" style="display: inline; float: left;">Waiting....</div>
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
				<div class="foot-tab" onclick="openTab('search');$('#search-query').val('').focus();"><img src="http://localhost/data/images/web/search.png"/></div>
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