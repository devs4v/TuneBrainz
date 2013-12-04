<?php
/* get.php get the file information from itunes */
$url = "http://itunes.apple.com/search?";
$term = urlencode($_GET['q']);
$t = $_GET['t'];
if($t == "music"){
	$type = "musicTrack";
}
elseif($t == "book"){
	$type = "ebook";
}
$request = $url."term=".$term."&entity=".$type."&limit=20";

$response = file_get_contents($request);
echo $response;
?>