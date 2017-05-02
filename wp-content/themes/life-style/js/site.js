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

    var owlIndustriesInner = $('.slider');
    owlIndustriesInner.owlCarousel({
        //items : 3,
        //autoPlay : 5000,
        //stopOnHover: true,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        nav:true,
        navText: [
            "<i class='fa fa-angle-left' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ],
        pagination:false,
        transitionStyle: "slide",
        //itemsDesktop : [1065,2],
        //itemsDesktopSmall : [980,2],
        //itemsTablet : [736, 1]
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            720:{
                items:2,
                nav:false
            },
            1065:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });
});