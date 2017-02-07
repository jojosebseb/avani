$('.slider-container').slick({
    dots: true,
    arrows: false
})
$('.media-slider-container').slick({
    dots: true,
    arrows: false
})

var scrolled = 0;
var selClass = "scrollAbout";

function bgMove(selClass){
    $('#'+selClass).css({
        'background-position': 'center '+ -scrolled +'px'
    })
}



$(window).on('scroll', function(){
    scrolled = $(this).scrollTop()/5;
    bgMove('scrollAbout');
})
