$(window).on('load', function() {
    if ($('.preloader').length) {
        $('.preloader').fadeOut('slow');
    }
});

$('.scrollLink').click(function() {
    var href = $(this).attr('href');
    var offSetTop = $(href).offset().top - 86;
    
    $(".Header").removeClass("MenuAtivo");

    $('html,body').animate({ 'scrollTop': offSetTop }, 1200, 'easeInOutExpo');
    return false;
    
});

$(window).scroll(function () {
var scroll = $(window).scrollTop();

if (scroll >= 2) {
    $(".Header").addClass("BodyMove");
} else {
    $(".Header").removeClass("BodyMove");
}
});

$('.Container_Menu_Icone').click(function () {            
    $(".Header").toggleClass("MenuAtivo");
});


$('.NossosEmpreendimentos_Container_Cards').slick({
    initialSlide: 0,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    infinite: true,
    cssEase: 'linear',
    prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
    dots: true,
    responsive: [{
            breakpoint: 30000,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 1300,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 960,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});