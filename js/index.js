$(document).ready(function () {
    const windowHeight = $(window).height();
    const bodyHeight = $('body').height();

    console.log('Window : ' + windowHeight);
    console.log('Body : ' + parseInt(bodyHeight));

    if (bodyHeight < windowHeight) {
        $('body').height(windowHeight + 'px');
    }
});