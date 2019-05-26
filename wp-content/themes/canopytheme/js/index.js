window.sr = ScrollReveal({ 
    distance: '30px',
    duration: 1000,
    scale: 0
});

function sendEmail() {
	window.location='mailto:yo@canopy-la.com?Subject=Hey%20Canopy'
}

let windowWidth = $( window ).width();
const pageOffset = window.pageYOffset;
let navExpanded = false;

let isMobileView = false;
checkIfMobileView();
function checkIfMobileView() {
	if(windowWidth <= 600) {
		isMobileView = true;
		$(".main-features-mobile").removeClass('hidden');
		$(".main-features").addClass('hidden');	
	}
	else {
		isMobileView = false;
		$(".main-features-mobile").addClass('hidden');
		$(".main-features").removeClass('hidden');
	}
}

window.onresize = () => {
	windowWidth = $( window ).width();
	checkIfMobileView();
}

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
	$('.expandable-nav').toggleClass('hidden');
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

var isProjectPage = false;
if(document.getElementById('projectPagePlaceholder')) {
	isProjectPage = true;
}
else {
	isProjectPage = false;
}

//navbar fixed
$(document).scroll(function() {
	let offset = window.pageYOffset;
	if(offset >=85) {
		$('.main-menu').addClass('dark-nav');
		$('#title-logo').addClass('hidden');
		$('#title-small-logo').removeClass('hidden');
		if(isProjectPage) {
			$('.main-menu').removeClass('transparent-black-background');
		}
	}
	else {
		$('.main-menu').removeClass('dark-nav');
		$('.parent-nav-links').addClass('important-margin');
		if(isProjectPage) {
			$('.main-menu').addClass('transparent-black-background');
		}
	}
	// 	$('#title-logo').removeClass('hidden');
	// 	$('#title-small-logo').addClass('hidden');
	// }
})



//Homepage top features
var activeHeroIndex = 0;
setActiveBackground(0);
$('.hero-button-0').click(() => {
	stopMyTimer();
	setActiveBackground(0);
	startMyTimer();
});
$('.hero-button-1').click(() => {
	stopMyTimer();
	setActiveBackground(1);
	startMyTimer();
});
$('.hero-button-2').click(() => {
	stopMyTimer();
	setActiveBackground(2);
	startMyTimer();
});
function setActiveBackground(activeIndex) {
	activeHeroIndex = activeIndex;
	let possIndexes = [0,1,2];
	for(let i=0; i < possIndexes.length; i++) {
		if(activeIndex===possIndexes[i]) {
			$('.hero-index-'+possIndexes[i]).removeClass('invisible-with-transition');
			$('.hero-image-'+possIndexes[i]).removeClass('invisible-with-transition');
			$('.hero-button-'+possIndexes[i]).addClass('diagonal-strikethrough');
		}
		else {
			$('.hero-index-'+possIndexes[i]).addClass('invisible-with-transition');
			$('.hero-button-'+possIndexes[i]).removeClass('diagonal-strikethrough');
			$('.hero-image-'+possIndexes[i]).addClass('invisible-with-transition');
		}
	}
}
var mySlideshow = setInterval(myTimer, 5000);
function myTimer() {
	let newActiveIndex = 0;
	if(activeHeroIndex===0 || activeHeroIndex===1) {
		newActiveIndex = activeHeroIndex + 1;
	}
	else {
		newActiveIndex = 0;
	}
	window.setTimeout(function(){
		setActiveBackground(newActiveIndex)
	}, 0);
}
function stopMyTimer() {
	clearInterval(mySlideshow);
}
function startMyTimer() {
	mySlideshow = setInterval(myTimer, 5000);
}


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


//footer links
function openFb() {
	window.open("https://www.facebook.com/Canopy-1883362371752079/");
};
function openIg() {
	window.open("https://www.instagram.com/canopy_la/");
};
function openVi() {
	window.open("https://vimeo.com/user96603243");
};

