'use strict';

console.log('ready');
$('.full-product__prevs').owlCarousel({
    items: 4,
    margin: 10,
    loop: true,
    autoplay: true
});

$('.full-product__prev-item').click(function () {
    var image = $(this).find('img').attr('src');
    $('.full-product__image').find('img').attr('src', image);
});