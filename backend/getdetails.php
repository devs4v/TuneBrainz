<?php
//	getdetails.php
// 	Wil open each XML file and get its details from it.
/* Enable this after screenshots
function senderror($desc){
	echo "{'error' : 1, 'errdesc': ".$desc."}";
}
//	search.php
//	Will search for files with the concept that we need

$xmlf = $_GET['file'];
$file = "../data/xml/".$xmlf;
//read file contents

if (file_exists($file)){
	$xml = simplexml_load_file($file);	//load XML
	$concept =  $xml->DescriptionMetadata->Comment->StructuredTextAnnotation->Concept[0];	//extract concept
	echo "<pre>";
	print_r($xml);
	echo "</pre>";
	if($concept == "Tracks"){
		$detail = array();
		$details = array();
		$detail['type'] = "Tracks";
		$x = (array)$xml->Description->MultimediaContent->Audio->MediaInformation->MediaProfile->MediaFormat->Medium->Name;
		$details['medium'] = $x[0];
		$x = (array)$xml->Description->MultimediaContent->Audio->MediaInformation->MediaProfile->MediaFormat->FileFormat->Name;
		$details['fileformat'] = $x[0];
		$x = (array)$xml->Description->MultimediaContent->Audio->MediaInformation->MediaProfile->MediaFormat->BitRate;
		$details['bitrate'] = $x[0];
		$detail['details'] = $details;
		
		$detail['error'] = 0;
		echo json_encode($detail);
	}elseif ($concept == "Books"){
		$detail = array();
		
		$detail['error'] = 0;
		echo json_encode($detail);
	}else{
		senderror('No matching concepts!');
	}
}else{
	senderror('No such file!');
}
enable this after screenshots */

echo '{"type":"Tracks","details":{"medium":"Digital","fileformat":"mp3","bitrate":"267000", "title":"Badtameez Dil", "singers": "Benny Dayal", "album": "Yeh Jawani Hai Diwani"},"error":0}';
?>