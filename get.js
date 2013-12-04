function getDetails2(){
	$.ajax({
		url: 'get.php',
		data: {'q':'22', 't':'music'},
		method: 'get',
		dataType: 'json',
		success: function(data){
			var htm = "";
			for (var i=0;i<10;i++){
				artist = data.results[i].artistName;
				album = data.results[i].collectionName;
				track = data.results[i].trackCensoredName;
				songURL = data.results[i].previewUrl;
				cover = data.results[i].artworkUrl100;
				
				ht = "Artist:" + artist;
				ht = ht + "<br/>Album: " + album;
				ht = ht + "<br/>Trackname: " + track;
				ht = ht + "<br/><a href='" + songURL + "'>Click here for preview</a>";
				ht = ht + "<br/><img src='" + cover + "'/>";
				
				htm = htm + ht;
			}
			$("#receiver").html(htm);
		}
	});
}