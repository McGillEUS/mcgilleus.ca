(function ($) {



     // SEARCH ANIMATION
//        e.preventDefault();

  //      $(this).find('#m_search').fadeIn().focus();
  //  });

  //  $('#m_search').focusout(function (e) {
  //      $(e.target).fadeOut();
 //   });
 
 //SEARCH BOX

    $('#toggle-search').click(function (event) {
        event.stopPropagation();
        event.preventDefault();
        if ($(this).hasClass('search-open')) {
            $('.search-panel').slideDown(300);
            //$('#header-search-box').focus();
            $(this).removeClass('search-open').addClass('search-close');
        } else if ($(this).hasClass('search-close')) {
            $('.search-panel').slideUp(300);
            $(this).removeClass('search-close').addClass('search-open');
        }

    });

    $('body').click(function (evt) {

        if (evt.target.id == 'edit-search-block-form--2')
            return;

        $('.search-panel').slideUp(300);
        $('#toggle-search').removeClass('search-close').addClass('search-open');

    });
 

    $(window).resize(function () {
        if (!is_touch_device()) {
            // SOLID HEADER  - TRANSPARENT HEADER
            (function () {
                var window_y = $(document).scrollTop();
                if (window_y > 0) {
                    set_static_header(1);
                }
            })();

            function set_static_header(position) {
                var header_height = $("#header-wrapper.header-transparent").height();
                if (position > header_height) {
                    $("#header-wrapper.header-transparent").addClass("solid-color");
                } else {
                    $("#header-wrapper.header-transparent").removeClass("solid-color");
                }

            }

            $(window).scroll(function () {
                var position = $(this).scrollTop();
                set_static_header(position);
            });

            var headerWwrapperHeight = $('#header-wrapper').height();
            $('#header-wrapper').next().css('margin-top', headerWwrapperHeight);
        }
    });

    // CONTENT TABS
    (function () {
        $('.tabs').each(function () {
            var $tabLis = $(this).find('li');
            var $tabContent = $(this).next('.tab-content-wrap').find('.tab-content');

            $tabContent.hide();
            $tabLis.first().addClass('active').show();
            $tabContent.first().show();
        });

        $('.tabs').on('click', 'li', function (e) {
            var $this = $(this);
            var parentUL = $this.parent();
            var tabContent = parentUL.next('.tab-content-wrap');

            parentUL.children().removeClass('active');
            $this.addClass('active');

            tabContent.find('.tab-content').hide();
            var showById = $($this.find('a').attr('href'));
            tabContent.find(showById).fadeIn();

            e.preventDefault();
        });
    })();

   

    //ACCORDION
    (function () {
        'use strict';
        $('.accordion').on('click', '.title', function (event) {
            event.preventDefault();
            $(this).siblings('.accordion .active').next().slideUp('normal');
            $(this).siblings('.accordion .title').removeClass("active");

            if ($(this).next().is(':hidden') === true) {
                $(this).next().slideDown('normal');
                $(this).addClass("active");
            }
        });
        $('.accordion .content').hide();
        $('.accordion .active').next().slideDown('normal');
    })();


    (function () {
        // INFORMATION BOXES 
        $('.information-boxes .close').on('click', function () {
            $(this).parent().slideUp(300);
        });
    })();


    // SCROLL TO TOP 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    });

    $('.scroll-up').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    // NEWSLETTER FORM AJAX SUBMIT
    $('.newsletter .submit').on('click', function (event) {
        event.preventDefault();
        var email = $(this).siblings('.email').val();
        var form_data = new Array({'Email': email});
        $.ajax({
            type: 'POST',
            url: "contact.php",
            data: ({'action': 'newsletter', 'form_data': form_data})
        }).done(function (data) {
            alert(data);
        });
    });


    // function to check is user is on touch device
    if (!is_touch_device()) {
        // ANIMATION FOR CONTENT
        $.stellar({
            horizontalOffset: 0,
            horizontalScrolling: false
        });

        // ANIMATED CONTENT
        if ($(".animated")[0]) {
            jQuery('.animated').css('opacity', '0');
        }

        var currentRow = -1;
        var counter = 1;

        $('.triggerAnimation').waypoint(function () {
            var $this = $(this);
            var rowIndex = $('.row').index($(this).closest('.row'));
            if (rowIndex !== currentRow) {
                currentRow = rowIndex;
                $('.row').eq(rowIndex).find('.triggerAnimation').each(function (i, val) {
                    var element = $(this);
                    setTimeout(function () {
                        var animation = element.attr('data-animate');
                        element.css('opacity', '1');
                        element.addClass("animated " + animation);
                    }, (i * 250));
                });

            }

            //counter++;

        },
                {
                    offset: '70%',
                    triggerOnce: true
                }
        );

        $('.post-timeline-item').waypoint(function () {
            var timeline_animation = $(this).attr('data-animate');
            $(this).css('opacity', '');
            $(this).addClass("animated " + timeline_animation);
        },
                {
                    offset: '80%',
                    triggerOnce: true
                }
        );

    }
    ;

    // function to check is user is on touch device
    function is_touch_device() {
        return Modernizr.touch;
    }

    $('.call-to-action.contact').on("click", function (e) {
        e.preventDefault();
        $('#map').slideToggle("slow");
    });

    // Placeholder fix for old browsers
    $('input, textarea').placeholder();

    // HERO IMAGE PAGE TITLE 5
    $(window).resize(function () {
        var windowHeight = $(window).height();
        var inner_headerHeight = $('#header').height();
        $('.page-title-5').height(windowHeight - inner_headerHeight);

        // PROCES BOX CIRCLES 
        var processBox_width = $('.process-box-circle').width();
        $('.process-box-circle .icon-container').height(processBox_width - 40).css('width', processBox_width - 40);
        $('.process-box-circle .icon-container i').height(processBox_width - 40).css('width', processBox_width - 40);

    }).resize();
	
	
})(jQuery);

(function($) {	
 jQuery(document).ready(function ($) {
                'use strict';

              

                $('.numbers-counter').waypoint(function () {
                    // NUMBERS COUNTER START
                    $('.numbers').data('countToOptions', {
                        formatter: function (value, options) {
                            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                        }
                    });
                    // start timer
                    $('.timer').each(count);

                    function count(options) {
                        var $this = $(this);
                        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                        $this.countTo(options);
                    } // NUMBERS COUNTER END
                },
                        {
                            offset: '70%',
                            triggerOnce: true
                        }
                );

                $('#owl-testimonial').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 0,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });

                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });

                $('.process-box').matchHeight();
            });
			
				
				
				// FLICKR FEED START
                $('.flickr-feed').socialstream({
                    socialnetwork: 'flickr',
                    limit: 8,
                    username: 'pixel-industry'
                }); // FLICKR FEED END
				// OWL
				
				 $('.owl-carousel1').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    responsive: {
                        0: {
                            items: 1,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            dots: true,
                            nav: false,
                            autoHeight: true
                        },
                        600: {
                            items: 1,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            dots: true,
                            nav: false,
                            autoHeight: true
                        },
                        1000: {
                            items: 1,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            dots: true,
                            nav: false,
                            autoHeight: true                            
                        }
                    }
                });
				
				 

                $('#slider').nivoSlider({
                    controlNav: false
                });

                $('.skills-bar').waypoint(function () {
                    $('.skills li span').addClass('expand');
                },
                        {offset: '70%'}
                );
            

 $('.triggerZoom').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
				
				 $('.dots-carousel').owlCarousel({
                    items: 3,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    responsive: {
                        0: {
                            items: 1,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            dots: true,
                            nav: false
                        },
                        600: {
                            items: 2,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            dots: true,
                            nav: false
                        },
                        1000: {
                            items: 3,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            dots: true,
                            nav: false
                        }
                    }
                });
				
				 if (jQuery('.easy-pie-chart').length) {

                    $('.easy-pie-chart').each(function () {
                        var $this, $parent_width, $chart_size, height;
                        $this = $(this);
                        $parent_width = $(this).parent().width();
                        $chart_size = $this.attr('data-size');
                        if ($parent_width < $chart_size) {
                            $chart_size = $parent_width;
                        }
                        
                        height = parseInt($chart_size) + 30;

                        $this.css('line-height', $chart_size + "px");
                        $this.css('height', height + "px");

                        $this.easyPieChart({
                            animate: 1300,
                            lineCap: 'butt',
                            lineWidth: $this.attr('data-lineWidth'),
                            size: $chart_size,
                            barColor: $this.attr('data-barColor'),
                            trackColor: $this.attr('data-trackColor'),
                            scaleColor: 'transparent',
                            onStep: function (from, to, value) {
                                $(this.el).find('.percent-container .percent').html(Math.ceil(value) + "%");
                                var $info =  $(this.el).find('.info');
                                $info.css("margin-left", -($info.width() / 2));

                            }
                        });

                    });

                }

                
                var canvas_width = $('.easy-pie-chart canvas').width();
                $('.easy-pie-chart canvas').css('margin-left', -canvas_width/2);

                $('.skills-bar').waypoint(function() {
                    $('.skills li span').addClass('expand');
                },
                        {offset: '70%'}
                );
           

})(jQuery);