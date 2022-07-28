(function ($) {

    'use strict';

    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }

    /*
	Popup with video or map
	*/
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

    /*
	Dialog with CSS animation
	*/
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    /*News alert*/
    $('#newsalertForm').validate({
        onkeyup: false,
        onclick: false,
        onfocusout: false,
        rules: {
            'checkboxes[]': {
                required: true
            },
            'topic[]': {
                required:true
            },
            'doc[]': {
                required:true
            }
        },
        errorPlacement: function (error, element) {
            if (element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

}).apply(this, [jQuery]);


    (function () {
               "use strict";

               var carousels = function () {
                    $(".owl-carousel1").owlCarousel({
                         loop: true,
                         center: false,
                         margin: 0,
                         responsiveClass: true,
                         nav: false,
                         smartSpeed:800,
                         autoplay:true,
                         autoplayTimeout:3800,
                         autoplayHoverPause:true,
                         responsive: {
                              0: {
                                   items: 1,
                                   nav: false
                              },
                              680: {
                                   items: 1,
                                   nav: false                                   
                              },
                              1000: {
                                   items: 1,
                                   nav: true
                              },
                              1200: {
                                   items: 2,
                                   nav: true
                              }
                         }
                    });
               };

               (function ($) {
                    carousels();
               })(jQuery);
          })();

var asideTop = $('aside').offset().top - parseFloat($('aside').css('marginTop').replace(/auto/, 0));
$(window).scroll(function () {
    var asideY = $(this).scrollTop();
    if (asideY >= asideTop) {
        $('aside').css({
            position: 'fixed',
            top: '65px'
        })
    } else {
        $('aside').removeAttr('style')
    }
});
