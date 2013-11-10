<?php
function senderror(){
	echo "{'error' : 1}";
}
$dir = "../data/xml/";
$darr = array(".", "..");
// Open a directory, and read its contents
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		$data = array();
		while ($file = readdir($dh)){
			if(!in_array($file, $darr)){
				array_push($data, $file);
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
?>