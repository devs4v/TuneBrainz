<?php
/* getgenres.php */
/* get all the genres for a particular query */

// Search in books
$url = "http://itunes.apple.com/search?";
$term = urlencode($_GET['q']);
$request = $url."term=".$term."&entity=musicTrack&limit=20";

$response = file_get_contents($request);
$a = json_decode($response, true);
$d = array();
foreach($a['results'] as $res){
	if ($res['primaryGenreName'] != "Soundtrack" and $res['primaryGenreName'] != "Music"){
		$d[$res['primaryGenreName']] = 1;
	}
}
$g = array();
foreach($d as $key => $val){
	array_push($g, $key);
}
$music = array();

//Select top 3 genres
if (count($g)>3){
	for($i = 0; $i < 3;$i++){
		array_push($music, $g[$i]); 
	}
}
else{
	$music = $g;
}


//Search in music
$url = "http://itunes.apple.com/search?";
$term = urlencode($_GET['q']);
$request = $url."term=".$term."&entity=ebook&limit=20";

$response = file_get_contents($request);
$a = json_decode($response, true);



$d = array();
foreach($a['results'] as $res){
	foreach($res['genres'] as $res2){
		if($res2 != "Books"){
			$d[$res2] = 1;
		}
	}
}

$g = array();
foreach($d as $key => $val){
	array_push($g, $key);
}

//Select top 3 genres
$books = array();
if (count($g)>3){
	for($i = 0; $i < 3;$i++){
		array_push($books, $g[$i]); 
	}
}
else{
	$books = $g;
}




/* Get tracks based on the genres identified */
$datatype = "/json";
$bookurl = "http://itunes.apple.com/us/rss/topebooks/genre=";
$musicurl = "http://itunes.apple.com/us/rss/topsongs/genre=";
$map = array('Music' => '34','Blues' => '2','Chicago Blues' => '1007','Classic Blues' => '1009','Contemporary Blues' => '1010','Country Blues' => '1011','Delta Blues' => '1012','Electric Blues' => '1013','Acoustic Blues' => '1210','Comedy' => '3','Novelty' => '1167','Standup Comedy' => '1171','Children’s Music' => '4','Lullabies' => '1014','Sing-Along' => '1015','Stories' => '1016','Classical' => '5','Avant-Garde' => '1017','Baroque' => '1018','Chamber Music' => '1019','Chant' => '1020','Choral' => '1021','Classical Crossover' => '1022','Early Music' => '1023','Impressionist' => '1024','Medieval' => '1025','Minimalism' => '1026','Modern Composition' => '1027','Opera' => '1028','Orchestral' => '1029','Renaissance' => '1030','Romantic' => '1031','Wedding Music' => '1032','High Classical' => '1211','Country' => '6','Alternative Country' => '1033','Americana' => '1034','Bluegrass' => '1035','Contemporary Bluegrass' => '1036','Contemporary Country' => '1037','Country Gospel' => '1038','Honky Tonk' => '1039','Outlaw Country' => '1040','Traditional Bluegrass' => '1041','Traditional Country' => '1042','Urban Cowboy' => '1043','Electronic' => '7','Ambient' => '1056','Downtempo' => '1057','Electronica' => '1058','IDM/Experimental' => '1060','Industrial' => '1061','Holiday' => '8','Chanukah' => '1079','Christmas' => '1080','Christmas: Children’s' => '1081','Christmas: Classic' => '1082','Christmas: Classical' => '1083','Christmas: Jazz' => '1084','Christmas: Modern' => '1085','Christmas: Pop' => '1086','Christmas: R&B' => '1087','Christmas: Religious' => '1088','Christmas: Rock' => '1089','Easter' => '1090','Halloween' => '1091','Holiday: Other' => '1092','Thanksgiving' => '1093','Opera' => '9','Singer/Songwriter' => '10','Alternative Folk' => '1062','Contemporary Folk' => '1063','Contemporary Singer/Songwriter' => '1064','Folk-Rock' => '1065','New Acoustic' => '1066','Traditional Folk' => '1067','Jazz' => '11','Big Band' => '1052','Avant-Garde Jazz' => '1106','Contemporary Jazz' => '1107','Crossover Jazz' => '1108','Dixieland' => '1109','Fusion' => '1110','Latin Jazz' => '1111','Mainstream Jazz' => '1112','Ragtime' => '1113','Smooth Jazz' => '1114','Hard Bop' => '1207','Trad Jazz' => '1208','Cool' => '1209','Latino' => '12','Latin Jazz' => '1115','Contemporary Latin' => '1116','Pop Latino' => '1117','Raíces' => '1118','Reggaeton y Hip-Hop' => '1119','Baladas y Boleros' => '1120','Alternativo & Rock Latino' => '1121','Regional Mexicano' => '1123','Salsa y Tropical' => '1124','New Age' => '13','Environmental' => '1125','Healing' => '1126','Meditation' => '1127','Nature' => '1128','Relaxation' => '1129','Travel' => '1130','Pop' => '14','Adult Contemporary' => '1131','Britpop' => '1132','Pop/Rock' => '1133','Soft Rock' => '1134','Teen Pop' => '1135','R&B/Soul' => '15','Contemporary R&B' => '1136','Disco' => '1137','Doo Wop' => '1138','Funk' => '1139','Motown' => '1140','Neo-Soul' => '1141','Quiet Storm' => '1142','Soul' => '1143','Soundtrack' => '16','Foreign Cinema' => '1165','Musicals' => '1166','Original Score' => '1168','Soundtrack' => '1169','TV Soundtrack' => '1172','Dance' => '17','Breakbeat' => '1044','Exercise' => '1045','Garage' => '1046','Hardcore' => '1047','House' => '1048','Jungle/Drum’n’bass' => '1049','Techno' => '1050','Trance' => '1051','Hip-Hop/Rap' => '18','Alternative Rap' => '1068','Dirty South' => '1069','East Coast Rap' => '1070','Gangsta Rap' => '1071','Hardcore Rap' => '1072','Hip-Hop' => '1073','Latin Rap' => '1074','Old School Rap' => '1075','Rap' => '1076','Underground Rap' => '1077','West Coast Rap' => '1078','World' => '19','Afro-Beat' => '1177','Afro-Pop' => '1178','Cajun' => '1179','Celtic' => '1180','Celtic Folk' => '1181','Contemporary Celtic' => '1182','Drinking Songs' => '1184','Indian Pop' => '1185','Japanese Pop' => '1186','Klezmer' => '1187','Polka' => '1188','Traditional Celtic' => '1189','Worldbeat' => '1190','Zydeco' => '1191','Caribbean' => '1195','South America' => '1196','Middle East' => '1197','North America' => '1198','Hawaii' => '1199','Australia' => '1200','Japan' => '1201','France' => '1202','Africa' => '1203','Asia' => '1204','Europe' => '1205','South Africa' => '1206','Alternative' => '20','College Rock' => '1001','Goth Rock' => '1002','Grunge' => '1003','Indie Rock' => '1004','New Wave' => '1005','Punk' => '1006','Rock' => '21','Adult Alternative' => '1144','American Trad Rock' => '1145','Arena Rock' => '1146','Blues-Rock' => '1147','British Invasion' => '1148','Death Metal/Black Metal' => '1149','Glam Rock' => '1150','Hair Metal' => '1151','Hard Rock' => '1152','Metal' => '1153','Jam Bands' => '1154','Prog-Rock/Art Rock' => '1155','Psychedelic' => '1156','Rock & Roll' => '1157','Rockabilly' => '1158','Roots Rock' => '1159','Singer/Songwriter' => '1160','Southern Rock' => '1161','Surf' => '1162','Tex-Mex' => '1163','Christian & Gospel' => '22','CCM' => '1094','Christian Metal' => '1095','Christian Pop' => '1096','Christian Rap' => '1097','Christian Rock' => '1098','Classic Christian' => '1099','Contemporary Gospel' => '1100','Gospel' => '1101','Praise & Worship' => '1103','Southern Gospel' => '1104','Traditional Gospel' => '1105','Vocal' => '23','Standards' => '1173','Traditional Pop' => '1174','Vocal Jazz' => '1175','Vocal Pop' => '1176','Reggae' => '24','Dancehall' => '1183','Roots Reggae' => '1192','Dub' => '1193','Ska' => '1194','Easy Listening' => '25','Bop' => '1053','Lounge' => '1054','Swing' => '1055','J-Pop' => '27','Enka' => '28','Anime' => '29','Kayokyoku' => '30','Fitness & Workout' => '50','K-Pop' => '51','Karaoke' => '52','Instrumental' => '53','Brazilian' => '1122','Axé' => '1220','Bossa Nova' => '1221','Choro' => '1222','Forró' => '1223','Frevo' => '1224','MPB' => '1225','Pagode' => '1226','Samba' => '1227','Sertanejo' => '1228','Baile Funk' => '1229','Spoken Word' => '50000061','Disney' => '50000063','French Pop' => '50000064','German Pop' => '50000066','German Folk' => '50000068','Books' => '38','Nonfiction' => '9002','Family & Relationships' => '10038','Philosophy' => '10091','Social Science' => '10120','Transportation' => '10138','True Crime' => '10149','Romance' => '9003','Erotica' => '10056','Contemporary' => '10057','Fantasy, Futuristic & Ghost' => '10058','Historical' => '10059','Short Stories' => '10060','Suspense' => '10061','Western' => '10062','Travel & Adventure' => '9004','Africa' => '10139','Asia' => '10140','Specialty Travel' => '10141','Canada' => '10142','Caribbean' => '10143','Latin America' => '10144','Essays & Memoirs' => '10145','Europe' => '10146','Middle East' => '10147','United States' => '10148','Arts & Entertainment' => '9007','Art & Architecture' => '10002','Theater' => '10036','Games' => '10067','Music' => '10087','Performing Arts' => '10089','Photography' => '10092','Biographies & Memoirs' => '9008','Business & Personal Finance' => '9009','Industries & Professions' => '10005','Marketing & Sales' => '10006','Small Business & Entrepreneurship' => '10007','Personal Finance' => '10008','Reference' => '10009','Careers' => '10010','Economics' => '10011','Investing' => '10012','Finance' => '10013','Management & Leadership' => '10014','Children & Teens' => '9010','Children’s Fiction' => '10081','Children’s Nonfiction' => '10082','Humor' => '9012','History' => '9015','Africa' => '10070','Americas' => '10071','Ancient' => '10072','Asia' => '10073','Australia & Oceania' => '10074','Europe' => '10075','Latin America' => '10076','Middle East' => '10077','Military' => '10078','United States' => '10079','World' => '10080','Religion & Spirituality' => '9018','Bibles' => '10003','Bible Studies' => '10105','Buddhism' => '10106','Christianity' => '10107','Hinduism' => '10108','Islam' => '10109','Judaism' => '10110','Science & Nature' => '9019','Mathematics' => '10085','Nature' => '10088','Astronomy' => '10111','Chemistry' => '10112','Earth Sciences' => '10113','Essays' => '10114','History' => '10115','Life Sciences' => '10116','Physics' => '10117','Reference' => '10118','Sci-Fi & Fantasy' => '9020','Fantasy' => '10044','Science Fiction' => '10063','Science Fiction & Literature' => '10064','Lifestyle & Home' => '9024','Antiques & Collectibles' => '10001','Crafts & Hobbies' => '10034','Gardening' => '10068','Pets' => '10090','Health, Mind & Body' => '9025','Spirituality' => '10004','Health & Fitness' => '10069','Psychology' => '10094','Self-Improvement' => '10119','Comics & Graphic Novels' => '9026','Graphic Novels' => '10015','Manga' => '10016','Computers & Internet' => '9027','Computers' => '10017','Databases' => '10018','Digital Media' => '10019','Internet' => '10020','Network' => '10021','Operating Systems' => '10022','Programming' => '10023','Software' => '10024','System Administration' => '10025','Cookbooks, Food & Wine' => '9028','Beverages' => '10026','Courses & Dishes' => '10027','Special Diet' => '10028','Special Occasions' => '10029','Methods' => '10030','Reference' => '10031','Regional & Ethnic' => '10032','Specific Ingredients' => '10033','Professional & Technical' => '9029','Design' => '10035','Education' => '10037','Law' => '10083','Medical' => '10086','Engineering' => '10137','Parenting' => '9030','Fiction & Literature' => '9031','Action & Adventure' => '10039','African American' => '10040','Religious' => '10041','Classics' => '10042','Erotica' => '10043','Gay' => '10045','Ghost' => '10046','Historical' => '10047','Horror' => '10048','Literary' => '10049','Short Stories' => '10065','Literary Criticism' => '10084','Poetry' => '10093','Mysteries & Thrillers' => '9032','Hard-Boiled' => '10050','Historical' => '10051','Police Procedural' => '10052','Short Stories' => '10053','British Detectives' => '10054','Women Sleuths' => '10055','Reference' => '9033','Foreign Languages' => '10066','Almanacs & Yearbooks' => '10095','Atlases & Maps' => '10096','Catalogs & Directories' => '10097','Consumer Guides' => '10098','Dictionaries & Thesauruses' => '10099','Encyclopedias' => '10100','Etiquette' => '10101','Quotations' => '10102','Words & Language' => '10103','Writing' => '10104','Study Aids' => '10136','Politics & Current Events' => '9034','Sports & Outdoors' => '9035','Baseball' => '10121','Basketball' => '10122','Coaching' => '10123','Extreme Sports' => '10124','Football' => '10125','Golf' => '10126','Hockey' => '10127','Mountaineering' => '10128','Outdoors' => '10129','Racket Sports' => '10130','Reference' => '10131','Soccer' => '10132','Training' => '10133','Water Sports' => '10134','Winter Sports' => '10135',);
//$request = "http://itunes.apple.com/WebObjects/MZStoreServices.woa/ws/genres?id=20";

//search music
foreach($type as $code){
	$request = $bookurl.$map[$code].$datatype;
	$response = file_get_contents($request);
	$response = json_decode($response, true);
}

//search books
foreach($books as $code){
	$request = $musicurl.$map[$code].$datatype;
	$response = file_get_contents($request);
	$response = json_decode($response, true);
}

$response = file_get_contents($request);


/*

echo "<pre>";
print_r ($a);
echo "</pre>";
*/
?>