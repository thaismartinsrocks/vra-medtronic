$(function(){

    $('.menu-mobile').click(function() {

        var active = $(this).hasClass('active');
        var divMenu = $("#menu-mobile");
        var divWrap = $("#wrap");
        var time = 500;

        if(active)
        {
            divMenu.animate({left: "-=230"}, time);
            divWrap.animate({left: "-=230"}, time);
            $(this).removeClass('active');
        }
        else
        {
            divMenu.animate({left: "+=230"}, time);
            divWrap.animate({left: "+=230"}, time);
            $(this).addClass('active');
        }
    })
});