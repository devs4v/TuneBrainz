<?php

error_reporting(0);
$url = "http://itunes.apple.com/search?term=";
$musictype = "&entity=musicTrack";
$booktype = "&entity=ebook";
$q = urlencode($_GET['q']);


$musicarr = array();
//search music
	$request = $url.$q.$musictype;
	$response = file_get_contents($request);
	$response = json_decode($response, true);
	

	if(isset($response['results'])){
		foreach($response['results'] as $item){
			if($item['kind'] == "song"){
				$musicdata = array();
				
				$musicdata['track'] = $item['trackName'];
				$musicdata['cover'] = $item['artworkUrl100'];
				$musicdata['album'] = $item['collectionCensoredName'];
				$musicdata['albumlink'] = $item['collectionViewUrl'];
				$musicdata['duration'] = $item['trackTimeMillis'];
				$musicdata['preview'] = $item['previewUrl'];
				$musicdata['producer'] = "N/A";
				$musicdata['artist'] = $item['artistName'];
				$musicdata['genre'] = $item['primaryGenreName'];
				$musicdata['releasedate'] = $item['releaseDate'];
				$musicdata['link'] = $item['trackViewUrl'];
			}
			array_push($musicarr, $musicdata);
		}
	}

$bookarr = array();

	$request = $url.$q.$booktype;
	$response = file_get_contents($request);
	$response = json_decode($response, true);
	

	if(isset($response['results'])){
		foreach($response['results'] as $item){
			
				$bookdata = array();
				$bookdata['name'] = $item['trackName'];
				$bookdata['image'] = $item['artworkUrl100'];
				$bookdata['author'] = $item['artistName'];
				$bookdata['publisher'] = "N/A";
					$g = "";
					foreach($item['genres'] as $genre){$g = $g.$genre;}
				$bookdata['genre'] = $g;
				$bookdata['releasedate'] = $item['releaseDate'];
				$bookdata['link'] = $item['trackViewUrl'];
			array_push($bookarr, $bookdata);
		}
	}



$data = array();
$data['music'] = $musicarr;
$data['books'] = $bookarr;

echo json_encode($data);

?>