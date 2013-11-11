<?php
function senderror(){
	echo "{'error' : 1}";
}
//	search.php
//	Will search for files with the concept that we need

$concept = $_GET['c'];
$dir = "../data/xml/";
$darr = array(".", "..");
// Open xml  directory, and read its contents
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		$data = array();
		while ($file = readdir($dh)){
			if(!in_array($file, $darr)){
				//finally we get a file
				if (findConcept($concept, ($dir.$file))){
					array_push($data, $file);	//push the file onto the json's array to be pushed to the UI
				}
			}
		}
		$js = array();
		$js["files"] = $data;
		$js["error"] = 0;
		closedir($dh);
		echo json_encode($js);
	}
	else{
		echo "could not open";
		senderror();
	}
}
else{
	echo "no such directory";
	senderror();
}

function findConcept($concept, $file){
	if (strtolower($concept) == "thing"){
		return true;
	}
	$xml = simplexml_load_file($file);
	
	echo $xml;
	return true;
}