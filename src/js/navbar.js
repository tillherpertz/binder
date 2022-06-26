function toggleNav() {
    if ($('#navbarLeft').hasClass('show')){
        $('#navbarLeft').removeClass('show');
        $('body').removeClass('menu--active');
        $('.content-wrapper').removeClass('menu--active');
    } else {
        $('#navbarLeft').addClass("show");
        $('body').addClass('menu--active');
        $('.content-wrapper').addClass('menu--active');

    }
}

function toggleActive(){
    if ($('li').hasClass('is--active')){
        $('li').removeClass('is--active');      
    }
    $(this).toggleClass('is--active');
}

$('.icon--toggle-menu').click(toggleNav);
$('li').click(toggleActive);