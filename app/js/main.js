'use strict';

console.log('ready');
$('.full-product__prevs').owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    responsive: {
        0: {
            items: 3
        },
        768: {
            items: 2
        },
        830: {
            items: 3
        },
        1100: {
            items: 4
        }
    }
});

$('.full-product__prev-item').click(function () {
    var image = $(this).find('img').attr('src');
    $('.full-product__image').find('img').attr('src', image);
});

var value = $('#full-product-value');

var i = 1;

$('.full-product__btnMoreLess--more').click(function () {
    i++;
    value.val(i);
});

$('.full-product__btnMoreLess--less').click(function () {
    i >= 2 ? i-- : false;
    value.val(i);
});

$('.filter__title').click(function () {
    $(this).toggleClass('active');
    $(this).parent('.parent-filter').find('.filter__btns').slideToggle();
});

function mobileContent() {
    var html = $('.full-product__content').html();
    $('.full-product__content').remove();
    $('.similar-products').before('\n    \n    <section class="full-product">\n        <div class="container">\n           ' + html + '\n        </div>\n    </section>    \n    \n    \n    ');
}

function mobileStars() {
    var html = $('.full-product__stars-comment').html();
    $('.full-product__stars-comment').remove();
    $('.m-title').after('\n       ' + html + '\n    ');
}

if ($(window).width() < 992) {
    mobileContent();
}

if ($(window).width() < 768) {
    mobileStars();
}

$('.btn__top-mobile--filter').click(function () {
    $('.filter-new').slideToggle();
});

$('.input__check').click(function () {
    var input = $(this).parents('.input-row').find('input');
    var isChek = false;
    $(this).toggleClass('active');
    input.prop("checked", !input.prop("checked"));
});
function VersionSelect() {
    var input = $('#product-version');
    var val = $('.full-product__VersionSelect.active').data('version');
    console.log(val);
    input.val(val);
    $('.full-product__VersionSelect').click(function () {
        val = $(this).data('version');
        console.log(val);
        input.val(val);
        $('.full-product__VersionSelect').removeClass('active');
        $(this).addClass('active');
    });
}

function ColorSelect() {
    var input = $('#product-color');
    var val = $('.full-product__ColorSelect.active').data('color');
    console.log(val);
    input.val(val);
    $('.full-product__ColorSelect').click(function () {
        val = $(this).data('color');
        input.val(val);
        $('.full-product__VersionSelect').removeClass('active');
        $(this).addClass('active');
    });
}
VersionSelect();
ColorSelect();

$('.full-product__comment-count').click(function () {
    $.scrollTo('.full-product__comments', 500);
});