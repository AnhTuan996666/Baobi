var SLIDESHOW = (function () {
    var slideBanner = function () {
            var swiper = new Swiper(".slideBaner", {
                navigation: {
                  nextEl: ".banner-next",
                  prevEl: ".banner-prev",
                },
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
              });
        
    };

    var slideProductDetail = function () {
        var swiper = new Swiper(".slideProduct", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
          });
          var swiper2 = new Swiper(".slideProduct2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            thumbs: {
              swiper: swiper,
            },
          });
    }

    var slideAre = function (className,btnNext,btnPrev) {

        var swiper = new Swiper(className, {
            slidesPerView: 3,
            grid: {
              rows: 1,
            },
            spaceBetween: 0,
            navigation: {
                nextEl: btnNext,
                prevEl: btnPrev,
              },
              breakpoints: {
                640: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                768: {
                  slidesPerView: 4,
                  spaceBetween: 20,
                },
                1024: {
                  slidesPerView: 6,
                  spaceBetween: 0,
                },
              },
          });

    }
    
    var silideInspiration = function () {
        slideAre(".companySlide", ".company-next", ".company-prev");
    }
    var slideCompany = function () {
        slideAre(".inspirationSlide", ".inspiration-next", ".inspiration-prev")
    }

    return {
        _: function () {
            slideBanner();
            slideCompany();
            silideInspiration();
            slideProductDetail();
        },
    };
})();
var WEBS = (function () {
    var scrollHeader = function () {
        if ($(".header").length > 0) {
            $(window).scroll(function () {
                var header = $(".header").height();
                var height = $(this).scrollTop();

                if (height > header) {
                    $(".header-top").hide();
                    $(".header").addClass("fixed");
                } else {
                    $(".header-top").show();
                    $(".header").removeClass("fixed");
                }
            });
        }
    };

    var backTop = function () {
        var backTop = $(".back-to-top");
        $(window).scroll(function (event) {
            if ($(this).scrollTop() > 1200) {
                backTop.show(200);
            } else {
                backTop.hide(200);
            }
        });
        backTop.click(function (event) {
            $("html,body").animate({ scrollTop: 0 }, 300);
        });
    };

    var showFooter = function () {
        var showFooter = $(".title-footer");
        if ($(document).width() <= 991) {
            showFooter.click(function (event) {
                $(".item-menu").slideToggle(300);
            });
        }
    };

    var initAnimation = function () {
        var wow = new WOW();
        wow.init();
    };
    return {
        _: function () {
            scrollHeader();
            backTop();
            initAnimation();
            showFooter();
        },
    };
})();

var OPTIONS = (function () {

    var checkPassword = function () {
        $('.fancybox').fancybox({
            padding : 0, // default 15
            margin: 0,   // default 20
            width: 560,  // default 800
            height: 340, // default 600
            opacity: true, // default false
        });
        }
    return {
        _: function () {
            checkPassword();
        },
    };
})();

var MENU = (function () {
   
        var headerBody = $("#header-body");
        var addbgMenu = function () {
        if ($(document).width() <= 991) {
            headerBody
                .find(".container")
                .append(
                    '<div class="bg__menu"><i class="fa fa-times close_menu"></i></div>'
                );
        };
    };

    var menu = function() {
        if ($(document).width() <= 991) {
            $('.menu').find("ul>li>ul").hide();
            $('.menu').find("ul li").each(function() {
                if ($(this).find("ul>li").length > 0) {
                    $(this).prepend('<i class=" fa fa-angle-right smooth"></i>');
                    $(this).addClass('active');
                }
            });
        }
        $('.menu').find('li i').click(function(event) {

            var ul = $(this).nextAll("ul");

            if (ul.is(":hidden") === true) {

                ul.slideDown(200);
            } else {
                ul.slideUp(200);
            }

            if ($(this).hasClass('fa-angle-right')) {
                $(this).addClass('fa-angle-down rote');
                $(this).removeClass('fa-angle-right');
                return;
            } else {
                $(this).addClass('fa-angle-right');
                $(this).removeClass('fa-angle-down rote');
                return;
            }
        });

    }

    var openMenuMobile = function() {
        if ($('.menu').length > 0) {
            $('.show_menu').click(function() {
                $('.header-body').addClass('active');
                $('body').addClass('overflow-hidden');
                $('.box-menu').toggleClass('nav_active');
                $('.menu_container').toggleClass('active');
                $('.box-menu').toggleClass('col_active');
                $('.bg__menu').toggleClass('active');
                $('.bg__menu').addClass('smooth');
                $('.box-menu').addClass('smooth');
                $('.header-body').addClass('smooth');

            });
        }
    }
    var closeMenuMobile = function() {
        if ($('.box-menu').length > 0) {
            $('.bg__menu').click(function() {
                $('body').removeClass('overflow-hidden');
                $('.box-menu').removeClass('nav_active');
                $('.menu_container').removeClass('active');
                $('.box-menu').removeClass('col_active');
                $('.bg__menu').removeClass('active');
                $('.header-body').removeClass('active');
            });
        }
    }


    return {
        _: function () {
            addbgMenu();
            menu();
            openMenuMobile();
            closeMenuMobile();
        },
    };
})();
$(document).ready(function () {
    MENU._();
    SLIDESHOW._();
    OPTIONS._();
    WEBS._();
});
