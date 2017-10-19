<?php include(dirname(__FILE__) . '/views/layout/header.php'); ?>

<section class="full-product">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/" class="active">Главная</a>
            <span>/</span>
            <a href="#" class="active">iPhone</a>
            <span>/</span>
            <span class="active">iPhone 7 plus</span>

        </div>
        <div class="row">
            <div class="col-xs-12  hidden-md hidden-lg  ">
                <h1 class="full-product__title m-title">iPhone 7 2GB RAM 64 GB ROM</h1>
            </div>
        </div>
        <div class="row">


            <div class="col-md-5 col-sm-5">
                <div class="full-product__image">
                    <img src="img/product/product-1.jpg" alt="product">
                </div>
                <div class="full-product__prevs owl-carousel">
                    <div class="full-product__prev-item flex flex--a-center">
                        <img src="img/product/product-1.jpg" alt="">
                    </div>
                    <div class="full-product__prev-item flex flex--a-center">
                        <img src="img/product/product-2.jpg" alt="">
                    </div>
                    <div class="full-product__prev-item flex flex--a-center">
                        <img src="img/product/product-3.jpg" alt="">
                    </div>
                    <div class="full-product__prev-item flex flex--a-center">
                        <img src="img/product/product-4.jpg" alt="">
                    </div>
                    <div class="full-product__prev-item flex flex--a-center">
                        <img src="img/product/product-5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-7  col-sm-7">
                <form action="">
                    <h1 class="full-product__title hidden-sm hidden-xs ">iPhone 7 2GB RAM 64 GB ROM</h1>
                    <div class="flex flex--a-center full-product__stars-comment">
                        <div class="full-product__stars flex">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="full-product__comment-count">
                            <span>отзывы (2)</span>
                        </div>
                        <div class="full-product__price flex flex--j-center flex--a-bottom hidden-md hidden-lg  hidden-xs">
                            <span>15 690 </span> <span class="full-product__priceCurrency">грн</span>
                        </div>
                    </div>
                    <div class="full-product__wrapperColorVersionPrice flex flex--a-top flex--j-between">
                        <div class="full-product__ColorVersion">
                            <div>
                                <h4 class="full-product__ColorVersion-name">Цвет</h4>
                                <div class="full-product__Color flex">
                                    <input type="hidden" id="product-color">
                                    <div class="full-product__ColorSelect active full-product__ColorSelect--black" data-color = 'black'></div>
                                    <div class="full-product__ColorSelect full-product__ColorSelect--pink" data-color = 'pink'></div>
                                    <div class="full-product__ColorSelect full-product__ColorSelect--white" data-color = 'white'></div>
                                </div>
                            </div>
                            <div>
                                <h4 class="full-product__ColorVersion-name">Версия</h4>
                                <div class="full-product__Version flex">
                                    <input type="hidden" id="product-version">
                                    <div class="full-product__VersionSelect active" data-version="2 / 64">2 / 64</div>
                                    <div class="full-product__VersionSelect" data-version="3 / 128">3 / 128</div>
                                    <div class="full-product__VersionSelect" data-version="3 / 256">3 / 256</div>
                                </div>
                            </div>

                        </div>

                        <div class="full-product__PriceBtn">
                            <div class="full-product__price flex flex--j-center flex--a-bottom hidden-sm hidden-md hidden-lg">
                                <span>15 690 </span> <span class="full-product__priceCurrency">грн</span>
                            </div>

                            <div class="full-product__btnMoreLessVal flex flex--j-center">
                                <button type="button" class="btn full-product__customMoreLessVal full-product__btnMoreLess full-product__btnMoreLess--less">-</button>
                                <input type="text" class="full-product__customMoreLessVal" readonly id="full-product-value" value="1">
                                <button type="button" class="btn full-product__customMoreLessVal full-product__btnMoreLess full-product__btnMoreLess--more">+</button>
                            </div>

                            <div class="full-product__price flex flex--j-center flex--a-bottom hidden-xs hidden-sm">
                                <span>15 690 </span> <span class="full-product__priceCurrency">грн</span>
                            </div>

                            <div>
                                <button type="button" class="btn btn__buy btn__buy--fullProduct">Купить</button>

                                <a href="#" class="btn btn__buyOneClick">Купить в один клик</a>
                            </div>


                        </div>

                    </div>
                </form>
                <div class="full-product__content">
                    <div class="full-product__shortDescription">
                        <div class="full-product__shortDescription-title">
                            Краткое описание
                        </div>
                        <div class="full-product__shortDescription-text">
                            iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.
                        </div>
                        <div class="flex flex--a-top flex--j-center full-product__icons">
                            <div class="full-product__icon">
                                <img src="img/icons/delivery.svg" alt="delivery">
                                <p class="full-product__icon-text">Быстрая доставка</p>
                            </div>
                            <div class="full-product__icon">
                                <img src="img/icons/bestPrice.svg" alt="bestPrice">
                                <p class="full-product__icon-text">Лучшая цена</p>
                            </div>
                            <div class="full-product__icon">
                                <img src="img/icons/original.svg" alt="original">
                                <p class="full-product__icon-text">Только оригинальные
                                    товары</p>
                            </div>
                        </div>
                    </div>
                    <div class="full-product__comments">
                        <h3 class="full-product__comments-title">Отзывы покупателей (<span>7</span>)</h3>

                        <div class="full-product__comment">
                            <div class="full-product__comment-header flex flex--j-between flex--a-bottom">
                                <h5 class="full-product__comment-userName">Евгений</h5>
                                <p class="full-product__comment-date">12.09.2017</p>
                            </div>
                            <div class="full-product__stars flex">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="full-product__comment-text">
                                <p>iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.</p>
                            </div>
                        </div>

                        <div class="full-product__comment">
                            <div class="full-product__comment-header flex flex--j-between flex--a-bottom">
                                <h5 class="full-product__comment-userName">Евгений</h5>
                                <p class="full-product__comment-date">12.09.2017</p>
                            </div>
                            <div class="full-product__stars flex">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star fa-star--gray" aria-hidden="true"></i>
                            </div>
                            <div class="full-product__comment-text">
                                <p>iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.</p>
                            </div>
                        </div>


                        <div class="full-product__commentsBtns flex flex--j-between">
                            <a href="#" class="see-all-comments">Смотреть все отзывы</a>
                            <a href="#" class="give-feedback">Оставить отзыв</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php include(dirname(__FILE__) . '/views/components/similar-products.php'); ?>

<?php include(dirname(__FILE__) . '/views/layout/footer.php'); ?>
