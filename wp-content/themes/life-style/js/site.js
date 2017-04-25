/**
 * Created by narek on 25.04.2017.
 */


$(function () {
    $('.menu-item-50 a').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
});