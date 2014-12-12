
$(function () {
// iFrame Colorbox
	$(".video").colorbox({speed:500, opacity:.5,iframe:true, innerWidth:425, innerHeight:344});

// Gallery
	$(".gallery").colorbox({speed:500, opacity:.5,});

// Gallery
	$("#gallery_popin").colorbox({speed:500, opacity:.5,inline:true,href:"#gallerypopin"});

// Nav drop-downs
	$('#nav ul ul').each(function () {
		$(this).parent().eq(0).hover(function () {
			$('ul:eq(0)', this).slideDown(100);
		}, function () {
			$('ul:eq(0)', this).fadeOut(200);
		});
	});

	
	$('#nav ul ul a').hover(function () {
		$(this).parent().stop(true).animate({paddingLeft: '15px'}, {speed: 100, easing: 'easeOutBack'});
	}, function () {
		$(this).parent().stop(true).animate({paddingLeft: '10px'}, {speed: 100, easing: 'easeOutBounce'});
	});


	$('#slider1').anythingSlider({
		width           : 640,
		height          : 390,
		delay           : 8000,
		resumeDelay     : 10000,
		startStopped    : false,
		autoPlay        : true,
		autoPlayLocked  : false,
		easing          : "swing"
	});
	$(".feature_video").hover(function(){
		$('#slider1').data('AnythingSlider').startStop(false); // this stops the slideshow
	});
	$(".arrow").click(function(){
		$('#slider1').data('AnythingSlider').startStop(true); // this starts the slideshow
	});

	$("#whatwedo-tool li.whatwedo-tool-control").click(function(){
		
		$("#whatwedo-tool .selected").removeClass('selected');
		$(this).addClass('selected');
		$("#whatwedo-tool-details").hide();
		thisContent = $(this).children(".this_thumb").html();
		thisContent += $(this).children("blockquote").html();
		$("#whatwedo-tool-details").html(thisContent);
		$("#whatwedo-tool-details").fadeIn();
	});
});
