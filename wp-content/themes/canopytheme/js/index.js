window.sr = ScrollReveal({ 
    distance: '30px',
    duration: 1000,
    scale: 0
});

function sendEmail() {
	window.location='mailto:yo@canopy-la.com?Subject=Hey%20Canopy'
}

const windowWidth = $( window ).width();
const pageOffset = window.pageYOffset;
let navExpanded = false;
$(".main-menu").removeClass('extra-nav-padding');

if(pageOffset<85) {
	//nav animations
	sr.reveal('#title-logo', {delay: 100});
	sr.reveal('.hamburger', {delay: 200});
	if(windowWidth>600) {
		sr.reveal('#nav1', {delay: 200});
		sr.reveal('#nav2', {delay: 300});
		sr.reveal('#nav3', {delay: 400});
	}
	// sr.reveal('.main-features', {delay: 500});
}
else if(pageOffset>=85) {
	$('.main-menu').addClass('dark-nav');
	$('#title-logo').addClass('hidden');
	$('#title-small-logo').removeClass('hidden');
}

//nav hide/show
//parent links
$('#nav2').click(() => {
	navExpanded = true;
    $("#nav2").toggleClass('active-main-link');
	$('#projects-sub-nav').toggleClass('hidden');
	if(windowWidth>600) {
		$(".main-menu").toggleClass('extra-nav-padding');
	}
})
$('#filmToggle').click(() => {
    showNavSubItems('filmToggle');
})
$('#videoGameToggle').click(() => {
    showNavSubItems('videoGameToggle');
})
$('#immersiveToggle').click(() => {
    showNavSubItems('immersiveToggle');
})
$('#commercialToggle').click(() => {
    showNavSubItems('commercialToggle');
})

$(".hamburger").click(() => {
	$(".home-nav").toggleClass("home-nav-display");
	$(".main-menu").addClass("dark-nav");
})

const navMap = {
    'immersiveToggle': '#immersiveSub',
    'videoGameToggle': '#videoGameSub',
    'filmToggle': '#filmSub',
    'commercialToggle': '#commercialSub'
}
function showNavSubItems(itemKey) {
    for(let key in navMap) {
        let val = navMap[key];
        if(key===itemKey) {
            $(val).attr('class', 'sub-project-links');
            $('#'+key).attr('class', 'sub-nav-item-title active-title');
        }
        else {
            $(val).attr('class', 'sub-project-links hidden');
            $('#'+key).attr('class', 'sub-nav-item-title');
        }
    }
}

//navbar fixed
$(document).scroll(function() {
	let offset = window.pageYOffset;
	if(offset >=85) {
		$('.main-menu').addClass('dark-nav');
		$('#title-logo').addClass('hidden');
		$('#title-small-logo').removeClass('hidden');
	}
	else {
		$('.main-menu').removeClass('dark-nav');
		$('#title-logo').removeClass('hidden');
		$('#title-small-logo').addClass('hidden');
	}
})



//Homepage top features
var activeHeroIndex = 0;
$('#hero-button-0').addClass('diagonal-strikethrough');
$('.hero-image-1').addClass('hidden');
$('.hero-image-2').addClass('hidden');
$('#hero-button-0').click(() => {
	//TODO: FIX THIS BUG.
	activeHeroIndex = 0;
	$('#hero-button-0').addClass('diagonal-strikethrough');
	$('.hero-index-0').removeClass('hidden');
	$('.hero-index-1').addClass('hidden');
	$('#hero-button-1').removeClass('diagonal-strikethrough');
	$('.hero-index-2').addClass('hidden');
	$('#hero-button-0').removeClass('diagonal-strikethrough');
	$('.hero-image-0').removeClass('hidden');
	$('.hero-image-1').addClass('hidden');
	$('.hero-image-2').addClass('hidden');
});
$('#hero-button-1').click(() => {
	activeHeroIndex = 1;
	$('.hero-index-1').removeClass('hidden');
	$('#hero-button-1').addClass('diagonal-strikethrough');
	$('.hero-index-0').addClass('hidden');
	$('#hero-button-0').removeClass('diagonal-strikethrough');
	$('.hero-index-2').addClass('hidden');
	$('#hero-button-2').removeClass('diagonal-strikethrough');
	$('.hero-image-0').addClass('hidden');
	$('.hero-image-1').removeClass('hidden');
	$('.hero-image-2').addClass('hidden');
});
$('#hero-button-2').click(() => {
	activeHeroIndex = 2;
	$('.hero-index-2').removeClass('hidden');
	$('#hero-button-2').addClass('diagonal-strikethrough');
	$('.hero-index-0').addClass('hidden');
	$('#hero-button-0').removeClass('diagonal-strikethrough');
	$('.hero-index-1').addClass('hidden');
	$('#hero-button-1').removeClass('diagonal-strikethrough');
	$('.hero-image-0').addClass('hidden');
	$('.hero-image-1').addClass('hidden');
	$('.hero-image-2').removeClass('hidden');
});

//press slider
var activePressIndex = 0;
var pressLength = $('.feat-img').length;
setActivePressItem(0);
$(".feat-arrow-previous").click(() => {
	if(activePressIndex === 0) {
		activePressIndex = (pressLength - 1);
	}
	else {
		activePressIndex = activePressIndex - 1;
	}

	setActivePressItem(activePressIndex);
});
$(".feat-arrow-next").click(() => {
	if(activePressIndex === (pressLength - 1)) {
		activePressIndex = 0;
	}
	else {
		activePressIndex = activePressIndex + 1;
	}
	setActivePressItem(activePressIndex);
})
function setActivePressItem(index) {
	for(let i=0; i < (pressLength); i++) {
		if(index !== i) {
			$('#feat-img-'+i).attr('class', 'feat-img invisible');
			$('#feat-text-'+i).attr('class', 'feat-text invisible');
		}
		else if(i === index) {
			$('#feat-img-'+index).attr('class', 'feat-img');
			$('#feat-text-'+index).attr('class', 'feat-text');
		}
	}
}


// //grid animations
sr.reveal('.grid-box-1', {delay: 200});
sr.reveal('.grid-box-2', {delay: 400});
sr.reveal('.grid-box-3', {delay: 600});


$(function() {

	// Find all YouTube videos
	var $allVideos = $("iframe[src^='http:///player.vimeo.com']"),

	    // The element that is fluid width
	    $fluidEl = $("body");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

		$(this)
			.data('aspectRatio', this.height / this.width)
			
			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

	});

	// When the window is resized
	// (You'll probably want to debounce this)
	$(window).resize(function() {

		var newWidth = $fluidEl.width();
		
		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {

			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));

		});

	// Kick off one resize to fix all videos on page load
	}).resize();

});
