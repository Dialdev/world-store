$(function($) {
  
    $.validator.addMethod("letters", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z ]*$/);
});
    
 $("#valid").validate(
     {
    rules: {
      fullname: {
        required: true,
        minlength: 3
      },
        name: {
        required: true,
        minlength: 3,
        letters: true
      },
      email: {
      required: true,
      email: true
    }
    },
    messages: {
      fullname: {
        required: "Введите корректную фамилию",
        minlength: "Введите корректную фамилию"
      },
       name: {
        required: "Введите корректное имя",
        minlength: "Введите корректное имя"
      },
       email: "Неверно введен email"
    },
    submitHandler: function() {
    $successMsg.show();
  },
 });
    
    headerfixed = false;

    function windowSize() {
        if ($(window).width() > '1025') {
            headerfixed = true;
        } else {
            headerfixed = false;
        }
    }
    $(window).on('load resize', windowSize);
    $(window).bind("scroll", function() {
        if (headerfixed) {
            if ($(this).scrollTop() > 99) {
                if (!$('header').hasClass('header_fixed')) {
                    $('header ').addClass('header_fixed').css({
                        top: "-150px"
                    }).animate({
                        top: 0
                    }, 800);
                    $('.section').css({
                        "margin-top": "87px"
                    });
                }
            } else {
                if ($('header').hasClass('header_fixed')) {
                    $('header').removeClass('header_fixed');
                    $('.section').css({
                        "margin-top": "0px"
                    });
                }
            }
        }
    });
    $(document).bind("click", function(event) {
        if ($(event.target).closest(".buy-actions__button").length == 0 && $(event.target).closest(".buy-item").length == 0 && $(event.target).closest(".cloud-phones__button-buy").length == 0) {
            $("#w-buy").fadeOut('fast');
        }
    });
    if ($('.order-block__item .error').length) {
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
        $('.header__block-seti').fadeOut();
        $('body').click(function(e) {
            if (!$(e.target).closest(".header__block-button").length && $(".header__line-search").is(':visible')) {
                $('.header__block-button.active').removeClass('active');
                $('.header__block-seti').fadeIn();
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
        SHK.fillCart($('form#add2cart'));
        return false;
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
    $('.uznat-open').click(function() {
        $("#w-call-back_new").fadeIn();
        return false;
    });

    $('.fast-buy').click(function() {
        id = $(this).data('id');
        count = $('.product__calc-field').val();
        $("#с-buy").fadeIn();
        SHK.fillCart(id, count, 1);
        $('body').css('overflow','hidden');
        return false;
    });

    $('.popup__close,.buy-actions__button._continue').click(function(e) {
        if ($("#w-call-back").is(':visible')) {
            $("#w-call-back").fadeOut();
        }
        if ($("#w-call-back_new").is(':visible')) {
            $("#w-call-back_new").fadeOut();
        }
        if ($("#w-buy").is(':visible')) {
            $("#w-buy").fadeOut();
        }
        if ($("#w-review-succ").is(':visible')) {
            $("#w-review-succ").fadeOut();
        }
        if ($("#kredit-modal").is(':visible')) {
            $("#kredit-modal").fadeOut();
        }
        if ($("#с-buy").is(':visible')) {
            $("#с-buy").fadeOut();
        }
        if ($('body').css('overflow','hidden')) {
            $('body').css('overflow','unset')
        }
    });
    $('#w-review-succ').click(function() {
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
            autoplay: true,
            autoplaySpeed: 7500,
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
            slidesToShow: 5,
              autoplay: true,
            autoplaySpeed: 3000,
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
    $('.product__calc-item').on('click', '.product__button-calc', function(e) {
        var sibINPUT = $(this).siblings('input');
        var count = ~~sibINPUT.val();
        if ($(this).hasClass('plus')) {
            count++;
        } else {
            (count <= 1) ? count = 1: count--;
        }
        sibINPUT.val(count);
        $('.product__calc-field').attr('value', count)
    });
    /*if ("flexslider" in $.fn) {
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
    }*/
    /*if ("flexslider" in $.fn) {
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    }*/
    $("body").on("submit", ".popup__form", function() {
        yaCounter19029082.reachGoal('ZVONOK');
        console.log("ZVONOK ok");
    });
    $("body").on("submit", ".cart form", function() {
        yaCounter19029082.reachGoal('ZAKAZ');
        console.log("ZAKAZ ok");
    });
    $("body").on("click", ".cloud-phones__button-buy", function() {
        yaCounter19029082.reachGoal('KUPIT');
        console.log("KUPIT ok");
    });
    $('script').each(function() {
        $(this).removeAttr('type');
    });
    $(".kredit_botton").click(function() {
        window.location ="https://win.b2pos.ru/f551e2f201306e5d902a5c5e414ed37c-36b7cb62df42fd6fce5c04ab093ea23f616320634/";
       
       /* var name_model = $(this).parent('div').find(".cloud-phones__product-model").html();
        var cost_model = $(this).parent('div').find(".cloud-phones__product-cost").html();
        cost_model.substring(0, cost_model.length - 2);
        var int_cost_model = cost_model.replace(/\s/ig, '');
        var final_cost_model = parseFloat(int_cost_model) * 1.02;
        var final_publick_cost = String(final_cost_model).replace(/[.]/g, "");
        $('#kredit-modal').find("input[name='name_tovar']").val(name_model);
        $('#kredit-modal').find("input[name='cost_tovar']").val(final_cost_model);
        $('#kredit-modal').find("#cost_tovar").val(final_cost_model + " р");
        $('#kredit-modal').fadeIn();
        var options = {
            ttCode: '0117001004255',
            ttName: 'г. Тула , ул. Советская 47',
            fullName: '',
            phone: '',
            returnUrl: 'http://world-store.su',
            order: [{
                category: '',
                model: name_model,
                mark: '',
                quantity: 1,
                price: final_cost_model
            }, ]
        };
        $('#pos-credit-link').click(function() {
            if ($('input.checkbox_check').is(':checked')) {
                var optionsSTR = JSON.stringify(options);
                options = JSON.parse(optionsSTR);
                $('#pos-credit-link').attr('href', 'https://my.pochtabank.ru/pos-credit?' + $.param(options));
            } else {
                alert('Дайте свое согласие на обработку данных!');
            }
        });
        return false;*/
    });
    
    $("#slider-rang").slider({
        animate: "slow",
        min: 16900,
        max: 246000,
        step: 100,
        values: [16900, 246000],
        range: true,
        stop: function(e, ui) {
            $("input#minCost").val($("#slider-rang").slider("values", 0));
            $("input#maxCost").val($("#slider-rang").slider("values", 1));
        },
        slide: function(e, ui) {
            $("input#minCost").val($("#slider-rang").slider("values", 0));
            $("input#maxCost").val($("#slider-rang").slider("values", 1));
        }
    });
    $("input#minCost").change(function() {
        var value1 = $("input#minCost").val();
        var value2 = $("input#maxCost").val();
        if (parseInt(value1) > parseInt(value2)) {
            value1 = value2;
            $("input#minCost").val(value1);
        }
        $("#slider-rang").slider("values", 0, value1);
    });
    $("input#maxCost").change(function() {
        var value1 = $("input#minCost").val();
        var value2 = $("input#maxCost").val();
        if (value2 > 246000) {
            value2 = 246000;
            jQuery("input#maxCost").val(246000)
        }
        if (parseInt(value1) > parseInt(value2)) {
            value2 = value1;
            $("input#maxCost").val(value2);
        }
        $("#slider-rang").slider("values", 1, value2);
    });
    $('.filter-btn__reset').click(function() {
        $("#slider-rang").slider("values", 0, 16900);
        $("#slider-rang").slider("values", 1, 246000);
    });



$(".color-list__element").click(function(galleryThumbs) {
    var show2 = $(this).data("color");
    $cisl = 0;
    var $a = [];
    $( ".galari_min .color_img" ).each(function(){
        $a.push($(this).data("color"));
        $cisl = $cisl+1;
    });

    $('.galari_min .color_img').each(function(index, value)
    {
    	if($(this).data('color')==show2)
    	{
    	galleryThumbs.slideTo(index, 1000, false);		
    	}
    })

		/*
       $.each($a, function (index, value) {
        if (value.search(show2) != -1) {

             $('.galari_min .color_img').eq(index).click().addClass('swiper-slide-thumb-active');
              console.log(value);
        };
        if (value.search(show2) == -1) {
            $('.galari_min .color_img').eq(index).trigger('click').removeClass('swiper-slide-thumb-active');
        };
    });
    */

});

});
// полифилл CustomEven для IE11
(function () {
    if (typeof window.CustomEvent === "function") return false;
    function CustomEvent(event, params) {
      params = params || { bubbles: false, cancelable: false, detail: null };
      var evt = document.createEvent('CustomEvent');
      evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
      return evt;
    }
    window.CustomEvent = CustomEvent;
  })();

  $modal = function (options) {
    var
      _elemModal,
      _eventShowModal,
      _eventHideModal,
      _hiding = false,
      _destroyed = false,
      _animationSpeed = 200;

    function _createModal(options) {
      var
        elemModal = document.createElement('div'),
        modalTemplate = '<div class="modal__backdrop" data-dismiss="modal"><div class="modal__content"><div class="modal__header"><div class="modal__title" data-modal="title">{{title}}</div><span class="modal__btn-close" data-dismiss="modal" title="Закрыть">×</span></div><div class="modal__body" data-modal="content">{{content}}</div>{{footer}}</div></div>',
        modalFooterTemplate = '<div class="modal__footer">{{buttons}}</div>',
        modalButtonTemplate = '<button type="button" class="{{button_class}}" data-handler={{button_handler}}>{{button_text}}</button>',
        modalHTML,
        modalFooterHTML = '';

      elemModal.classList.add('modal');
      modalHTML = modalTemplate.replace('{{title}}', options.title || 'При заказе уточняйте цены в розничных магазинах');
      modalHTML = modalHTML.replace('{{content}}', options.content || '');
      if (options.footerButtons) {
        for (var i = 0, length = options.footerButtons.length; i < length; i++) {
          var modalFooterButton = modalButtonTemplate.replace('{{button_class}}', options.footerButtons[i].class);
          modalFooterButton = modalFooterButton.replace('{{button_handler}}', options.footerButtons[i].handler);
          modalFooterButton = modalFooterButton.replace('{{button_text}}', options.footerButtons[i].text);
          modalFooterHTML += modalFooterButton;
        }
        modalFooterHTML = modalFooterTemplate.replace('{{buttons}}', modalFooterHTML);
      }
      modalHTML = modalHTML.replace('{{footer}}', modalFooterHTML);
      elemModal.innerHTML = modalHTML;
      document.body.appendChild(elemModal);
      return elemModal;
    }

    function _showModal() {
      if (!_destroyed && !_hiding) {
        _elemModal.classList.add('modal__show');
        document.dispatchEvent(_eventShowModal);
      }
    }

    function _hideModal() {
      _hiding = true;
      _elemModal.classList.remove('modal__show');
      _elemModal.classList.add('modal__hiding');
      setTimeout(function () {
        _elemModal.classList.remove('modal__hiding');
        _hiding = false;
      }, _animationSpeed);
      document.dispatchEvent(_eventHideModal);
    }

    function _handlerCloseModal(e) {
      if (e.target.dataset.dismiss === 'modal') {
        _hideModal();
      }
    }

    _elemModal = _createModal(options || {});


    _elemModal.addEventListener('click', _handlerCloseModal);
    _eventShowModal = new CustomEvent('show.modal', { detail: _elemModal });
    _eventHideModal = new CustomEvent('hide.modal', { detail: _elemModal });

    return {
      show: _showModal,
      hide: _hideModal,
      destroy: function () {
        _elemModal.parentElement.removeChild(_elemModal),
          _elemModal.removeEventListener('click', _handlerCloseModal),
          destroyed = true;
      },
      setContent: function (html) {
        _elemModal.querySelector('[data-modal="content"]').innerHTML = html;
      },
      setTitle: function (text) {
        _elemModal.querySelector('[data-modal="title"]').innerHTML = text;
      }
    }
  };

  (function () {
    // создаём модальное окно
    var modal = $modal({
      content: '(ТЦ "Парадиз") +7 (952) 019-55-55<br>(ТРЦ "Макси") +7 (910) 163-63-20<br>(ТРЦ «Гостиный Двор») +7 (950) 910-46-59'
    });
    // при клике на документ
    document.addEventListener('click', function (e) {
      if (e.target.dataset.toggle === 'modal') {
        modal.show();
      }
    });
  })();