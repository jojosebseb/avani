$( document ).ready(function() {


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
        responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
    })

    $('.img-thumb-slide').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        variableWidth: true,
        dots: false,
        arrows: true,
        prevArrow: '<div class="border-container prevArrow"><div class="arrow left"></div></div>',
        nextArrow: '<div class="border-container nextArrow"><div class="arrow right"></div></div>',
        responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: false,
          arrows: true,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
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
                })
            }
        })

    })

    $('.product-dd-ul > li').on('mouseleave', function(){

        $('.product-drop-module').css({
            opacity: '1',
            transform: 'scale(1)',
        })

    })

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

    var thumbPreview = "";
    var thumbImg = $('.img-thumb > img');
    var sizeLi = $('.size-parent > li');

    thumbImg.on('click', function(){
        var curSelected = $(this).attr('src');
        var curData = $(this).data('sz');
        console.log(curData);
        $(this).parents('.img-thumb-slide').find('.img-thumb').removeClass('active');
        $(this).parent().addClass('active');
        $(this).parents('.w30').find('.product-img-container > img').attr('src', curSelected)
    })


    $('.gallery-module').each(function(index){
        if (index > 7) {
            $(this).hide();
        }
    })

    $('.product-img-container > img').on('click', function(){
            $(this).toggleClass('zoomed');
    })


});
