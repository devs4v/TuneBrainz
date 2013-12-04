<?php


$request = "http://itunes.apple.com/us/rss/topsongs/genre=9008/json";	//top songs
//$request = $url."term=".$term."&entity=".$type."&limit=20";
$request = "http://itunes.apple.com/us/rss/topebooks/genre=10049/json";	//top ebooks

$request = "http://itunes.apple.com/us/rss/topsongs/genre=6/json";
$response = file_get_contents($request);
$response = json_decode($response, true);

foreach($response['feed']['entry'] as $item){
	$musictrack = $item['im:name']['label'];
	$musiccover = $item['im:image']['2']['label'];
	$musicalbum = $item['im:collection']['im:name']['label'];
	$musicalbumlink = $item['im:collection']['link']['attributes']['href'];
	$musicduration = $item['link'][1]['im:duration']['label'];
	$musicpreview = $item['link'][1]['attributes']['href'];
	$musicproducer = $item['rights']['label'];
	$musicartist = $item['im:artist']['label'];
	$musicgenre = $item['category']['attributes']['label'];
	$musicreleasedate = $item['im:releaseDate']['attributes']['label'];
	$musiclink = $item['id']['label'];
	
	echo "<div style='padding-left: 20px;margin-bottom: 50px;float: left;'>";
	echo "<b>".$musictrack."</b> by ".$musicartist." (".$musicgenre.")<br/>";
	echo "Album: <a href='".$musicalbumlink."'>".$musicalbum."</a><br/>";
	echo "<img src='".$musiccover."'/><br/>";
	echo "Production: ".$musicproducer."<br/>";
	echo $musicreleasedate."<br/>";
	echo "<a target='_blank' href='".$musicpreview."'>Preview this track</a><br/>";
	echo "<a href='".$musiclink."'>Buy this track on iTunes</a><br/>";

	echo "</div>";
	
}








/*		For books
foreach($response['feed']['entry'] as $item){
	$bookname = $item['im:name']['label'];
	$bookimage = $item['im:image']['2']['label'];
	$booksummary = $item['summary']['label'];
	$bookauthor = $item['im:artist']['label'];
	$bookgenre = $item['category']['attributes']['label'];
	$bookreleasedate = $item['im:releaseDate']['attributes']['label'];
	$booklink = $item['id']['label'];
	
	echo "<div style='padding-left: 20px;margin-bottom: 50px;float: left;'>";
	echo "<b>".$bookname."</b> by ".$bookauthor." (".$bookgenre.")<br/>";
	echo "<img src='".$bookimage."'/><br/>";
	echo $bookreleasedate."<br/>";
	echo "<a href='".$booklink."'>Buy this book on iTunes</a><br/>";
	echo "</div>";
	
}*/

echo "<br/>";
echo "<pre style='clear:left;'>";
print_r ($response);
echo "</pre>";

?>