var slider = $('#autoWidth').lightSlider({
    controls: false,
    autoWidth: true,
    loop: true,
    auto: true,
    speed: 1000,
    pauseOnHover: true,
    pause: 4000,
    slideMargin: 10,
    enableTouch: true,
    enableDrag: true,
    galleryMargin: 5,
    keyPress: true,
    rtl: false,
    freeMove: true,
    onSliderLoad: function () {
        $('#autoWidth').removeClass('cS-hidden');
    }
});
$('#next').on('click', function () {
    slider.goToNextSlide();
});
$('#prev').on('click', function () {
    slider.goToPrevSlide();
});

var slider = $('#autoWidth2').lightSlider({
    controls: false,
    autoWidth: true,
    loop: true,
    auto: true,
    speed: 1000,
    pauseOnHover: true,
    pause: 2000,
    slideMargin: 10,
    enableTouch: true,
    enableDrag: true,
    galleryMargin: 5,
    keyPress: true,
    rtl: false,
    freeMove: true,
    onSliderLoad: function () {
        $('#autoWidth2').removeClass('cS-hidden');
    }
});
$('#next').on('click', function () {
    slider.goToNextSlide();
});
$('#prev').on('click', function () {
    slider.goToPrevSlide();
});