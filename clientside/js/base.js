function minSize(){
	var bh = $('body').outerHeight();
	if(bh < 604){
		$('body').addClass('min-size');
		$('.big-video').attr('width', '400');
		$('.big-video').attr('height', '225');
	}
}

function navigation(){
	$('.nav ul').each(function(){
		// Meghatározom a globalDif első értékét
	    var pw = $(this).find('li:first').find('p').width();
	    var sw = $(this).find('li:first').find('span').width();
	    var globalDif = sw-pw;
	    
		// Meghatározom a legnagyobb localDifet, és azt átadom a globalDifnek
	    $(this).find('li').each(function(){
	    	var pw = $(this).find('p').width();
	    	var sw = $(this).find('span').width();
	    	var localDif = sw-pw;
	    	
			$(this).find('p').css('width', pw+2);
			if(pw >= sw){
				$(this).find('a').css('width', pw+2);
			} else {
				$(this).find('a').css('width', sw);
			}
			$(this).css('width', $(this).find('a').outerWidth());

	    	if(localDif > globalDif){
	    		globalDif = localDif;
	    	}
	    });


		// Global és local difek alapján margin-rightot adok az li-knek
		$(this).find('li').each(function(){
	    	var pw = $(this).find('p').width();
	    	var sw = $(this).find('span').width();

	    	if(sw > pw){
	    		var localDif = sw-pw;
	    		$(this).css('margin-right', globalDif-localDif-73);
	    	} else if(pw > sw) {
	    		$(this).css('margin-right', globalDif-73);
	    	} else {
				$(this).css('margin-right', globalDif-73);
			}
	    });
	    
	    $(this).find('li:last').css('margin-right', 0);
	});
}

$(document).ready(function() {
	if ($.browser.msie){
		if ($.browser.version < 9){
			$('body').addClass('ie-window');
		}
	}

	minSize();
	
	var pageWidth = $(window).width();
	var pageHeight = $(window).height();

	$('.lang').width(pageWidth);
	$('.menuitem').height(pageHeight);
	
	navigation();
	
	$("#wrapper")
	.scrollable({
		'items'		: '#container',
		'item'		: '.lang',
		'circular'	: true
	})
	.navigator({
		'navi'		: '.navi'
	});
	
	$('nav a').each(function(){
		var as = $(this).width();
		var ss = $(this).find('span').width();
		if (ss > as) {
			$(this).css('width', ss);
		}
	});
	
	
	$('#hu_cv_scroll, #en_cv_scroll, #esp_cv_scroll, #hu_cv_mogott_scroll, #en_cv_mogott_scroll, #esp_cv_mogott_scroll').tinyscrollbar();
	$('#hu_gallery_scroll, #en_gallery_scroll, #esp_gallery_scroll').tinyscrollbar({
		axis: 'x'
	});
	
	$("a.overlay").fancybox({
		'padding'		:	0,
		'margin'		:	80,
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true,
		'overlayOpacity':	0.8,
		'overlayColor'	:	'#fff',
		'onStart'		:	function(){
			$('.browse').animate({
				'opacity' : 0
			}, 600);
		},
		'onCleanup'		:	function(){
			$('.browse').animate({
				'opacity' : 1
			}, 600);
		}
	});
	
	$("a.iframe").fancybox({
		'autoScale'		:	true,
		'scrolling'		:	true,
		'padding'		:	0,
		'margin'		:	80,
		'speedIn'		:	600,
		'speedOut'		:	200,
		'width'			:	650,
		'height'		:	600,
		'overlayShow'	:	true,
		'overlayOpacity':	0.8,
		'overlayColor'	:	'#fff',
		'onStart'		:	function(){
			$('.browse').animate({
				'opacity' : 0
			}, 600);
		},
		'onCleanup'		:	function(){
			$('.browse').animate({
				'opacity' : 1
			}, 600);
		}
	});
	
	/////////////////////////////// NOVY CODE ///////////////////////////////
	function positionFn(){
		var locHashObj =  ''+window.location.hash+'';
		var t = setTimeout(function () {
			var target = document.getElementsByName(''+window.location.hash.split('#')[1]+'')[0];
			window.location.hash =  '';
			window.location.hash =  locHashObj;
			clearTimeout(t);
		}, 1000);
	}
	
	$(window).resize(function(e) {
//		window.location.reload();
	});
	
	positionFn();
	
	$('body').css('visibility','visible');
	/////////////////////////////// NOVY CODE ///////////////////////////////

});