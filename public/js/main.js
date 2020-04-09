jQuery(document).ready(function ($) {
    // ready
    function poweringScroll() {

        $(function () {
            $.scrollify({
                section: ".section",
                interstitialSection: ".normal-scroll-item",
                scrollSpeed: 1,
                easing: "easeOutQuad",
                setHeights: true,
                overflowScroll: true,
                updateHash: true,
                touchScroll: true,
                offset: 0
            });
        });

        $(function () {
            $.scrollify({
                section: ".section",
                standardScrollElements: ".normal-scroll-item",
                scrollSpeed: 1100,
                easing: "easeOutQuad"
            });
        });
    };

    // poweringScroll();

    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    $('footer').footerReveal({
        shadow: true,
        shadowOpacity: 0.3,
        zIndex: -101
    });

    var pathname = 'http:/' + window.location.pathname;
    var url = location.href.replace(/#.*/, '');

    if (window.location.pathname == '/') {
        $('nav .nav-item').find('a[href]').each(function (i, a) {
            var $a = $(a);
            var href = $a.attr('href');
            if (href.indexOf('#') == 1) {
                var newlink = href.replace('/#', '#');
                $a.attr('href', newlink);
            }
            $('[data-spy="scroll"]').each(function () {
                var $spy = $(this).scrollspy('refresh')
            })
        });
    }

    // testimoni
          $('[data-toggle="tooltip"]').tooltip();
          var feedbackSlider = jQuery('.feedback-slider');
          feedbackSlider.owlCarousel({
              items: 1,
              nav: true,
              dots: true,
              autoplay: true,
              loop: true,
              mouseDrag: true,
              touchDrag: true,
              navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
              responsive: {

                  // breakpoint from 767 up
                  767: {
                      nav: true,
                      dots: false
                  }
              }
          });

          feedbackSlider.on("translate.owl.carousel", function () {
              $(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
              $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
          });

          feedbackSlider.on("translated.owl.carousel", function () {
              $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
              $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
          });
          feedbackSlider.on('changed.owl.carousel', function (property) {
              var current = property.item.index;
              var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
              var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
              var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
              var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
              $('.thumb-prev').find('img').attr('src', prevThumb);
              $('.thumb-next').find('img').attr('src', nextThumb);
              $('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
              $('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
          });
          $('.thumb-next').on('click', function () {
              feedbackSlider.trigger('next.owl.carousel', [300]);
              return false;
          });
          $('.thumb-prev').on('click', function () {
              feedbackSlider.trigger('prev.owl.carousel', [300]);
              return false;
          });
    // end testimoni
    $('#flex-box').on('scrollSpy:exit', function () {
        $('#header.header-pages').addClass('header-scrolled');
    });
    $('#flex-box').on('scrollSpy:enter', function () {
        $('#header.header-pages').removeClass('header-scrolled');
    });
    $('#flex-box').scrollSpy();

    function play_video() {
        $('#video_container').slideDown("slow");
        $('html, body').animate({
            scrollTop: $("#video_container").offset().top - 70
        }, 1000)

        $('.yt_vid')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    }
    $("#span_close").click(function () {
        $('#video_container').slideUp("slow");
        $('.yt_vid')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    })
    wow.init();
});