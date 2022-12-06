$(function($) {



	$(window).bind("scroll",function(){
	  if ($(this).scrollTop()>99) {
		  if (!$('header').hasClass('header_fixed')) {
			  $('header ').addClass('header_fixed').css({top:"-150px"}).animate({top:0},800);
			  $('.section').css({"margin-top":"87px"});
		  }
	  } else {
		  if ($('header').hasClass('header_fixed')) {
			  $('header').removeClass('header_fixed');
			  $('.section').css({"margin-top":"0px"});	  
		  }
	  }
	});

    $(document).bind("click", function (event) {
        if ($(event.target).closest(".buy-actions__button").length==0 && $(event.target).closest(".buy-item").length==0 && $(event.target).closest(".cloud-phones__button-buy").length==0) {
            $("#w-buy").fadeOut('fast');
        }
    });

    if($('.order-block__item .error').length){
        $('html, body').animate({
            scrollTop: $(".order-wrapper").offset().top
        }, 1000);
    }

    $('.header__mobile-button').click(function() {
        $(this).toggleClass('active');
        $('.header__menu').toggleClass('active');
        $(this).parent().parent().toggleClass('active');
    });
    $('._search').click(function() {
        $(this).parent().toggleClass('active');
        $('body').click(function(e) {
            if (!$(e.target).closest(".header__block-button").length && $(".header__line-search").is(':visible')) {
                $('.header__block-button.active').removeClass('active');
            }
        });
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('.up').fadeIn();
        } else {
            $('.up').fadeOut();
        }
    });
    $('.up').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });
    $('.buy-item').click(function() {
        id = $(this).data('id');
        count = $('.product__calc-field').val();
        $('#w-buy').fadeIn();
        SHK.fillCart(id, count, 1);
    });
    $('.cloud-phones__button-buy').click(function() {
        id = $(this).data('id');
        count = 1;
        $('#w-buy').fadeIn();
        SHK.fillCart(id, count, 1);
    });
    if ("inputmask" in $.fn) {
        $(".mask-number").inputmask("+7 (999) 999 99 99", {
            "clearIncomplete": true
        });
    }
    $('.call-back-open, .js-callback').click(function() {
        $("#w-call-back").fadeIn();
        return false;
    });
    $('.popup__close,.buy-actions__button._continue').click(function(e) {
        if ($("#w-call-back").is(':visible')) {
            $("#w-call-back").fadeOut();
        }
        if ($("#w-buy").is(':visible')) {
            $("#w-buy").fadeOut();
        }
        if ($("#w-review-succ").is(':visible')) {
            $("#w-review-succ").fadeOut();
        }
    });

    $('#w-review-succ').click(function(){
        $("#w-review-succ").fadeOut();
    });

    $('body').click(function(e) {
        if (!$(e.target).closest(".popup__wrapper").length && $("#w-call-back").is(':visible')) {
            $("#w-call-back").fadeOut();
        }
    });
    $(document).on('af_complete', function(event, response) {
        var form = response.form;
        form.hide();
        $('.popup__thank-you-text').text('Ваша заявка успешно отправлена! В ближайшее время с Вами свяжется наш менеджер.');
    });
    if ("slick" in $.fn) {
        $('.big-slider__ul').slick({
            arrows: true,
            dots: true,
            respondTo: 'window',
            draggable: true,
            infinite: true,
            adaptiveHeight: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }]
        });
        $('.select-phone__wrapper-list').slick({
            arrows: true,
            dots: false,
            respondTo: 'window',
            draggable: true,
            infinite: true,
            adaptiveHeight: true,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1460,
                settings: {
                    slidesToShow: 6
                }
            }, {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 762,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $('.block-news__list').slick({
            arrows: true,
            dots: false,
            respondTo: 'window',
            draggable: true,
            infinite: true,
            adaptiveHeight: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    }
    if ("fancybox" in $.fn) {
        $(".show-photo").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            padding: 0,
            autoCenter: true,
            helpers: {
                title: {
                    type: 'inside'
                }
            }
        });
    }
    $('.footer__column-title').click(function() {
        $(this).toggleClass('active');
        $(this).parent().toggleClass('active');
    });
    if ("mCustomScrollbar" in $.fn) {
        $(".table-scroll").mCustomScrollbar({
            axis: "x",
            mouseWheel: false,
            scrollInertia: 0,
            scrollbarPosition: "outside"
        });
    }
    $('.product__calc-item').on('click', 'button', function(e) {
        var sibINPUT = $(this).siblings('input');
        var count = ~~sibINPUT.val();
        if ($(this).hasClass('plus')) {
            count++;
        } else {
            (count <= 1) ? count = 1: count--;
        }
        sibINPUT.val(count);
    });
    if ("flexslider" in $.fn) {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            minItems: 4,
            maxItems: 4,
            itemWidth: 100,
            itemMargin: 0,
            asNavFor: '#slider'
        });
    }
    if ("flexslider" in $.fn) {
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    }
	$( "body" ).on( "submit", ".popup__form", function() {
			yaCounter19029082.reachGoal('ZVONOK');
			console.log("ZVONOK ok");
	});
	$( "body" ).on( "submit", ".cart form", function() {
			yaCounter19029082.reachGoal('ZAKAZ');
			console.log("ZAKAZ ok");
	});
	$( "body" ).on( "click", ".cloud-phones__button-buy", function() {
			yaCounter19029082.reachGoal('KUPIT');
			console.log("KUPIT ok");
	});
	
	
});