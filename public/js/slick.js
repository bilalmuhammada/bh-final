document.documentElement.classList.add('js');

/// ----------------------------

const $rootSingle = $('.cSlider--single');
const $rootNav = $('.cSlider--nav');

$rootSingle.slick({
    slide: '.cSlider__item',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});

$rootNav.on('init', function (event, slick) {
    $(this).find('.slick-slide.slick-current').addClass('is-active');
}).slick({
    slide: '.cSlider__item',
    slidesToShow: 7,
    slidesToScroll: 7,
    dots: false,
    focusOnSelect: false,
    infinite: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
        }
    }, {
        breakpoint: 640,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
        }
    }, {
        breakpoint: 420,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
    }]
});

$rootSingle.on('afterChange', function (event, slick, currentSlide) {
    $rootNav.slick('slickGoTo', currentSlide);
    $rootNav.find('.slick-slide.is-active').removeClass('is-active');
    $rootNav.find('.slick-slide[data-slick-index="' + currentSlide + '"]').addClass('is-active');
});

$rootNav.on('click', '.slick-slide', function (event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');

    $rootSingle.slick('slickGoTo', goToSingleSlide);
});
