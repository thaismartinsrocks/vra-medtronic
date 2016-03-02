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
    });

    $('.submenu ul li a').click(function() {

        var parent = $(this).closest('ul');

        if(!parent.hasClass('active'))
        {
            parent.find('li:not(.active)').slideDown();
            parent.addClass('active');
        }

    });

    $('.questions .question h4').click(function() {

        var parent = $(this).parent();
        var active = $('.questions .question.active');

        active.find('.answer .response, .answer p').fadeOut(100);
        active.find('.answer').slideUp();

        if(!parent.hasClass('active'))
        {
            active.removeClass('active');
            parent.find('.answer .response, .answer p').fadeIn(200);
            parent.find('.answer').slideDown();
            parent.addClass('active');
        }
        else
        {
            parent.find('.answer .response, .answer p').fadeOut(100);
            parent.find('.answer').slideUp();
            parent.removeClass('active');
        }

    });
});