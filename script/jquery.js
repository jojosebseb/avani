$('.slider-container').slick({
    dots: true,
    arrows: false,
    infinite: false
    // autoplay: true
})
$('.media-slider-container').slick({
    dots: true,
    arrows: false,
    autoplay: true
})
$('.media-banner-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true
})
$('.ingredient-flex').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    variableWidth: false,
    dots: true,
    arrows: false,
    // autoplay: true
})

var scrolled = 0;
var selClass = "scrollAbout";

function bgMove(selClass){
    $('#'+selClass).css({
        'background-position': 'center '+-scrolled/7 +'px'
    })
}

$('#productHandle').on('click', function(){
    $(this).toggleClass('active');
    $('#productDrop').toggleClass('active');
})


$(window).on('scroll', function(){
    scrolled = $(this).scrollTop()/4;
    bgMove('scrollAbout');
})

$('.section-container').waypoint(function(){
    var id = $(this.element).attr('id');
    $(this.element).addClass('active');

}, {
  offset: '80%'
})

var indexVideo = $('.hero-video');
var prodMod = $('.product-drop-module');

$('.product-dd-ul > li').on('mouseenter', function(){
    var get = $(this).data("value");

    $('.product-drop-module').css({
        opacity: '0.5',
        transition: 'all .3s ease'
    })

    prodMod.each(function( index ){
        var x = $(this).data('value2').toString();
        if (x.indexOf(get.toString())>=0) {
            $(this).css({
                opacity: '1',
                transform: 'scale(1.02)'
                // border: '1px solid white'
            })
        }
    })

    // $('.product-drop-module[data-value2='+get+']').css({
    //     opacity: '1',
    //     transform: 'scale(1.05)'
    // })

})

$('.product-dd-ul > li').on('mouseleave', function(){

    $('.product-drop-module').css({
        opacity: '1',
        transform: 'scale(1)',
    })

})

// $(document).ready(){
//     indexVideo.mute();
// }


// $( ".section-container" ).each(function( index ) {
//   // console.log( index + ": ");
//   $(this).css({
//       transitionDelay: (index/5)+'s',
//   })
// });

$('.mobile-handle').on('click', function(){
    $(this).toggleClass('active');
    $('.navbar-navigation').toggleClass('active');
    $('#productHandle').removeClass('active');
    $('.navbar-navigation > li').each(function(index){
        $(this).css({
            transitionDelay: index/10+'s'
        })
    })
})
