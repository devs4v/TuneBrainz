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
	var detail = "<table style='background-color: #6699AA;box-shadow: 0 0 1px 1px #6699AA;width: 98%;margin-left: 2px;color: white;'><tr><td colspan='2' style='background-color: rgba(255, 255, 255, 0.5);'>Visual File Information:</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>FileFormat:</td><td>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>FileSize:</td><td>" + root.find("FileSize").text().trim() + "Bytes</td></tr>";
	detail += "<tr><td colspan='2' style='background-color: rgba(255, 255, 255, 0.5);'>Visual File Coding:</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>Format:</td><td>" + root.find("VisualCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>Sample rate:</td><td>" + root.find("VisualCoding Frame").attr('width').trim() + " x " +  root.find("VisualCoding Frame").attr('height').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
}

function mediaDetailMusic(root){
	var detail = "<table style='background-color: #6699AA;box-shadow: 0 0 1px 1px #6699AA;width: 98%;margin-left: 2px;color: white;'><tr><td colspan='2' style='background-color: rgba(255, 255, 255, 0.5);'>Audio File Information:</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>Medium:</td><td>" + root.find("Medium Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>FileFormat:</td><td>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>BitRate:</td><td>" + root.find("BitRate").text().trim() + "</td></tr>";
	detail += "<tr><td colspan='2' style='background-color: rgba(255, 255, 255, 0.5);'>Audio File Coding:</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>Format:</td><td>" + root.find("AudioCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;'>Sample rate:</td><td>" + root.find("AudioCoding Sample").attr('rate').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
	
}