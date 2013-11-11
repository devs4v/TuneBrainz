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
	var detail = "<h3 style='margin:2px 0 0 2px;padding:0;color:#3fada8'>Visual File Information</h3>";
	detail += "<table style='width: 98%;margin-left: 2px;color: #333;'>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;color: #fff;font-weight:bold;text-transform:uppercase;'>FileFormat:</td><td>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;color: #fff;font-weight:bold;text-transform:uppercase'>FileSize:</td><td>" + root.find("FileSize").text().trim() + "Bytes</td></tr>";
	detail += "<tr><td colspan='2' style='background-color: rgba(255, 255, 255, 0.5);'>Visual File Coding:</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;color: #fff;font-weight:bold;text-transform:uppercase'>Format:</td><td>" + root.find("VisualCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr><td style='background-color: rgba(238, 238, 238, 0.5);text-align: right;color: #fff;font-weight:bold;text-transform:uppercase'>Sample rate:</td><td>" + root.find("VisualCoding Frame").attr('width').trim() + " x " +  root.find("VisualCoding Frame").attr('height').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
}

function mediaDetailMusic(root){
	var detail = "<h3 style='margin:2px 0 0 2px;padding:0;color:#3fada8;font-size:20px;'>Audio File Information</h3>";
	detail += "<table style='width: 98%;margin-left: 2px;color: #333;'>";
	detail += "<tr style='width: 100%;'><td style='text-align: right;color: #fff;font-weight:bold;text-transform:uppercase;'>Medium</td><td style='width:50%'>" + root.find("Medium Name").text().trim() + "</td></tr>";
	detail += "<tr style='width: 100%;'><td style='text-align: right;color: #fff;font-weight:bold;text-transform:uppercase;'>FileFormat</td><td style='width:50%'>" + root.find("FileFormat Name").text().trim() + "</td></tr>";
	detail += "<tr style='width: 100%;'><td style='text-align: right;color: #fff;font-weight:bold;text-transform:uppercase;'>BitRate</td><td style='width:50%'>" + root.find("BitRate").text().trim() + "</td></tr></table>";
	detail += "<h3 style='margin:2px 0 0 2px;color:#3fada8;padding:0;font-size:20px;'>Audio File Coding</h3>";
	detail += "<table style='width: 98%;margin-left: 2px;color: #333;'>";
	detail += "<tr style='width: 100%;'><td style='text-align: right;color: #fff;font-weight:bold;text-transform:uppercase;'>Format</td><td style='width:50%'>" + root.find("AudioCoding Format Name").text().trim() + "</td></tr>";
	detail += "<tr style='width: 100%;'><td style='text-align: right;color: #fff;font-weight:bold;text-transform:uppercase;'>Sample rate</td><td style='width:50%'>" + root.find("AudioCoding Sample").attr('rate').trim() + "</td></tr>";
	detail += "</table>";
	return detail;
	
}
