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
		<title>TuneBrainz | SPARQL Query</title>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<script type="text/javascript" src="backend/getdetails.js"></script>
		<script type="text/javascript" src="js/jquery.elevatezoom.js"></script>
		<script type="text/javascript"><!--Insert immediate scripts here--></script>
		<link rel="stylesheet" href="main.css"/>
	</head>
	
	<body>
		<div id="left-overlay">
                        <div id="pullmap">
<!--                            <img src="pullmap.png"/>-->
                                <p class="rotate">Pull Ontology Map</p>
                        </div>

			<div style="border-bottom: 2px solid #ddd;text-align: right;margin: 2px;margin-top: 25px;">
				<div id="overlay-close">Close</div>
				<div style="font-family: verdana;font-weight: bolder;">Ontology Map</div>
			</div>
			<div id="overlay-main">
				<img id="overlay-mapImage" src="data/images/ont/ontologySmall.jpg" data-zoom-image="data/images/ont/ontologyLarge.jpg"/>
			</div>
			<div id="overlay-footer">Click on the Ontology items to explore</div>
		</div>
		<div id="wrapper">
			<div id="lightbox-overlay"></div>
			<div id="heading"><span class="heading-head">TuneBrainz</span> Ontology Intelligence with Music and Books</div>
			<div style="width: 100%;margin-top:5px;">
				<div id="searchBox">
					<div id="searchBox-text">Search</div>
					<form id="queryDB" method="post" action="query.php">
						<input type="text" id="searchInput" name="q" placeholder="Type Query Here..."/>
						<input type="submit" style="display: none;"/>
					</form>
				</div>
			</div>
			<div id="stage">
				<div id="rightInfobox">
<!--					This happens to be written inside infobox<br/>
					<input type="button" onclick="getDetails('BadtameezDil.mp3.xml');" value="get Details"/>
-->

							
<!--					<div id="textarea1">-->

<!--					<h2>SPARQL Query</h2>-->

<!--					<textarea name="query" cols="70" rows="15">-->
				<h3 style="margin:2px 0 0 2px;color:#3fada8">SPARQL Query</h3>
	

					<textarea name="query">
"PREFIX onto: <http://example.org/book/>
SELECT ?subject ?object
WHERE
{ ?subject ?property ?object }"
					</textarea>

					<br />
					<input type="submit" value="Submit"/>

<!--					</div>-->


				</div>
				<div id="receiver-2">
<!--					<input type="button" onclick="fetchXML();$(this).remove();" value="Get Data"/>-->
<h3 style="margin:10px 0 0 10px;color:#3fada8">SPARQL Query Result</h3>

<table>
        <tr>
                <th>?subject</th>
                <th>?object</th>
        </tr>

        <tr>
                <td>subject-1</td>
                <td>obect-1</td>
        </tr>
        <tr>
                <td>subject-2</td>
                <td>obect-2</td>
        </tr>
        <tr>
                <td>subject-3</td>
                <td>obect-3</td>
        </tr>
        <tr>
                <td>subject-4</td>
                <td>obect-4</td>
        </tr>
        <tr>
                <td>subject-5</td>
                <td>obect-5</td>
        </tr>
        <tr>
                <td>subject-6</td>
                <td>obect-6</td>
        </tr>
</table>
</div>


			</div>
		</div>
                <div id="footer">
                        <div style="padding-right: 10px;">This Experiment brought to you by
                                <input id="footer-button" type="button" onclick="$(this).hide();scrollNames();" value="Group-6"/>
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
