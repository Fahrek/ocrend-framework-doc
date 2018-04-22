$(window).scroll(function(){
    if($(this).scrollTop() > 150) {
        //$('aside').attr('style','margin-top:71px');
        $('aside').addClass('fixed');
        $('header').addClass('sticky');
    } else {
        //$('aside').attr('style','margin-top:0px');
        $('aside').removeClass('fixed');
        $('header').removeClass('sticky');
    }      
});
$('.menu-plegable').click(function() {
    $(this).toggleClass('plegado');
});
$('.menu-hamburguesa').click(function() {
    $(this).toggleClass('abierto');
    $('aside').toggleClass('oculto-mobile');
});