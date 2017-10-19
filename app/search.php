<?php include(dirname(__FILE__) . '/views/layout/header.php'); ?>
<div class="container">
	<div class="breadcrumbs">
		<a href="/" class="active">Главная</a>
		<span>/</span>
		<a href="#" class="active">Ipad</a>
		<span>/</span>
		<span class="active">Результаты поиска</span>

	</div>
	<div class="hidden-md hidden-lg">
		<div class="row">
			<div class="col-sm-6">
				<button class="btn btn__top-mobile btn__top-mobile--filter">Фильтр </button>
			</div>

			<div class="col-sm-6">
				<button class="btn btn__top-mobile btn__top-mobile--sort">Сортировка </button>
			</div>

		</div>
	</div>


	<div class="row">


		<div class="col-md-3 ">
			<div class="filter-new">
				<div class="parent-filter">
					<div class="filter__title active"><span>Встроенная память</span></div>
					<div class="filter__btns filter__btns--in-memory">
						<div class="input-row">
							<input type="checkbox" class="hidden" value="128">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">128 ГБ</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="256">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">256 ГБ</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="64">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">64 ГБ</div>
							</div>
						</div>
					</div>
				</div>






				<div class="parent-filter">
					<div class="filter__title active"> <sapn>Оперативная память</sapn></div>
					<div class="filter__btns filter__btns--op-memory">
						<div class="input-row">
							<input type="checkbox" class="hidden" value="4">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">4 ГБ</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="3">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">3 ГБ</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="3">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">2 ГБ</div>
							</div>
						</div>
					</div>
				</div>

				<div class="parent-filter">
					<div class="filter__title active"><span>Цвет</span></div>
					<div class="filter__btns filter__btns--color">
						<div class="input-row">
							<input type="checkbox" class="hidden" value="red">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">красный</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="white">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">белый</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="black">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">черный</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="pink">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">розовый</div>
							</div>
						</div>
						<div class="input-row">
							<input type="checkbox" class="hidden" value="blue">
							<div class="flex flex--a-center input__check">
								<div class="input__square"><i class="fa fa-check" aria-hidden="true"></i></div>
								<div class="input__name">синий</div>
							</div>
						</div>
					</div>
				</div>



				<button class="btn btn--blue btn__filter">Применить</button>
			</div>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="sort-wrapper">
					<div class="col-md-6  col-sm-12 col-md-push-6">
						<div class="product-sort flex flex--a-bottom flex--j-right">
							<div class="product-sort__title">Сортировка</div>
							<select name="" id="input-sort">
								<option value="1" selected>от дорогих к дешевым </option>
								<option value="1">от дешевым к дорогих </option>
								<option value="1">название от А до Я </option>
								<option value="1">от дорогих к дешевым </option>
								<option value="1">от дешевым к дорогих </option>
								<option value="1">название от А до Я </option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-md-pull-6">
						<h4 class="search__title">Результаты поиска</h4>
						<p class="search__text-result">По запросу «iphone 7» найдено 8 вариантов</p>
					</div>


				</div>

			</div>
			<div class="row">
				<?php include (dirname(__FILE__) .'/views/components/product.php');?>

			</div>
		</div>
	</div>
</div>



<?php include(dirname(__FILE__) . '/views/layout/footer.php'); ?>
