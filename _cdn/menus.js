$(function () {

    $(".menu_js li").click(function() {
        $(".menu_js li").removeClass('active');
        $(this).addClass('active');
    });

});