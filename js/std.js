$(document).ready(function () {
    const windowHeight = $(window).height();
    const bodyHeight = $('body').height();

    if (bodyHeight < windowHeight) {
        $('body').height(windowHeight + 'px');
    }

    //////////////  NAVIGATION      /////////////////////
    const navigation = $('div#navigation');
    
    $('div#photo').click(function (e) {

        if (!$(this).hasClass("active")) {
            $(this).addClass("active");

            navigation.height(windowHeight + 'px');
            $('div#box').animate({bottom: '0px'}, 400);
        } else {
            $(this).removeClass("active");
            navigation.height('0px');
            $('div#box').animate({bottom: '-302px'}, 400);
        }
        
    });
});