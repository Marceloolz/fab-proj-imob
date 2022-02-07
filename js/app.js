$(window).on('load', function() {
    if ($('.preloader').length) {
        $('.preloader').fadeOut('slow');
    }
});

$(window).scroll(function () {
var scroll = $(window).scrollTop();

if (scroll >= 10) {
    $(".Header").addClass("BodyMove");
} else {
    $(".Header").removeClass("BodyMove");
}
});

$('.Container_Menu_Icone').click(function () {            
    $(".Header").toggleClass("MenuAtivo");
});
