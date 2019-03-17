jQuery(function () {
    $('.comments-scontent__slider').slick({
        slidesToShow: 2,
        dots: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    arrows: false,
                }
            },
        ]
    });
});

