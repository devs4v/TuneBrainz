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
