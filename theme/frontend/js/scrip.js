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
            slidesPerView: 1.5,
            grid: {
                rows: 1,
            },
            spaceBetween: 20,
            navigation: {
                nextEl: btnNext,
                prevEl: btnPrev,
                },
                breakpoints: {
                414: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3.5,
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
        slideAre(".inspirationSlide", ".inspiration-next", ".inspiration-prev");
    }

    var productSimilarSlide = function () {
        var swiper = new Swiper(".productSimilarSlide", {
            slidesPerView: 1.5,
            grid: {
                rows: 1,
            },
            spaceBetween: 20,
            navigation: {
                nextEl: ".product-similar-next",
                prevEl: ".product-similar-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    }

    return {
        _: function () {
            slideBanner();
            slideCompany();
            silideInspiration();
            slideProductDetail();
            productSimilarSlide();
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
                    $(".header").addClass("fixed smooth");
                } else {
                    $(".header-top").show();
                    $(".header").removeClass("fixed smooth");
                }
            });
        }
    };

    var backTop = function () {
        var backTop = $(".back-to-top");
        $(window).scroll(function (event) {
            if ($(this).scrollTop() > 1000) {
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
            showFooter.click(function (e) {
                e.preventDefault();
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
            loadMore();
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
                    '<div class="bg__menu"><i class="fa fa-times close_menu"/></div>'
                );
        };
    };
    
    var showCard = function() {
        $(".show-card").find(".box").hide();
        if ($(document).width() <= 991) {
            $(".page-product").find(".js-product").append(
                '<div class="bg_menu"><i class="fa fa-times close_menu"/></div>'
            );
            $(".show-card").each(function() {
                $(".btn-card").click(function() {
                    $(this).parent().find(".box").slideToggle();
                })
            })
        }
    }

    var productFilter = function () {
        if ($(document).width() <= 991) {
            $(".page-product").addClass("position-relative");
                $(".btn-filter").click(function() {
                    $(".product-left").toggleClass("active");
                    $(".product-left").toggleClass("smooth");
                    $('.bg_menu').toggleClass('active');
                    $('.bg_menu').addClass('smooth');
                    $('body').addClass('overflow-hidden');
                })
        }
    }
    var closeproductFilter = function() {
        if ($('.product-left').length > 0) {
            $('.bg_menu').click(function() {
                $('body').removeClass('overflow-hidden');
                $('.product-left').removeClass('active');
                $('.bg_menu').removeClass('active');
            });
        }
    }
    var menu = function() {
        if ($(document).width() <= 991) {
            $('.menu').find("ul>li>ul").hide();
            $('.menu').find("ul li").each(function() {
                if ($(this).find("ul>li").length > 0) {
                    $(this).prepend('<i class=" fa fa-angle-right smooth"></i>');
                }
            });
        }
        $('.menu').find('li i').click(function(event) {
            // Reset ul , i
            $('.menu ul li ul').slideUp(200);

            if ($(this).hasClass('children')) {
                $(this).nextAll('ul').slideUp(200)
                $(this).removeClass('children');
            } else {
                $('.menu ul li i').removeClass('children');
                $(this).addClass('children');
                $(this).nextAll('ul').slideDown(200)
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

    var menuProduct = function() {
            $('.product-left-list').find("ul>li>ul").hide();
            $('.product-left-list').find("ul li").each(function() {
                if ($(this).find("ul>li").length > 0) {
                    $(this).prepend('<i class=" fa fa-angle-right smooth"></i>');
                    $(this).addClass('active');
                }
            });
        $('.product-left-list').find('li i').click(function(event) {

            $('.product-left-list li ul').slideUp(200);

            if ($(this).hasClass('children')) {
                $(this).nextAll('ul').slideUp(200)
                $(this).removeClass('children');
            } else {
                $('.product-left-list ul li i').removeClass('children');
                $(this).addClass('children');
                $(this).nextAll('ul').slideDown(200)
            }
        });

    }

    return {
        _: function () {
            addbgMenu();
            menu();
            openMenuMobile();
            closeMenuMobile();
            showCard();
            menuProduct();
            productFilter();
            closeproductFilter();
        },
    };
})();
$(document).ready(function () {
    MENU._();
    SLIDESHOW._();
    WEBS._();
    $('.fancybox').fancybox({
        padding : 0, // default 15
        margin: 0,   // default 20
        width: 560,  // default 800
        height: 340, // default 600
        opacity: true, // default false
    });
});
