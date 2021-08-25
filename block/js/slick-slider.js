$('.center').slick({
    centerMode: true,
    infinite: true,
    centerPadding: '60px',
    slidesToShow: 3,
    speed: 500,
    variableWidth: false,
});
$('.center').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    console.log('beforeChange', currentSlide, nextSlide);
});
$('.center').on('afterChange', function (event, slick, currentSlide) {
    console.log('afterChange', currentSlide);
});