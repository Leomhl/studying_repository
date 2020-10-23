jQuery(document).ready(function($){
	
// page loader
if( typeof onetake_params.query_loader !== 'undefined' &&  onetake_params.query_loader == '1' ){
	window.addEventListener('DOMContentLoaded', function() {
		new QueryLoader2(document.querySelector("body"), {
		barColor: "#efefef",
		backgroundColor: "#111",
		percentage: true,
		barHeight: 1,
		minimumTime: 200,
		fadeOutTime: 1000
		});
	});
}

// Parallax Scrolling
$('.ot-navbar').onePageNav({
	changeHash: true,
	filter: ".menu-item-type-custom a[href^='#']"
});
// responsive nav
$(".site-nav-toggle").click(function(){
	$(".site-nav").toggle();
});
	
//tooltip
$('#ot-footer-container .ot-block-last ul.ot-social li a').tooltip();

// sticky menu
$('header.header').onepageSticky({'scrollSpeed' : 1000 });	
	 
//video background
if( typeof onetakeBgvideo !== 'undefined' && onetakeBgvideo != null ){
	$( onetakeBgvideo.container ).tubular( onetakeBgvideo );
  }
  
$(".ot-sections-container .section").each(function(){
	if($(this).find("#tubular-container").length > 0){
		$(this).css({"height":($(window).height()-$("header").height())+"px"});
		$(this).find("#tubular-container,#tubular-player").css({"height":($(window).height()-$("header").height())+"px"});

		}						
 });

// smooth scrolling  btn
$(".ot-main-content a[href^='#']").on('click', function(e){
	var selectorHeight = $('.sticky-header').height(); 
	var scrollTop = $(window).scrollTop(); 
	e.preventDefault();
	var id = $(this).attr('href');
	if($("body.admin-bar").length){
		if($(window).width() < 765) {
			stickyTop = 46;
		} else {
			stickyTop = 32;
		}
	}
	else{
			stickyTop = 0;
	}
	selectorHeight = selectorHeight + stickyTop - 1;
		
	if(typeof $(id).offset() !== 'undefined'){
		var offset = $(id).offset().top ;
		offset = offset - selectorHeight;	
		var goTo   = offset - selectorHeight;
		$("html, body").animate({ scrollTop: goTo }, 1000);
	}
});	

// responsive menu
if( $('header nav > ul').length )
    $('header nav,#navigation nav').hoomenu({hooScreenWidth:919,hooMenuContainer:'header#ot-head-container'});
  
// Preserving aspect ratio for embedded iframes
$('.entry-content embed,.entry-content iframe').each(function(){
	var width  = $(this).attr('width');	
	var height = $(this).attr('height');
	if($.isNumeric(width) && $.isNumeric(height)){
		if(width > $(this).width()){
			var new_height = (height/width)*$(this).width();
			$(this).css({'height':new_height});
		}
	}				
});

// section title center
$("section .section-title").each(function(){
	var width     = $(this).width();
	var new_width = (width/2)+15;
	$(this).css({'margin-left':-new_width});				  
   });
});

(function($){
	$.fn.onepageSticky = function( options ) {
		// adding a class to users div
		$(this).addClass('sticky-header')
		var settings = $.extend({
            'scrollSpeed '  : 500
            }, options);
	if ( settings.scrollSpeed ) {
		var scrollSpeed = settings.scrollSpeed
	}
			
	stickyTop = 0;
	if(jQuery("body.admin-bar").length){
		if(jQuery(window).width() < 765) {
				stickyTop = 46;
				
			} else {
				stickyTop = 32;
			}
	  }
		  
	$('.sticky-header').css({'top':stickyTop});
		  
	var stickyMenu = function(){
		var scrollTop = $(window).scrollTop(); 
		if (scrollTop > stickyTop) { 
			$('.sticky-header').css({ 'position': 'fixed' }).addClass('fxd');
		} else {
			$('.sticky-header').css({ 'position': 'static'}).removeClass('fxd'); 
		}   
	};
	if( onetake_params.fixed_header !== 'no'){
				
	stickyMenu();
	$(window).scroll(function() {
		stickyMenu();
	});
	}
	}

})(jQuery);


/* jQuery tubular plugin
|* by Sean McCambridge
|* http://www.seanmccambridge.com/tubular
|* version: 1.0
|* updated: October 1, 2012
|* since 2010
|* licensed under the MIT License
|* Enjoy.
|* 
|* Thanks,
|* Sean */

;(function ($, window) {

    // test for feature support and return if failure
    
    // defaults
    var defaults = {
        ratio: 16/9, // usually either 4/3 or 16/9 -- tweak as needed
        videoId: 'ZCAnLxRvNNc', // toy robot in space is a good default, no?
        mute: false,
        repeat: true,
        width: $(window).width(),
        wrapperZIndex: 99,
        playButtonClass: 'tubular-play',
        pauseButtonClass: 'tubular-pause',
        muteButtonClass: 'tubular-mute',
        volumeUpClass: 'tubular-volume-up',
        volumeDownClass: 'tubular-volume-down',
        increaseVolumeBy: 10,
        start: 0,
		container:"body",
		defaultVolum:10
    };
	 

    // methods

    var tubular = function(node, options) { // should be called on the wrapper div
        var options = $.extend({}, defaults, options),
            $body = $(options.container) // cache body node
            $node = $(node); // cache wrapper node

        // build container
        var tubularContainer = '<div id="tubular-container" style="overflow: hidden; position: absolute; z-index: -1; width: 100%; height: 100%"><div id="tubular-player" style="position: absolute"></div></div><div id="tubular-shield" style="width: 100%; height: 100%; z-index: 2; position: absolute; left: 0; top: 0;"></div>';

        // set up css prereq's, inject tubular container and set up wrapper defaults
       // $('html,body').css({'width': '100%', 'height': '100%'});
        $body.prepend(tubularContainer);
        $node.css({position: 'relative', 'z-index': options.wrapperZIndex});

        // set up iframe player, use global scope so YT api can talk
        window.player;
		
        window.onYouTubeIframeAPIReady = function() {
            player = new YT.Player('tubular-player', {
                width: options.width,
                height: Math.ceil(options.width / options.ratio),
                videoId: options.videoId,
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    modestbranding: 1,
                    wmode: 'transparent',
					rel:0
					
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange,
					
                }
            });
	
        }

        window.onPlayerReady = function(e) {
            resize();
            if (options.mute) e.target.mute();
            e.target.seekTo(parseInt(options.start));
			e.target.setVolume(parseInt(options.defaultVolum));	
            e.target.playVideo();
			
        }

        window.onPlayerStateChange = function(state) {
			
            if (state.data === 0 && options.repeat) { // video ended and repeat option is set true
                player.seekTo(options.start); // restart
            }
        }

        // resize handler updates width, height and offset of player after resize/init
        var resize = function() {
            var width = $(window).width(),
                pWidth, // player width, to be defined
                height = $(window).height(),
                pHeight, // player height, tbd
                $tubularPlayer = $('#tubular-player');

            // when screen aspect ratio differs from video, video must center and underlay one dimension

            if (width / options.ratio < height) { // if new video height < window height (gap underneath)
                pWidth = Math.ceil(height * options.ratio); // get new player width
                $tubularPlayer.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0}); // player width is greater, offset left; reset top
				$tubularPlayer.parents('section.section,#tubular-container').css({'height':height});
            } else { // new video width < window width (gap to right)
                pHeight = Math.ceil(width / options.ratio); // get new player height
                $tubularPlayer.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2}); // player height is greater, offset top; reset left
				$tubularPlayer.parents('section.section,#tubular-container').css({'height':pHeight});
            }

        }

        // events
        $(window).on('resize.tubular', function() {
            resize();
        })

        $('body').on('click','.' + options.playButtonClass, function(e) { // play button
            e.preventDefault();
            player.playVideo();
        }).on('click', '.' + options.pauseButtonClass, function(e) { // pause button
            e.preventDefault();
            player.pauseVideo();
        }).on('click', '.' + options.muteButtonClass, function(e) { // mute button
            e.preventDefault();
            (player.isMuted()) ? player.unMute() : player.mute();
        }).on('click', '.' + options.volumeDownClass, function(e) { // volume down button
            e.preventDefault();
            var currentVolume = player.getVolume();
            if (currentVolume < options.increaseVolumeBy) currentVolume = options.increaseVolumeBy;
            player.setVolume(currentVolume - options.increaseVolumeBy);
        }).on('click', '.' + options.volumeUpClass, function(e) { // volume up button
            e.preventDefault();
            if (player.isMuted()) player.unMute(); // if mute is on, unmute
            var currentVolume = player.getVolume();
            if (currentVolume > 100 - options.increaseVolumeBy) currentVolume = 100 - options.increaseVolumeBy;
            player.setVolume(currentVolume + options.increaseVolumeBy);
        })
    }

    // load yt iframe js api

    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // create plugin

    $.fn.tubular = function (options) {
        return this.each(function () {
            if (!$.data(this, 'tubular_instantiated')) { // let's only run one
                $.data(this, 'tubular_instantiated', 
                tubular(this, options));
            }
        });
    }

})(jQuery, window);

/*!
* responsive menu
*/
(function ($) {
	"use strict";
		$.fn.hoomenu = function (options) {
				var defaults = {
						hooMenuTarget: jQuery(this), // Target the current HTML markup you wish to replace
						hooMenuContainer: 'body', // Choose where hoomenu will be placed within the HTML
						hooMenuClose: "X", // single character you want to represent the close menu button
						hooMenuCloseSize: "18px", // set font size of close button
						hooMenuOpen: "<span /><span /><span />", // text/markup you want when menu is closed
						hooRevealPosition: "right", // left right or center positions
						hooRevealPositionDistance: "0", // Tweak the position of the menu
						hooRevealColour: "", // override CSS colours for the reveal background
						hooScreenWidth: "480", // set the screen width you want hoomenu to kick in at
						hooNavPush: "", // set a height here in px, em or % if you want to budge your layout now the navigation is missing.
						hooShowChildren: true, // true to show children in the menu, false to hide them
						hooExpandableChildren: true, // true to allow expand/collapse children
						hooExpand: "+", // single character you want to represent the expand for ULs
						hooContract: "-", // single character you want to represent the contract for ULs
						hooRemoveAttrs: false, // true to remove classes and IDs, false to keep them
						onePage: false, // set to true for one page sites
						hooDisplay: "block", // override display method for table cell based layouts e.g. table-cell
						removeElements: "" // set to hide page elements
				};
				options = $.extend(defaults, options);

				// get browser width
				var currentWidth = window.innerWidth || document.documentElement.clientWidth;

				return this.each(function () {
						var hooMenu = options.hooMenuTarget;
						var hooContainer = options.hooMenuContainer;
						var hooMenuClose = options.hooMenuClose;
						var hooMenuCloseSize = options.hooMenuCloseSize;
						var hooMenuOpen = options.hooMenuOpen;
						var hooRevealPosition = options.hooRevealPosition;
						var hooRevealPositionDistance = options.hooRevealPositionDistance;
						var hooRevealColour = options.hooRevealColour;
						var hooScreenWidth = options.hooScreenWidth;
						var hooNavPush = options.hooNavPush;
						var hooRevealClass = ".hoomenu-reveal";
						var hooShowChildren = options.hooShowChildren;
						var hooExpandableChildren = options.hooExpandableChildren;
						var hooExpand = options.hooExpand;
						var hooContract = options.hooContract;
						var hooRemoveAttrs = options.hooRemoveAttrs;
						var onePage = options.onePage;
						var hooDisplay = options.hooDisplay;
						var removeElements = options.removeElements;

						//detect known mobile/tablet usage
						var isMobile = false;
						if ( (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i)) ) {
								isMobile = true;
						}

						if ( (navigator.userAgent.match(/MSIE 8/i)) || (navigator.userAgent.match(/MSIE 7/i)) ) {
							// add scrollbar for IE7 & 8 to stop breaking resize function on small content sites
								jQuery('html').css("overflow-y" , "scroll");
						}

						var hooRevealPos = "";
						var hooCentered = function() {
							if (hooRevealPosition === "center") {
								var newWidth = window.innerWidth || document.documentElement.clientWidth;
								var hooCenter = ( (newWidth/2)-22 )+"px";
								hooRevealPos = "left:" + hooCenter + ";right:auto;";

								if (!isMobile) {
									jQuery('.hoomenu-reveal').css("left",hooCenter);
								} else {
									jQuery('.hoomenu-reveal').animate({
											left: hooCenter
									});
								}
							}
						};

						var menuOn = false;
						var hooMenuExist = false;


						if (hooRevealPosition === "right") {
								hooRevealPos = "right:" + hooRevealPositionDistance + ";left:auto;";
						}
						if (hooRevealPosition === "left") {
								hooRevealPos = "left:" + hooRevealPositionDistance + ";right:auto;";
						}
						// run center function
						hooCentered();

						// set all styles for hoo-reveal
						var $navreveal = "";

						var hooInner = function() {
								// get last class name
								if (jQuery($navreveal).is(".hoomenu-reveal.hooclose")) {
										$navreveal.html(hooMenuClose);
								} else {
										$navreveal.html(hooMenuOpen);
								}
						};

						// re-instate original nav (and call this on window.width functions)
						var hooOriginal = function() {
							jQuery('.hoo-bar,.hoo-push').remove();
							jQuery(hooContainer).removeClass("hoo-container");
							jQuery(hooMenu).css('display', hooDisplay);
							menuOn = false;
							hooMenuExist = false;
							jQuery(removeElements).removeClass('hoo-remove');
						};

						// navigation reveal
						var showHooMenu = function() {
								var hooStyles = "background:"+hooRevealColour+";color:"+hooRevealColour+";"+hooRevealPos;
								if (currentWidth <= hooScreenWidth) {
								jQuery(removeElements).addClass('hoo-remove');
									hooMenuExist = true;
									// add class to body so we don't need to worry about media queries here, all CSS is wrapped in '.hoo-container'
									jQuery(hooContainer).addClass("hoo-container");
									jQuery('.hoo-container').prepend('<div class="hoo-bar"><a href="#nav" class="hoomenu-reveal" style="'+hooStyles+'">Show Navigation</a><nav class="hoo-nav"></nav></div>');

									//push hooMenu navigation into .hoo-nav
									var hooMenuContents = jQuery(hooMenu).html();
									jQuery('.hoo-nav').html(hooMenuContents);

									// remove all classes from EVERYTHING inside hoomenu nav
									if(hooRemoveAttrs) {
										jQuery('nav.hoo-nav ul, nav.hoo-nav ul *').each(function() {
											// First check if this has hoo-remove class
											if (jQuery(this).is('.hoo-remove')) {
												jQuery(this).attr('class', 'hoo-remove');
											} else {
												jQuery(this).removeAttr("class");
											}
											jQuery(this).removeAttr("id");
										});
									}

									// push in a holder div (this can be used if removal of nav is causing layout issues)
									jQuery(hooMenu).before('<div class="hoo-push" />');
									jQuery('.hoo-push').css("margin-top",hooNavPush);

									// hide current navigation and reveal hoo nav link
									jQuery(hooMenu).hide();
									jQuery(".hoomenu-reveal").show();

									// turn 'X' on or off
									jQuery(hooRevealClass).html(hooMenuOpen);
									$navreveal = jQuery(hooRevealClass);

									//hide hoo-nav ul
									jQuery('.hoo-nav ul').hide();

									// hide sub nav
									if(hooShowChildren) {
											// allow expandable sub nav(s)
											if(hooExpandableChildren){
												jQuery('.hoo-nav ul ul').each(function() {
														if(jQuery(this).children().length){
																jQuery(this,'li:first').parent().append('<a class="hoo-expand" href="#" style="font-size: '+ hooMenuCloseSize +'">'+ hooExpand +'</a>');
														}
												});
												jQuery('.hoo-expand').on("click",function(e){
														e.preventDefault();
															if (jQuery(this).hasClass("hoo-clicked")) {
																	jQuery(this).text(hooExpand);
																jQuery(this).prev('ul').slideUp(300, function(){});
														} else {
																jQuery(this).text(hooContract);
																jQuery(this).prev('ul').slideDown(300, function(){});
														}
														jQuery(this).toggleClass("hoo-clicked");
												});
											} else {
													jQuery('.hoo-nav ul ul').show();
											}
									} else {
											jQuery('.hoo-nav ul ul').hide();
									}

									// add last class to tidy up borders
									jQuery('.hoo-nav ul li').last().addClass('hoo-last');
									$navreveal.removeClass("hooclose");
									jQuery($navreveal).click(function(e){
										e.preventDefault();
								if( menuOn === false ) {
												$navreveal.css("text-align", "center");
												$navreveal.css("text-indent", "0");
												$navreveal.css("font-size", hooMenuCloseSize);
												jQuery('.hoo-nav ul:first').slideDown();
												menuOn = true;
										} else {
											jQuery('.hoo-nav ul:first').slideUp();
											menuOn = false;
										}
											$navreveal.toggleClass("hooclose");
											hooInner();
											jQuery(removeElements).addClass('hoo-remove');
									});

									// for one page websites, reset all variables...
									if ( onePage ) {
										jQuery('.hoo-nav ul > li > a:first-child').on( "click" , function () {
											jQuery('.hoo-nav ul:first').slideUp();
											menuOn = false;
											jQuery($navreveal).toggleClass("hooclose").html(hooMenuOpen);
										});
									}
							} else {
								hooOriginal();
							}
						};

						if (!isMobile) {
								// reset menu on resize above hooScreenWidth
								jQuery(window).resize(function () {
										currentWidth = window.innerWidth || document.documentElement.clientWidth;
										if (currentWidth > hooScreenWidth) {
												hooOriginal();
										} else {
											hooOriginal();
										}
										if (currentWidth <= hooScreenWidth) {
												showHooMenu();
												hooCentered();
										} else {
											hooOriginal();
										}
								});
						}

					jQuery(window).resize(function () {
								// get browser width
								currentWidth = window.innerWidth || document.documentElement.clientWidth;

								if (!isMobile) {
										hooOriginal();
										if (currentWidth <= hooScreenWidth) {
												showHooMenu();
												hooCentered();
										}
								} else {
										hooCentered();
										if (currentWidth <= hooScreenWidth) {
												if (hooMenuExist === false) {
														showHooMenu();
												}
										} else {
												hooOriginal();
										}
								}
						});

					// run main menuMenu function on load
					showHooMenu();
				});
		};
})(jQuery);