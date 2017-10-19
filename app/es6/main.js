console.log('ready');
$('.full-product__prevs').owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    responsive :{
        0 : {
            items: 3,
        },
        768 : {
            items: 2,
        },
        830 :{
            items: 3,
        },
        1100 :{
            items: 4,
        }
    }
});

$('.full-product__prev-item').click(function () {
    let image = $(this).find('img').attr('src');
    $('.full-product__image').find('img').attr('src',image)
});

let value = $('#full-product-value');

let i = 1;

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
    let html = $('.full-product__content').html();
    $('.full-product__content').remove();
    $('.similar-products').before(`
    
    <section class="full-product">
        <div class="container">
           ${html}
        </div>
    </section>    
    
    
    `)
}


function mobileStars() {
    let html = $('.full-product__stars-comment').html();
    $('.full-product__stars-comment').remove()
    $('.m-title').after(`
       ${html}
    `);
}

if ($(window).width()<992){
    mobileContent();

}

if ($(window).width()<768){
    mobileStars();

}


$('.btn__top-mobile--filter').click(function () {
    $('.filter-new').slideToggle()
});

$('.input__check').click(function () {
    let input = $(this).parents('.input-row').find('input');
    let isChek = false;
   $(this).toggleClass('active');
    input.prop("checked", !input.prop("checked"));

});
function VersionSelect(){
    let input = $('#product-version');
    let val =  $('.full-product__VersionSelect.active').data('version');
    console.log(val);
    input.val(val);
    $('.full-product__VersionSelect').click(function () {
        val =  $(this).data('version');
        console.log(val);
        input.val(val);
        $('.full-product__VersionSelect').removeClass('active');
        $(this).addClass('active');
    });
}

function ColorSelect(){
    let input = $('#product-color');
    let val =  $('.full-product__ColorSelect.active').data('color');
    console.log(val);
    input.val(val);
    $('.full-product__ColorSelect').click(function () {
        val =  $(this).data('color');
        input.val(val);
        $('.full-product__VersionSelect').removeClass('active');
        $(this).addClass('active');
    });
}
VersionSelect();
ColorSelect();

$('.full-product__comment-count').click(function () {
   $.scrollTo('.full-product__comments', 500)
});