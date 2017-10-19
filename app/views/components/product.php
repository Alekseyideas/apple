


<?php

$i=0;

while($i<8){
	echo '
					<div class="col-md-4 col-sm-6">
					<div class="product">
	<a href="#" class="product__image"><img src="img/product/product-1.jpg" alt=""></a>
	<div class="product__wrapper">
		<a href="#" class="product__name">iPhone 7</a>
		<div class="product__price">15 690 <span class = "product__price--curency">грн</span></div>
		<div class="flex flex--a-center product__toCartFavorite">
			<button class="btn btn__toCart">В корзину</button>
			<a href="#" class="to_favorite">
				<img src="img/icons/heart-light-grey.svg" alt="" class="to_favorite-img">
				<img src="img/icons/heart-light-blue.svg" alt="" class="to_favorite-img-hover">
			</a>
		</div>
	</div>

</div>

					</div>
					';
	$i++;
}

?>