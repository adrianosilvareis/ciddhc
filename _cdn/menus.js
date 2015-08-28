$(function () {

    //page = primeira palavra depois do nome do site
    url = window.location.href.toString().split(window.location.host)[1];
    pagina = url.split('/ciddhc/')[1];
    page = pagina.split('/')[1];
    
    menu = $('.menu_js li');
    menu.removeClass('active');


    switch (page) {
        case 'membros':
            $('#membros').addClass('active');
            break;
        case 'contato':
            $('#contato').addClass('active');
            break;
        case 'institucional':
            $('#institucional').addClass('active');
            break;
        default:
            $('#home').addClass('active');
            break;
    }

});