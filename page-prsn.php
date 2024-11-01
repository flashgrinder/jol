<?php /* Template Name: Пресненский район */?>
<?php get_header(); ?>

	<section class="main-screen">
		<div class="main-screen__body container">
			<div class="main-screen__column">
				<div class="main-screen__info js-reveal gs-reveal-left d-flex d-flex-column flex-align-center flex-justify-sb">
					<div class="main-screen__header d-flex flex-justify-sb flex-align-center">
						<a href="/" class="main-screen__logo">
							<img src="<?= STANDART_DIR; ?>/img/logo.png" alt="" class="main-screen__logo">
						</a>
						<div class="main-screen__actions d-flex flex-align-center">
							<a href="tel:+7 915 118 80 80" class="main-screen__phone d-flex flex-align-center flex-justify-center">
								<svg class="main-screen__phone-icon" width="27px" height="29px">
									<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
								</svg>
							</a>
							<div class="main-screen__nav-btn-wrap d-flex flex-align-center flex-justify-center">
								<button class="mobile-nav__btn mobile-nav__btn--main-screen js-mobile-nav-btn-main-screen">
									<div class="mobile-nav__btn-icon js-mobile-nav-icon-main-screen"></div>
								</button>
							</div>
						</div>
					</div>
					<div class="main-screen__info-center">
						<p class="main-screen__subtitle text text--big text--black text--w-light text-center">
							Пресненский район
						</p>
						<h1 class="main-screen__title title title--huge title--black title--w-regular text-center">
							ЖК
							<br>
							премиум-класса
							от 69,5 миллионов
						</h1>
					</div>
					<div class="main-screen__bottom d-flex flex-justify-sb flex-align-center">
						<a href="tel:+7 915 118 80 80" class="main-scree__button button button--phone">
						<span class="button__icon">
							<svg class="button__phone-icon" width="23px" height="25px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
						<a href="tel:+7 915 118 80 80" class="main-screen__button-catalog button button--catalog" data-hystmodal="#feedback">
							<span class="button__text text text--medium text--black text--w-light">
								Запросить полный каталог квартир
							</span>
								<span class="button__pic">
								<span class="button__pic-wrap">
									<img src="<?= STANDART_DIR; ?>/img/button-catalog.jpg" alt="Запросить полный каталог квартир" class="button__img">
								</span>
								<span class="button__arrow">
									<svg class="button__arrow-svg" width="18px" height="18px">
										<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#button-arrow-catalog"></use>
									</svg>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="main-screen__pic js-reveal gs-reveal-right">
					<img src="<?= STANDART_DIR; ?>/img/main-screen.jpg" alt="" class="main-screen__img">
				</div>
				<a href="#apartments" class="main-screen__mobile-action">
				<span>
					Смотреть
					<br>
					квартиры
				</span>
					<span class="main-screen__mobile-action-icon">
					<svg class="main-screen__arrow-icon" width="13" height="15px">
						<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-down"></use>
					</svg>
				</span>
				</a>
			</div>
		</div>
	</section>

	<section class="about js-reveal gs-reveal-left" id="about">
		<div class="about__body container">
			<h3 class="about__title title--black title--w-regular">
				ЖК в пресне — освободите время <br>на то, <span class="about__title-accent title title--accent">что
			действительно
			дорого</span>
			</h3>
			<div class="about__text text text--big text--black text--w-light">
				Квартал разработан так, чтобы вы как можно меньше занимались рутиной, и больше — семьей и отдыхом в безопасности и комфорте. В этом вам поможет клабхаус — многофункциональное пространство только для резидентов, бесплатный фитнесс зал на территории комплекса, закрытый двор-парк на 1,7 гектар и премиальный сервис.
			</div>
		</div>
		<img src="<?= STANDART_DIR; ?>/img/other/about-bg.jpg" alt="" class="about__img js-reveal gs-reveal-right">
	</section>

	<section class="comfort js-reveal gs-reveal" id="features">
		<div class="comfort__body container">
			<h3 class="comfort__heading title title--huge title--black title--w-regular text-center js-reveal gs-reveal-left">
			<span class="comfort__heading-accent">
				Воплощение комфорта
			</span>
				в каждом квадратном метре
			</h3>
			<div class="comfort__grid">
				<div class="comfort__card js-reveal gs-reveal-left" data-num="01">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						Лучшие системы комфорта в квартирах
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						УФ лампы для обеззараживания воздуха, центральная система кондиционирования и увлажнения, и комплексная система безопасности для комфорта резидентов.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right" style="background-image: url('<?= STANDART_DIR; ?>/img/other/comfort.png')">
				</div>
				<div class="comfort__card js-reveal gs-reveal-left">

				</div>
				<div class="comfort__card js-reveal gs-reveal-left" data-num="02">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						Высокий уровень сервиса резидентам
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Мытье окон и фасадов 2 раза в год, услуги курьеров и химчистки, сезонный шиномонтаж и хранение колес, клининг квартир, а также услуги сантехника, электрика и плотника не покидая территорию ЖК.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right">

				</div>
				<div class="comfort__card js-reveal gs-reveal-right" data-num="03">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						Собственный закрытый двор-парк
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Ландшафтный парк на 1.7 гектара,  детская площадка, спортивный комплекс и разделение на зоны для активного и тихого отдыха.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-left" data-num="04">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						Премиальная инфраструктура
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Благодаря расположению на Пресне, вам доступна лучшая детсткая инфраструктура, более 100 торговых и развлекательных центров, модные кафе и рестораны и премиальные медицинские учреждения.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-left" style="background-image: url('<?= STANDART_DIR; ?>/img/other/comfort-2.jpeg')">
				</div>
				<div class="comfort__card js-reveal gs-reveal-right" data-num="05">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						Роскошные и уютные квартиры
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Потолки до 3,5 метров, панорамное остекление, приватные террасы, в среднем по 3 квартиры на этаже.
						Доступны пентхаусы, квартиры с каминами и террасами, а также скай-виллы.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right">

				</div>
			</div>
		</div>
	</section id>

	<section class="features">
		<div class="features__body container">
			<div class="features__column">
				<div class="features__info d-flex d-flex-column flex-justify-sb js-reveal gs-reveal-left">
					<h3 class="features__heading title title--white title--w-regular">
						<span class="features__heading-accent">Пресня — это центр</span>
						деловой и развлекательной жизни столицы.
					</h3>
					<div class="features__pic features__pic--mobile">
						<img src="<?= STANDART_DIR; ?>./img/other/features.jpeg" alt="" class="features__img">
					</div>
					<div class="features__description text text--big text--white text--w-light">
						Здесь всё рядом: и Москва- Сити, и Патриаршие пруды, и Новый Арбат. Быстро и легко добирайтесь за город — у вас удобный выезд на Звенигородское шоссе.
					</div>
					<ul class="features__list text text--big text--white text--w-regular">
						<li class="features__list-item features__list-item--walking">
							10 минут пешком до м. Улица 1905 года
						</li>
						<li class="features__list-item features__list-item--car">
							1 минута до Звенигородского шоссе
						</li>
						<li class="features__list-item features__list-item--car">
							5 минут до ТТК
						</li>
						<li class="features__list-item features__list-item--car">
							10 минут до Москва сити
						</li>
						<li class="features__list-item features__list-item--car">
							15 минут до Кремля
						</li>
					</ul>
				</div>
				<div class="features__pic js-reveal gs-reveal-right">
					<img src="<?= STANDART_DIR; ?>./img/other/features.jpeg" alt="" class="features__img">
				</div>
			</div>
		</div>
	</section>

	<section class="gallery js-reveal gs-reveal" id="gallery">
		<div class="gallery__body">
			<div class="gallery__heading-wrap container">
				<h3 class="gallery__heading title title--black title--w-regular text-center">
					Галерея жилого комплекса
				</h3>
			</div>
			<div class="gallery__slider-wrap">
				<div class="gallery__splide splide js-gallery-init-slider">
					<div class="gallery__splide-track splide__track">
						<ul class="gallery__splide-list splide__list">
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>./img/gallery/slide-1.jpg" alt="" class="gallery__photo">
							</li>
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>./img/gallery/slide-2.jpg" alt="" class="gallery__photo">
							</li>
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>./img/gallery/slide-3.jpg" alt="" class="gallery__photo">
							</li>
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>./img/gallery/slide-4.jpg" alt="" class="gallery__photo">
							</li>
						</ul>
						<ul class="splide__pagination gallery__pagination"></ul>
					</div>
					<div class="gallery__splide-arrows splide__arrows">
						<button class="gallery__splide-arrow gallery__splide-arrow--prev splide__arrow splide__arrow--prev">
							<svg class="gallery__arrow-icon" width="100%" height="30px">
								<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#arrow-prev"></use>
							</svg>
						</button>
						<button class="gallery__splide-arrow gallery__splide-arrow--next splide__arrow splide__arrow--next">
							<svg class="gallery__arrow-icon" width="100%" height="30px">
								<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#arrow-next"></use>
							</svg>
						</button>
					</div>
				</div>
				<h3 class="gallery__text text text--large text--white text--w-regular js-reveal gs-reveal">
					Вид из панорамных окон
				</h3>
			</div>
		</div>
	</section>

	<section class="apartment" id="apartments">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						3 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						56 кв м, 16 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2026 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile js-reveal gs-reveal-right">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-1.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-left">
						Просторная и светлая квартира на 16 этаже, с видом на двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены тихие лифты и улучшенная звукоизоляция.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация) бесшумны.
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на двор-парк
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,43 метра
							</li>
							<li>
								16 этаж
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~69.530.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-1.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment apartment--revert">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-right">
						3 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-right">
						135 кв м, 7 этаж, с чистовой отделкой Base
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-right">
						Сдача в 2026 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-2.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-left">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-right">
						Большая, светлая квартира на 7 этаже, с 3 спальнями, 4 санузлами и 3 гардеробными комнатами. Вид на двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены тихие лифты и улучшенная звукоизоляция.я.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация) бесшумны.
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на двор-парк
							</li>
							<li>
								3 спальни
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,43 метра
							</li>
							<li>
								7 этаж
							</li>
							<li>
								Шумоизоляция
							</li>
							<li>
								4 санузла
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-right">
						~121.900.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info js-reveal gs-reveal-left">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
						<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-2.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-left">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment apartment--vertical">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						4 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						165,2 кв м, 10 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2026 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-3.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-left">
						Большая, светлая квартира на 10 этаже с кабинетом, 3 спальнями, 3 санузлами и 3 гардеробными с видом на Сити и двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены тихие лифты и улучшенная звукоизоляция.я.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация) бесшумны.
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на Сити и двор
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								3 спальни
							</li>
							<li>
								Кабинет
							</li>
							<li>
								Потолки 3,43 метра
							</li>
							<li>
								7 этаж
							</li>
							<li>
								Шумоизоляция
							</li>
							<li>
								3 санузла
							</li>
							<li>
								3 гардеробных
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~176.010.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info apartment__photo-info--vertical">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-3.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment apartment--revert apartment--vertical">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						4 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						165,2 кв м, 10 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2026 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-3.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-right">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-right">
						Большая, светлая квартира на 10 этаже с кабинетом, 3 спальнями, 3 санузлами и 3 гардеробными с видом на Сити и двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены тихие лифты и улучшенная звукоизоляция.я.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация) бесшумны.
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на Сити и двор
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								3 спальни
							</li>
							<li>
								Кабинет
							</li>
							<li>
								Потолки 3,43 метра
							</li>
							<li>
								10 этаж
							</li>
							<li>
								Шумоизоляция
							</li>
							<li>
								3 санузла
							</li>
							<li>
								3 гардеробных
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-right">
						~184.470.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info apartment__photo-info--vertical">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
						<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-scheme-3.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-left">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>./img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="consult" id="contacts">
		<div class="consult__body container">
			<h3 class="consult__title title title--super-huge title--black title--w-regular text-center js-reveal gs-reveal-left">
				Не нашли <span class="consult__title-accent title title--accent">подходящий</span> вариант?
			</h3>
			<div class="consult__subtitle text text--big text--black text--w-light text-center js-reveal gs-reveal-right">
				Свяжитесь с нами любым удобным для вас способом и наш эксперт поможет вам подобрать квартиру вашей мечты в этом ЖК или из 2000 других объектов.
			</div>
			<div class="consult__action js-reveal gs-reveal">
				<a href="javascript:;" class="apartment__button button button--availability"
				   data-hystmodal="#feedback">
					Получить консультацию
					<span class="button__icon">
					<svg class="button__home-icon" width="49px" height="49px">
						<use href="<?= STANDART_DIR; ?>./img/svgsprite/sprite.symbol.svg#home"></use>
					</svg>
				</span>
				</a>
			</div>
			<div class="consult__text text text--large text--black text--w-light text-center js-reveal gs-reveal">
				Консультация по подбору бесплатная и не обязывает к покупке.
				<br>
				Мы против спам-звонков, поэтому не беспокоим более 1 раза.
			</div>
		</div>
	</section>

<?php get_footer(); ?>