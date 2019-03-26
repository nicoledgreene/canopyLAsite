var activeSlideIndex;
var videoExists;
var imageArrayLength = 0;

if(document.getElementById('slideItem100')) {
    videoExists = true;
    setActiveSlideItem(100);
}
else {
    videoExists = false;
    setActiveSlideItem(0);
}

if($('.slide').length) {
    imageArrayLength = $('.slide').length;
}
if(imageArrayLength===0) {
    $('#slideNext').addClass('invisible');
}

$('#slideNext').click(
    () => {
        if(activeSlideIndex===100) {
            activeSlideIndex = 0;
        }
        else {
            activeSlideIndex = activeSlideIndex + 1;
        }
        setActiveSlideItem(activeSlideIndex);
    }
)
$('#slidePrevious').click(
    () => {
        if(activeSlideIndex===0) {
            activeSlideIndex = 100;
        }
        else {
            activeSlideIndex = activeSlideIndex - 1;
        }
        setActiveSlideItem(activeSlideIndex);
    }
)

function setActiveSlideItem(index) {
    if(imageArrayLength>0) {
        if(index === (imageArrayLength - 1)) {
            $('#slideNext').addClass('invisible');
            $('#slidePrevious').removeClass('invisible');
        }
        else {
            $('#slideNext').removeClass('invisible');
        }
    }
    if((videoExists && index===100) || (!videoExists && index===0)) {
        $('#slidePrevious').addClass('invisible');
        $('#slideNext').removeClass('invisible');
    }
    else if((videoExists && index!==100) || (!videoExists && index!==0)) {
        $('#slidePrevious').removeClass('invisible');
    }

    if(index !== 100) {
       $('#slideItem100').addClass('hidden');
    }
    for(let i=0; i<20; i++) {
        let str = i.toString();
        if(i !== index) {
           $('#slideItem'+str).addClass('hidden');
           $('#slideItem'+str).removeClass('show');
        }
        else if(i===index) {
           $('#slideItem'+str).addClass('show');
           $('#slideItem'+str).removeClass('hidden');
        }
    }
    if(index===100) {
       $('#slideItem100').addClass('show');
       $('#slideItem100').removeClass('hidden');
    }
    activeSlideIndex = index;
}


