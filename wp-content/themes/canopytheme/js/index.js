window.sr = ScrollReveal({ 
    distance: '30px',
    duration: 1000,
    scale: 0
});

//nav animations
sr.reveal('#title-logo', {delay: 100});
sr.reveal('#nav1', {delay: 200});
sr.reveal('#nav2', {delay: 300});
// sr.reveal('#nav3', {delay: 400});
// sr.reveal('#nav4', {delay: 500});
// sr.reveal('#nav5', {delay: 600});
// sr.reveal('#nav6', {delay: 700});
sr.reveal('#nav7', {delay: 400});
// sr.reveal('#nav8', {delay: 900});

//grid animations
sr.reveal('.grid-item-1', {delay: 200});
sr.reveal('.grid-item-2', {delay: 400});
sr.reveal('.grid-item-3', {delay: 600});

const gridMap = {
    'g1': '#o1',
    'g2': '#o2',
    'g3': '#o3',
    'g4': '#o4',
    'g5': '#o5',
    'g6': '#o6',
    'g7': '#o7',
    'g8': '#o8',
    'g9': '#o9',
}

$('#g1').hover(() => {
    showElementByGridMap('g1');
})
$('#g2').hover(() => {
    showElementByGridMap('g2');
})
$('#g3').hover(() => {
    showElementByGridMap('g3');
})
$('#g4').hover(() => {
    showElementByGridMap('g4');
})
$('#g5').hover(() => {
    showElementByGridMap('g5');
})
$('#g6').hover(() => {
    showElementByGridMap('g6');
})
$('#g7').hover(() => {
    showElementByGridMap('g7');
})
$('#g8').hover(() => {
    showElementByGridMap('g8');
})
$('#g9').hover(() => {
    showElementByGridMap('g9');
})

function showElementByGridMap(key) {
    let val = gridMap[key];
    $(val).attr('class', 'grid-item-overlay');
}

$('#g1').mouseleave(() => {
    hideElementByGridMap('g1');
})
$('#g2').mouseleave(() => {
    hideElementByGridMap('g2');
})
$('#g3').mouseleave(() => {
    hideElementByGridMap('g3');
})
$('#g4').mouseleave(() => {
    hideElementByGridMap('g4');
})
$('#g5').mouseleave(() => {
    hideElementByGridMap('g5');
})
$('#g6').mouseleave(() => { 
    hideElementByGridMap('g6');
})
$('#g7').mouseleave(() => {
    hideElementByGridMap('g7');
})
$('#g8').mouseleave(() => {
    hideElementByGridMap('g8');
})
$('#g9').mouseleave(() => {
    hideElementByGridMap('g9');
})

function hideElementByGridMap(key) {
    let val = gridMap[key];
    $(val).attr('class', 'grid-item-overlay hidden');
}

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
