function init(){
	/* Attaching all event handlers required */
	
	initGraph();	//Initialize and put graph
	
	initMusicPlayer();	//Initialize music player
	
	$(".tab").each(function(){$(this).css({'visibility': 'visible'});});	//make everything visible
	hidesidebar();
	openTab('home');	//show the home tab
	showHome();
	assignTabEvents();
	assignCardEvents();
	assignMouseWheelEvent();
	handleSearch();
}

function initMusicPlayer(myPlaylist){
	myPlaylist = [
		{
		mp3:'data/tracks/MovieAlbums/BadtameezDil.mp3',
        title:'Badtameez Dil',
        artist:'Benny Dayal',
		duration: '00:00',
        cover:'data/images/albums/YehJawaniHaiDiwani.jpg'
		}
	];
	options = {autoplay:false};
	$("#musicPlayer").ttwMusicPlayer(myPlaylist, options);
}

function playMusic(node){
	node = $(node);
	myPlaylist = [
		{
		mp3: node.attr('data-mp3'),
		title: node.attr('data-title'),
		artist: node.attr('data-artist'),
		duration: '00:00',
		cover: node.attr('data-cover')
		}
	];
	options = {autoplay:true};
	$("#musicPlayer").html("");
	$("#musicPlayer").ttwMusicPlayer(myPlaylist, options);
}

function showHome(){
	/* Pull back elements for Animation*/
	$("#home-head").css({'top':'200px', 'opacity':'0.0'});
	$("#home-sub").css({'top':'400px', 'opacity':'0.0'});
	
	$("#home-head").animate({'top':'250px', 'opacity':'1.0'}, 'slow','easeInOutBack', function(){
		$("#home-sub").animate({'top':'350px', 'opacity':'1.0'}, 'slow','easeInOutBack', function(){
			showsidebar();
		});
	});
}

function scrollNames(){
	$("#names span:first").fadeOut('slow', function(){
		$(this).detach().appendTo("#names").removeAttr('style');
		$("#names span:first").fadeIn('slow', scrollNames);
	});
}

function search(concept){
	createProgress();
	$("#lightbox-overlay").fadeIn('fast');
	
	$.ajax({
		method: 'get',
		data: {'c': concept},
		url: 'backend/search.php',
		dataType: 'json',
		success: function(data){
			$("#receiver").html("");
		
			$.each(data.files, function(k, v){
				divtext = "<div class='blk' onclick='getDetails3(\"" + v + "\");' style='background-image:url(\"/data/images/albums/YehJawaniHaiDiwani.jpg\");background-size:100% 100%;background-repeat:no-repeat;'><div>";
				divtext += v.slice(0, -4);
				divtext += "</div></div>";
				$("#receiver").append(divtext);
				/*$("#receiver .blk:last").hide();*/
			});
			
			deleteProgress();
			$("#lightbox-overlay").fadeOut('fast');
		}
	});
}

function createProgress(){
	var main = document.createElement("div");
	var prog = document.createElement("img");
	prog.setAttribute("src", "/data/images/web/ajax-loader.gif");
	main.setAttribute("id", "progressbar");
	main.appendChild(prog);
	main.innerHTML = main.innerHTML + "<br/>Processing";
	$('body').append(main);
	var lb = $("#lightbox-overlay");
	main = $("#progressbar");
	main.css({"z-index": 20, "position": "absolute", "text-align": "center", "background-color": "#FFF", "box-shadow": "1px 1px 3px 3px #777", "border-radius": "5px", "padding": "5px", "font-family": "trebuchet ms"});
	width = (lb.width() - main.width())/2;
	height = (lb.height() - main.height())/2;
	main.css({"left": width, "top": height});
}
function deleteProgress(){
	$("#progressbar").remove();
}

function openTab(tab){
	$(".tab").each(function(){$(this).hide();});
	$("#" + tab).fadeIn('slow');
	if(tab != 'home'){
		hidesidebar();
	}
	else{
		showsidebar();
	}
}

function showsidebar(){	$("#sidebar").animate({'left':'20px'}, 'slow', 'easeOutBack'); }
function hidesidebar(){ $("#sidebar").animate({'left':'-150px'}, 'slow', 'easeInBack'); }

function assignTabEvents(){
	$('.foot-tab').each(function(){
		$(this).click(function(){
			$('.foot-tab').each(function(){$(this).removeClass('foot-tab-selected');});
			$(this).addClass('foot-tab-selected');
		});
	});
}

function assignCardEvents(){
	$('.showbar-item').each(function(){
		var me = $(this);
		me.mouseenter(function(){
			me.find('.showbar-item-details').animate({'margin-bottom':'0px'}, 'fast');
			me.find('.showbar-item-overlay').fadeIn('fast');
		}).mouseleave(function(){
			me.find('.showbar-item-details').animate({'margin-bottom': '-30px'}, 'fast');
			me.find('.showbar-item-overlay').fadeOut('fast');
		});
	});
}

function assignMouseWheelEvent(){
	$('body').mousewheel(function(e, delta) {
		this.scrollLeft -= (delta * 40);
		e.preventDefault();
	});
}

function handleSearch(){
	$('#search-query').live('keypress',function(e){
		var p = e.which;
		if(p == 13){
			search($('#search-query').val());
		}
	});
}
$(document).ready(init);