window.sr = ScrollReveal({ 
    distance: '30px',
    duration: 1000,
    scale: 0
});

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
	sr.reveal('.main-features', {delay: 500});
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




// //grid animations
sr.reveal('.grid-box-1', {delay: 200});
sr.reveal('.grid-box-2', {delay: 400});
sr.reveal('.grid-box-3', {delay: 600});


// const gridMap = {
//     'g1': '#o1',
//     'g2': '#o2',
//     'g3': '#o3',
//     'g4': '#o4',
//     'g5': '#o5',
//     'g6': '#o6',
//     'g7': '#o7',
//     'g8': '#o8',
//     'g9': '#o9',
// }

// $('#g1').hover(() => {
//     showElementByGridMap('g1');
// })
// $('#g2').hover(() => {
//     showElementByGridMap('g2');
// })
// $('#g3').hover(() => {
//     showElementByGridMap('g3');
// })
// $('#g4').hover(() => {
//     showElementByGridMap('g4');
// })
// $('#g5').hover(() => {
//     showElementByGridMap('g5');
// })
// $('#g6').hover(() => {
//     showElementByGridMap('g6');
// })
// $('#g7').hover(() => {
//     showElementByGridMap('g7');
// })
// $('#g8').hover(() => {
//     showElementByGridMap('g8');
// })
// $('#g9').hover(() => {
//     showElementByGridMap('g9');
// })

// function showElementByGridMap(key) {
//     let val = gridMap[key];
//     $(val).attr('class', 'grid-item-overlay');
// }

// $('#g1').mouseleave(() => {
//     hideElementByGridMap('g1');
// })
// $('#g2').mouseleave(() => {
//     hideElementByGridMap('g2');
// })
// $('#g3').mouseleave(() => {
//     hideElementByGridMap('g3');
// })
// $('#g4').mouseleave(() => {
//     hideElementByGridMap('g4');
// })
// $('#g5').mouseleave(() => {
//     hideElementByGridMap('g5');
// })
// $('#g6').mouseleave(() => { 
//     hideElementByGridMap('g6');
// })
// $('#g7').mouseleave(() => {
//     hideElementByGridMap('g7');
// })
// $('#g8').mouseleave(() => {
//     hideElementByGridMap('g8');
// })
// $('#g9').mouseleave(() => {
//     hideElementByGridMap('g9');
// })

// function hideElementByGridMap(key) {
//     let val = gridMap[key];
//     $(val).attr('class', 'grid-item-overlay hidden');
// }

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
