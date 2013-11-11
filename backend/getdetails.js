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
	detail += "<";
	detail += "<tr><td class='heading' colspan='2'><h3>Audio File Information</h3></td></tr>";
	detail += "<tr><td class='info'>Medium</td><td style='width:50%'>" + root.find("Medium Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>FileFormat</td><td style='width:50%'>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>BitRate</td><td style='width:50%'>" + root.find("BitRate").text().trim() + "</td></tr>";
	detail += "<tr><td class='heading' colspan='2'><h3>Audio File Coding</h3></td></tr>";
	detail += "<tr><td class='info'>Format</td><td style='width:50%'>" + root.find("AudioCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td class='info'>Sample rate</td><td style='width:50%'>" + root.find("AudioCoding Sample").attr('rate').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
	
}
