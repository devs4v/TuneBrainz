var genres = [];
function getConceptMatch(query){
	createProgress();
	hideSearchResults();
	$("#concept-matches ul").html("");
	$("#related-books ul").html("");
	$("#related-music ul").html("");
	genres = [];
	var limit = 10;
	/* fill all concepts */
	$.ajax({
		url: 'backend/get.php',
		method: 'get',
		data: {'q': query, 't': 'music'},
		dataType: 'json',
		success: function(data){
			htm = "";
			resCount = data.resultCount;
			if (resCount <limit){num = resultCount;}else{num = limit;}
			for (var i=0;i<num;i++){
				artist = data.results[i].artistName;
				album = data.results[i].collectionName;
				track = data.results[i].trackCensoredName;
				songURL = data.results[i].previewUrl;
				cover = data.results[i].artworkUrl100;
				
				if (i < 2){
					genres.push(data.results[i].primaryGenreName);
				}
				$("#av").append("genres are:" + genres + "\n");
				
				ht = '<li class="showcase-case-item">';
				ht = ht + '<div class="showcase-case-item-albumcover" data-mp3="' + songURL + '" data-title="' + track + '" data-artist="' + artist + '" data-cover="' + cover + '" onclick="playMusic($(this));">';
				ht = ht + '<img src="' + cover + '"/>';
				ht = ht + '<div class="showcase-case-item-playbtn"></div>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-item-details">';
				ht = ht + '<div class="showcase-case-item-track">' + track + '</div>';
				ht = ht + '<br/>';
				ht = ht + '<div class="showcase-case-item-artist">' + artist + '</div>';
				ht = ht + '</div>';
				ht = ht + '</li>';
				
				htm = htm + ht;
			}
			$("#concept-matches ul").append(htm);
			$('#concept-matches').show('fast').fadeIn('fast');
		},
		error: function(data){
			$('#related-music').show('fast').fadeIn('fast');
		}
	});
	$.ajax({
		url: 'backend/get.php',
		method: 'get',
		data: {'q': query, 't': 'book'},
		dataType: 'json',
		success: function(data){
			htm = "";
			resCount = data.resultCount;
			if (resCount < limit){num = resCount;}else{num = limit;}
			for (var i=0;i<num;i++){
				artist = data.results[i].artistName;
				album = data.results[i].collectionName;
				track = data.results[i].trackCensoredName;
				songURL = data.results[i].previewUrl;
				cover = data.results[i].artworkUrl100;
				
				if(i < 2){
					str = data.results[i].genres;
					for (var j = 0; j < str.length; j++){
						if (str[j] != "Books"){
							genres.push(str[j]);
						}
					}
				}
				ht = '<li class="showcase-case-item">';
				ht = ht + '<div class="showcase-case-item-albumcover" data-mp3="' + songURL + '" data-title="' + track + '" data-artist="' + artist + '" data-cover="' + cover + '" onclick="playMusic($(this));">';
				ht = ht + '<img src="' + cover + '"/>';
				ht = ht + '<div class="showcase-case-item-playbtn"></div>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-item-details">';
				ht = ht + '<div class="showcase-case-item-track">' + track + '</div>';
				ht = ht + '<br/>';
				ht = ht + '<div class="showcase-case-item-artist">' + artist + '</div>';
				ht = ht + '</div>';
				ht = ht + '</li>';
				
				htm = htm + ht;
			}
			$("#concept-matches ul").append(htm);
			$('#concept-matches').show('fast').fadeIn('fast');
		},
		error: function(data){
			$('#related-books').show('fast').fadeIn('fast');
		}
	});
	/* Filled all concepts */
	$.ajax({
		url: 'backend/getgenres.php',
		method: 'get',
		data: {'q': query},
		dataType: 'json',
		success: function(data){
		
	});
	$("#av").append("genres are (after filling):" + genres + "\n");
	deleteProgress();
}

function search(query){
	getConceptMatch(query);
}