<?php
//openXML.php
//Will open the particular file and fetch all the relevant details to show.

$file = $_GET['file'];
$file = "BadtameezDil.mp3.xml";

$dir = "/data/XML/";

echo "<a href=".$dir.$file.">Click Here</a>";
?>