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
		<script type="text/javascript" src="scripts.js"></script>
		<script type="text/javascript" src="backend/getdetails.js"></script>
		<!--<script type="text/javascript" src="js/jquery.elevatezoom.js"></script>-->
		<script type="text/javascript" src="js/jit.js"></script>
		<script type="text/javascript" src="js/buildgraph.js"></script>
		<script type="text/javascript"><!--Insert immediate scripts here--></script>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<!--<link type="text/css" href="css/base.css" rel="stylesheet"/>-->
		<link type="text/css" href="ForceDirected.css" rel="stylesheet"/>
	</head>

	<body>
		<div id="left-overlay">
			<div id="pullmap">
<!--				<img src="pullmap.png"/>-->
				<p class="rotate">Pull Ontology Map</p>
			</div>
			<div style="border-bottom: 2px solid #ddd;text-align: right;margin: 2px;margin-top: 25px;">
				<div id="overlay-close">Close</div>
				<div style="font-family: verdana;font-weight: bolder;">Ontology Map</div>
			</div>
			<div id="overlay-main">
				<!--<img id="overlay-mapImage" src="data/images/ont/ontologySmall.jpg" data-zoom-image="data/images/ont/ontologyLarge.jpg"/>-->
				<div id="ontologyGraph"></div>
			</div>
			<div id="overlay-footer"><div id="log" style="display:none;"></div>Click on the Ontology items to explore</div>
		</div>
		<div id="wrapper">
			<div id="lightbox-overlay"></div>
			<div id="heading"><span class="heading-head">TuneBrainz</span> Ontology Intelligence with Music and Books</div>
			<div style="width: 100%;margin-top:5px;">
				<div id="searchBox">
					<div id="searchBox-text">Search:</div>
					<form id="queryDB" method="post" action="query.php">
						<input type="text" id="searchInput" name="q" placeholder="Type Query Here..."/>
						<input type="submit" style="display: none;"/>
					</form>
				</div>
			</div>
			<div id="stage">
				<div id="rightInfobox">
					Click on a file to get its details<br/>
					<!--<input type="button" onclick="getDetails('BadtameezDil.mp3.xml');" value="get Details"/>-->
				</div>
				<p id="receiver">
					<input type="button" onclick="fetchXML();$(this).remove();" value="Get Data"/>
				</p>
			</div>
		</div>
		<div id="footer">
			<div style="padding-right: 10px;">This Experiment brought to you by
				<input type="button" onclick="$(this).hide();scrollNames();" value="Group-6"/>
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
