
$(document).ready(function () {
    
    // Our members carousel
    jQuery('#partners').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Blog carousel
    $('.owl-carousel.blog').owlCarousel({
        items: 4,
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
});