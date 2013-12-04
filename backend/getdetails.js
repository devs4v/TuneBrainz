function getConceptMatch(query){
	createProgress();
	hideSearchResults();
	$("#concept-matches ul").html("");
	$("#related-books ul").html("");
	$("#related-music ul").html("");
	/* fill all concepts */
	$.ajax({
		url: 'backend/getconcepts.php',
		method: 'get',
		data: {'q': query},
		dataType: 'json',
		success: function(data){
			//Fill music
			var elem = $("#concept-matches ul");
			elem.html("");
			for(var i = 0; i < data.music.length; i++){
				
				ht = '<li>';
				ht = ht + '<div class="showcase-case-item showcase-case-item-typetrack">';
				ht = ht + '<div class="showcase-case-item-type">Track</div>';
				ht = ht + '<div class="showcase-case-item-albumcover" onclick="playMusic($(this));">';
				ht = ht + '<img src="' + data.music[i].cover + '"/>';
				ht = ht + '<div class="showcase-case-item-playbtn"></div>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-item-details">';
				ht = ht + '<div class="showcase-case-item-track">' + data.music[i].track + '</div>';
				ht = ht + '<br/>';
				ht = ht + '<div class="showcase-case-item-artist">' + data.music[i].artist + '</div>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '';
				ht = ht + '<div class="showcase-case-description">';
				ht = ht + '<div class="showcase-case-desc-type showcase-case-desc-typetrack">Track</div>';
				ht = ht + '<div class="showcase-case-desc-cover">';
				ht = ht + '<img src="' + data.music[i].cover + '" class="showcase-case-desc-coverimage"/>';
				ht = ht + '<a href="' + data.music[i].albumlink + '" class="showcase-case-desc-albumlink"><div class="showcase-case-desc-album">' + data.music[i].album + '</div></a>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-desc-details">';
				ht = ht + '<div class="showcase-case-desc-track"><span>' + data.music[i].track + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-artist">By: <span>' + data.music[i].artist + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-genre">Genre: <span>' + data.music[i].genre + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-releasedate">Release Date:<span>' + data.music[i].releasedate + '</span></div>';
				ht = ht + '<a href="' + data.music[i].preview + '" class="showcase-case-desc-previewlink" target="_blank"><div class="showcase-case-desc-preview">Preview this Track</div></a>';
				ht = ht + '<a href="' + data.music[i].link + '" class="showcase-case-desc-musiclink" target="_blank"><div class="showcase-case-desc-music">Buy this Track on iTunes</div></a>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '</li>';
				
				elem.append(ht);
			}				
				
			//Fill books
			for(i = 0; i < data.books.length; i++){
				
				ht = '<li>';
				ht = ht + '<div class="showcase-case-item showcase-case-item-typebook">';
				ht = ht + '<div class="showcase-case-item-type">Book</div>';
				ht = ht + '<div class="showcase-case-item-albumcover">';
				ht = ht + '<img src="' + data.books[i].image + '"/>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-item-details">';
				ht = ht + '<div class="showcase-case-item-track">' + data.books[i].name + '</div>';
				ht = ht + '<br/>';
				ht = ht + '<div class="showcase-case-item-artist">' + data.books[i].author + '</div>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-description">';
				ht = ht + '<div class="showcase-case-desc-type showcase-case-desc-typebook">Book</div>';
				ht = ht + '<div class="showcase-case-desc-cover">';
				ht = ht + '<img src="' + data.books[i].image + '" class="showcase-case-desc-coverimage"/>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-desc-details">';
				ht = ht + '<div class="showcase-case-desc-title"><span>' + data.books[i].name + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-author">By: <span>' + data.books[i].author + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-genre">Genre: <span>' + data.books[i].genre + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-publisher">Publisher: <span>' + data.books[i].publisher + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-releasedate">' + data.books[i].releasedate + '</div>';
				ht = ht + '<a href="' + data.books[i].link + '" class="showcase-case-desc-previewlink" target="_blank"><div class="showcase-case-desc-preview">Preview this Book</div></a>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '</li>';
				
				elem.append(ht);
			}
			$('#concept-matches').show('fast').fadeIn('fast');
			reattachMouseDesc();
		},
		error: function(){
			alert("Oops! An error occurred while fetching Matching Concepts!\nPlease Try Again!");
			deleteProgress();
		}
	});
	/* Filled all concepts */
	$.ajax({
		url: 'backend/getgenres.php',
		method: 'get',
		data: {'q': query},
		dataType: 'json',
		success: function(data){
			//Fill music
			var elem = $("#related-music ul");
			elem.html("");
			for(var i = 0; i < data.music.length; i++){
				
				ht = '<li>';
				ht = ht + '<div class="showcase-case-item showcase-case-item-typetrack">';
				ht = ht + '<div class="showcase-case-item-type">Track</div>';
				ht = ht + '<div class="showcase-case-item-albumcover" onclick="playMusic($(this));">';
				ht = ht + '<img src="' + data.music[i].cover + '"/>';
				ht = ht + '<div class="showcase-case-item-playbtn"></div>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-item-details">';
				ht = ht + '<div class="showcase-case-item-track">' + data.music[i].track + '</div>';
				ht = ht + '<br/>';
				ht = ht + '<div class="showcase-case-item-artist">' + data.music[i].artist + '</div>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '';
				ht = ht + '<div class="showcase-case-description">';
				ht = ht + '<div class="showcase-case-desc-type showcase-case-desc-typetrack">Track</div>';
				ht = ht + '<div class="showcase-case-desc-cover">';
				ht = ht + '<img src="' + data.music[i].cover + '" class="showcase-case-desc-coverimage"/>';
				ht = ht + '<a href="' + data.music[i].albumlink + '" class="showcase-case-desc-albumlink"><div class="showcase-case-desc-album">' + data.music[i].album + '</div></a>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-desc-details">';
				ht = ht + '<div class="showcase-case-desc-track"><span>' + data.music[i].track + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-artist">By: <span>' + data.music[i].artist + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-genre">Genre: <span>' + data.music[i].genre + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-production">Production: <span>' + data.music[i].producer + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-duration">Duration: <span>' + data.music[i].duration + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-releasedate">Release Date:<span>' + data.music[i].releasedate + '</span></div>';
				ht = ht + '<a href="' + data.music[i].preview + '" class="showcase-case-desc-previewlink" target="_blank"><div class="showcase-case-desc-preview">Preview this Track</div></a>';
				ht = ht + '<a href="' + data.music[i].link + '" class="showcase-case-desc-musiclink" target="_blank"><div class="showcase-case-desc-music">Buy this Track on iTunes</div></a>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '</li>';
				
				elem.append(ht);
				$('#related-music').show('fast').fadeIn('fast');
			}				
				
			//Fill books
			elem = $("#related-books ul");
			elem.html("");
			for(i = 0; i < data.books.length; i++){
				
				ht = '<li>';
				ht = ht + '<div class="showcase-case-item showcase-case-item-typebook">';
				ht = ht + '<div class="showcase-case-item-type">Book</div>';
				ht = ht + '<div class="showcase-case-item-albumcover">';
				ht = ht + '<img src="' + data.books[i].image + '"/>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-item-details">';
				ht = ht + '<div class="showcase-case-item-track">' + data.books[i].name + '</div>';
				ht = ht + '<br/>';
				ht = ht + '<div class="showcase-case-item-artist">' + data.books[i].author + '</div>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-description">';
				ht = ht + '<div class="showcase-case-desc-type showcase-case-desc-typebook">Book</div>';
				ht = ht + '<div class="showcase-case-desc-cover">';
				ht = ht + '<img src="' + data.books[i].image + '" class="showcase-case-desc-coverimage"/>';
				ht = ht + '</div>';
				ht = ht + '<div class="showcase-case-desc-details">';
				ht = ht + '<div class="showcase-case-desc-title"><span>' + data.books[i].name + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-author">By: <span>' + data.books[i].author + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-genre">Genre: <span>' + data.books[i].genre + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-publisher">Publisher: <span>' + data.books[i].publisher + '</span></div>';
				ht = ht + '<div class="showcase-case-desc-releasedate">' + data.books[i].releasedate + '</div>';
				ht = ht + '<a href="' + data.books[i].link + '" class="showcase-case-desc-previewlink" target="_blank"><div class="showcase-case-desc-preview">Preview this Book</div></a>';
				ht = ht + '</div>';
				ht = ht + '</div>';
				ht = ht + '</li>';
				
				elem.append(ht);
				$('#related-books').show('fast').fadeIn('fast');
			}
			
		deleteProgress();
		reattachMouseDesc();
		},
		error: function(){
			alert("Oops! An error occurred while fetching Related Things!\nPlease Try Again!");
			deleteProgress();
		}
	});
	
}

function search(query){
	getConceptMatch(query);
}