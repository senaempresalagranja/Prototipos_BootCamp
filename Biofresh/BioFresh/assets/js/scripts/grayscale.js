(function($) {
    "use strict"; // Start of use strict
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });
    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict
$(document).ready(function() {
    // $("#banner").css({
    //     "height": $(window).height() + "px"
    // });
    var flag = false;
    var scroll;
    $(window).scroll(function() {
        scroll = $(window).scrollTop();
        if (scroll > 10) {
            if (!flag) {
                $("nav").css({
                    "background-color": "#fff"
                });
                $("nav").css({
                    "box-shadow": "1px 0 7px 1px rgba(0, 0, 0, 0.35)"
                });
                $(".img-tamaño").css({
                    "width": "10%"
                });
                flag = true;
            }
            // antes de bar el escrol este transparente l menu tenga color blanco el texto  
        } else {
            if (flag) {
                $("nav").css({
                    // "background-color": "red"
                });
                $("nav").css({
                    "box-shadow": "1px 0 7px 1px rgba(0, 0, 0, 0)"
                });
                $(".img-tamaño").css({
                    "width": "20%"
                });
                flag = false;
            }
        }
    });
});





(function (window, $) {
    'use strict';

    // Cache document for fast access.
    var document = window.document;


    function mainSlider() {
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            mode: 'fade',
            nextText: '',
            prevText: ''
        });
    }

    mainSlider();



    var $links = $(".bx-wrapper .bx-controls-direction a, #bx-pager a");
    $links.click(function(){
       $(".slider-caption").removeClass('animated fadeInLeft');
       $(".slider-caption").addClass('animated fadeInLeft');
    });

    $(".bx-controls").addClass('container');
    $(".bx-next").addClass('fa fa-angle-right');
    $(".bx-prev").addClass('fa fa-angle-left');


    $('a.toggle-menu').click(function(){
        $('.responsive .main-menu').toggle();
        return false;
    });

    $('.responsive .main-menu a').click(function(){
        $('.responsive .main-menu').hide();

    });

    $('.main-menu').singlePageNav();
    
//  var dt = window.atob('fCBEZXNpZ246IDxhIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly93d3cudGVtcGxhdGVtby5jb20vdG0tNDAxLXNwcmludCIgdGFyZ2V0PSJfcGFyZW50Ij5TcHJpbnQ8L2E+');       // decode the string
//  var div = document.getElementById('copyright');

//  div.innerHTML += dt;


})(window, jQuery);

var map = '';

function initialize() {
    var mapOptions = {
      zoom: 16,
      center: new google.maps.LatLng(4.402073, -75.149744)
    };
    map = new google.maps.Map(document.getElementById('map'),  mapOptions);
}

// load google map
var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
        'callback=initialize';
    document.body.appendChild(script);