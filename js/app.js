$(window).on('load', function () {
    if ($('.preloader').length) {
        $('.preloader').fadeOut('slow');
    }
});

$('.scrollLink').click(function () {
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
    slidesToScroll: 5,
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
            slidesToScroll: 5,
            slidesToShow: 5,
        }
    },
    {
        breakpoint: 1300,
        settings: {
            slidesToScroll: 4,
            slidesToShow: 4,
        }
    },
    {
        breakpoint: 1024,
        settings: {
            slidesToScroll: 3,
            slidesToShow: 3,
        }
    },
    {
        breakpoint: 960,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 640,
        settings: {
            slidesToScroll: 1,
            slidesToShow: 1,
        }
    }
    ]
});



if (window.matchMedia("(max-width: 640px)").matches) {
    $('.QuemSomos_Container_Cards').slick({
        initialSlide: 0,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        infinite: true,
        cssEase: 'linear',
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
        dots: false
    });
} else { }

$('.CasesSucesso_Container_CasesBox').slick({
    initialSlide: 0,
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: false,
    arrows: true,
    infinite: true,
    cssEase: 'linear',
    prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
    dots: false,
    responsive: [{
        breakpoint: 30000,
        settings: {
            slidesToScroll: 1,
            slidesToShow: 3,
        }
    },
    {
        breakpoint: 1300,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 1024,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 960,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 640,
        settings: {
            slidesToScroll: 1,
            slidesToShow: 1,
        }
    }
    ]
});

/* FAQ */
$('.Container_Lista_Item').click(function () {
    var FAQPergunta = $(this);
    FAQPergunta.toggleClass("__is-active");
});