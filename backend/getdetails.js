function getDetails(file){
	var dir = "/data/xml/" + file;
	$.ajax({
		url: dir,
		method: 'get',
		dataType: 'xml',
		success: function(response){
			//alert(response);
			resp = $(response);
			contentformat = resp.find("Description  MultimediaContent  MediaInformation  MediaProfile  MediaFormat  Content Name").text().trim();
			//alert("Content format is: '" + contentformat + "'");
			if(contentformat == "Audio"){
				$("#rightInfobox").html(mediaDetailMusic(resp.find("Description  MultimediaContent  MediaInformation")));
				$("#rightInfobox table").hide().fadeIn();
			}
			else if(contentformat == "Visual"){
				$("#rightInfobox").html(mediaDetailBook(resp.find("Description  MultimediaContent  MediaInformation")));
				$("#rightInfobox table").hide().fadeIn();
			}
			else{
				
			}
		}
	});
}

function mediaDetailBook(root){	
	var detail = "";
	detail += "<table>";
	detail += "<tr><td class='heading' colspan='2'><h3>Visual File Information</h3></td></tr>";
	detail += "<tr><td class='info'>FileFormat:</td><td>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>FileSize:</td><td>" + root.find("FileSize").text().trim() + "Bytes</td></tr>";
	detail += "<tr><td class='heading' colspan='2'><h3>Visual File Coding:</h3></td></tr>";
	detail += "<tr><td class='info'>Format:</td><td>" + root.find("VisualCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>Sample rate:</td><td>" + root.find("VisualCoding Frame").attr('width').trim() + " x " +  root.find("VisualCoding Frame").attr('height').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
}

function mediaDetailMusic(root){
	var detail = "";
	detail += "<table>";
	/*detail += "<";*/
	detail += "<tr><td class='heading' colspan='2'><h3>Audio File Information</h3></td></tr>";
	detail += "<tr><td class='info'>Medium</td><td>" + root.find("Medium Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>FileFormat</td><td>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>BitRate</td><td>" + root.find("BitRate").text().trim() + "</td></tr>";
	detail += "<tr><td class='heading' colspan='2'><h3>Audio File Coding</h3></td></tr>";
	detail += "<tr><td class='info'>Format</td><td>" + root.find("AudioCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>Sample rate</td><td>" + root.find("AudioCoding Sample").attr('rate').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
	
}

function getDetails2(file){
	$.ajax({
		url: 'backend/getdetails.php',
		method: 'get',
		data: {'file': file},
		dataType: 'xml',
		success: function(response){
			if (response.error == 0){
				if (response.type == "Tracks"){
					//getting details for Tracks
					mediaDetailMusic2(response.details);
				}else{
					if(response.type == "Books"){
						//getting details for Books
						mediaDetailBook2(response.details);
					}else{
						alert("Error in parsing type!");
					}
				}
			}else{
				alert(error.errdesc);
			}
			//alert("Content format is: '" + contentformat + "'");
			if(contentformat == "Audio"){
				$("#rightInfobox").html(mediaDetailMusic(resp.find("Description  MultimediaContent  MediaInformation")));
				$("#rightInfobox table").hide().fadeIn();
			}
			else if(contentformat == "Visual"){
				$("#rightInfobox").html(mediaDetailBook(resp.find("Description  MultimediaContent  MediaInformation")));
				$("#rightInfobox table").hide().fadeIn();
			}
			else{
				
			}
		}
	});
}


function mediaDetailBook2(details){	
	var detail = "";
	detail += "<table>";
	detail += "<tr><td class='heading' colspan='2'><h3>Visual File Information</h3></td></tr>";
	detail += "<tr><td class='info'>FileFormat:</td><td>" + details.fileformat + "</td></tr>";
	detail += "<tr><td class='info'>FileSize:</td><td>" + details.filesize + "Bytes</td></tr>";
	detail += "<tr><td class='heading' colspan='2'><h3>Visual File Coding:</h3></td></tr>";
	detail += "<tr><td class='info'>Format:</td><td>" + root.find("VisualCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>Sample rate:</td><td>" + root.find("VisualCoding Frame").attr('width').trim() + " x " +  root.find("VisualCoding Frame").attr('height').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
}

function mediaDetailMusic2(details){
	var detail = "";
	detail += "<table>";
	/*detail += "<";*/
	detail += "<tr><td class='heading' colspan='2'><h3>Music Details</h3></td></tr>";
	detail += "<tr><td class='info'>Title</td><td>" + details.title + "</td></tr>";
	detail += "<tr><td class='info'>Singers</td><td>" + details.singers + "</td></tr>";
	detail += "<tr><td class='info'>Album</td><td>" + details.album + "</td></tr>";
	detail += "<tr><td class='heading' colspan='2'><h3>Audio File Information</h3></td></tr>";
	detail += "<tr><td class='info'>Medium</td><td>" + details.medium + "</td></tr>";
	detail += "<tr><td class='info'>FileFormat</td><td>" + details.fileformat + "</td></tr>";
	detail += "<tr><td class='info'>BitRate</td><td>" + details.bitrate + "</td></tr>";
	detail += "</table>";
	return detail;
	
}

function getDetails3(file){
var detail = "";
	detail += "<table>";
	/*detail += "<";*/
	detail += "<tr><td class='heading' colspan='2'><h3>Music Details</h3></td></tr>";
	detail += "<tr><td class='info'>Title</td><td>" + "Badtameez Dil" + "</td></tr>";
	detail += "<tr><td class='info'>Singers</td><td>" + "Benny Dayal" + "</td></tr>";
	detail += "<tr><td class='info'>Album</td><td>" + "Yeh Jawani Hai Diwani" + "</td></tr>";
	detail += "<tr><td class='heading' colspan='2'><h3>Audio File Information</h3></td></tr>";
	detail += "<tr><td class='info'>Medium</td><td>" + "Digital" + "</td></tr>";
	detail += "<tr><td class='info'>FileFormat</td><td>" + "MP3" + "</td></tr>";
	detail += "<tr><td class='info'>BitRate</td><td>" + "128Kbps" + "</td></tr>";
	detail += "</table>";
				$("#rightInfobox").html(detail);
				$("#rightInfobox table").hide().fadeIn();
}