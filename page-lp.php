<?php /* Template Name: Лендинг */?>
<?php get_header(); ?>

	<section class="main-screen">
		<div class="main-screen__body container">
			<div class="main-screen__column">
				<div class="main-screen__info js-reveal gs-reveal-left d-flex d-flex-column flex-align-center flex-justify-sb">
					<div class="main-screen__header d-flex flex-justify-sb flex-align-center">
						<a href="/" class="main-screen__logo">
							<img src="<?= STANDART_DIR; ?>/img/logo.svg" alt="" class="main-screen__logo">
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
							<?php the_field('main-screen_subtitle'); ?>
						</p>
						<h1 class="main-screen__title title title--huge title--black title--w-regular text-center">
							<?php the_field('main-screen_title'); ?>
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
						<a href="javascript:;" class="main-screen__button-catalog button button--catalog" data-hystmodal="#feedback">
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
					<?php
                        $default_attr = [
                            'class'	=> "main-screen__img",
                            'alt'   => get_the_title()
                        ];

                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr );
					?>
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
				<?php the_field('about_title'); ?>
			</h3>
			<div class="about__text text text--big text--black text--w-light">
				<?php the_field('about_description'); ?>
			</div>
		</div>
		<?php
			$about_img = get_field('about_img');
		?>
		<?php if(!empty($about_img)): ?>
			<img src="<?php echo esc_url($about_img['url']); ?>" alt="<?php echo esc_attr($about_img['alt']); ?>" class="about__img js-reveal gs-reveal-right">
		<?php endif; ?>
	</section>

	<section class="comfort js-reveal gs-reveal" id="features">
		<div class="comfort__body container">
			<h3 class="comfort__heading title title--huge title--black title--w-regular text-center js-reveal gs-reveal-left">
				<?php the_field('features_title'); ?>
			</h3>
			<?php if( have_rows('features') ): ?>
				<div class="comfort__grid">
					<?php while( have_rows('features') ): the_row();

						$features_title = get_sub_field('features_title');
						$features_description = get_sub_field('features_description');
						$features_img = get_sub_field('features_img');
						$features_num = get_sub_field('features_num');

						?>
						<div class="comfort__card js-reveal gs-reveal-left" <?php if(!empty($features_num)) { ?>data-num="<?= $features_num; ?>" <?php } ?> <?php if(!empty($features_img)) { ?>style="background-image: url('<?= esc_url($features_img['url']); ?>')"<?php } ?>>
							<?php if(!empty($features_title)) { ?>
								<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
									<?= $features_title; ?>
								</h3>
							<?php } ?>
							<?php if(!empty($features_description)) { ?>
								<div class="comfort__card-description text text--large text--black text--w-light">
									<?= $features_description; ?>
								</div>
							<?php } ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="features">
		<div class="features__body container">
			<div class="features__column">
				<div class="features__info d-flex d-flex-column flex-justify-sb js-reveal gs-reveal-left">
					<h3 class="features__heading title title--white title--w-regular">
						<?php the_field('district_title'); ?>
					</h3>
					<div class="features__pic features__pic--mobile">
						<?php
							$district_img = get_field('district_img');
						?>
						<?php if(!empty($district_img)): ?>
							<img src="<?php echo esc_url($district_img['url']); ?>" alt="<?php echo esc_attr($district_img['alt']); ?>" class="features__img js-reveal gs-reveal-right">
						<?php endif; ?>
					</div>
					<div class="features__description text text--big text--white text--w-light">
						<?php the_field('district_description'); ?>
					</div>
					<?php if( have_rows('district-features') ): ?>
						<ul class="features__list text text--big text--white text--w-regular">
							<?php while( have_rows('district-features') ): the_row();

								$district_features_text = get_sub_field('district-features_text');
								$district_features_icon = get_sub_field('district-features_icon');

								?>
								<li class="features__list-item features__list-item--<?= $district_features_icon; ?>">
									<?= $district_features_text; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="features__pic js-reveal gs-reveal-right">
					<?php if(!empty($district_img)): ?>
						<img src="<?php echo esc_url($district_img['url']); ?>" alt="<?php echo esc_attr($district_img['alt']); ?>" class="features__img js-reveal gs-reveal-right">
					<?php endif; ?>
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
						<?php
							$images = get_field('gallery');
							if( $images ): ?>
								<ul class="gallery__splide-list splide__list">
									<?php foreach( $images as $image ): ?>
										<li class="gallery__splide-slide splide__slide">
											<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="gallery__photo">
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						<ul class="splide__pagination gallery__pagination"></ul>
					</div>
					<div class="gallery__splide-arrows splide__arrows">
						<button class="gallery__splide-arrow gallery__splide-arrow--prev splide__arrow splide__arrow--prev">
							<svg class="gallery__arrow-icon" width="100%" height="30px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-prev"></use>
							</svg>
						</button>
						<button class="gallery__splide-arrow gallery__splide-arrow--next splide__arrow splide__arrow--next">
							<svg class="gallery__arrow-icon" width="100%" height="30px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-next"></use>
							</svg>
						</button>
					</div>
				</div>
				<h3 class="gallery__text text text--large text--white text--w-regular js-reveal gs-reveal">
					<?php the_field('gallery_subtitle'); ?>
				</h3>
			</div>
		</div>
	</section>

	<section class="apartment" id="apartments">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						1 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						66,5 кв м, 5 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile js-reveal gs-reveal-right">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-1-hmv.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+799990855155" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-left">
						Просторная, светлая квартира c одной большой спальней, и видом на двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены окна с зеркальным покрытием, которые пропускают свет, но берегут вашу приватность.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация)  и лифты работают бесшумно.
						</p>
						<ul>
							<li>
								Зеркальные окна
							</li>
							<li>
								Вид на двор-парк
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,4 метра
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~166.290.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-1-hmv.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
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
						2 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-right">
						118,6 кв м, 9 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-right">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-2-hmv.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-left">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+799990855155" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-right">
						Просторная, светлая квартира с 2 мастер спальнями и видом на двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены окна с зеркальным покрытием, которые пропускают свет, но берегут вашу приватность.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация)  и лифты работают бесшумно.
						</p>
						<ul>
							<li>
								Зеркальные окна
							</li>
							<li>
								Вид на двор-парк
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,4 метра
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-right">
						~285.900.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info js-reveal gs-reveal-left">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-2-hmv.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-left">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						2 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						108,1 кв м, 10 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-3-hmv.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+799990855155" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-left">
						Просторная, светлая квартира с 2 мастер спальнями, видом на набережную и балконом.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены окна с зеркальным покрытием, которые пропускают свет, но берегут вашу приватность.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация)  и лифты работают бесшумно.
						</p>
						<ul>
							<li>
								Зеркальные окна
							</li>
							<li>
								Вид на набережную
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,4 метра
							</li>
							<li>
								Балкон
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~318.930.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info apartment__photo-info--vertical">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-3-hmv.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="consult" id="contacts">
		<div class="consult__body container">
			<h3 class="consult__title title title--super-huge title--black title--w-regular text-center js-reveal gs-reveal-left">
				<?php the_field('consult_title'); ?>
			</h3>
			<div class="consult__subtitle text text--big text--black text--w-light text-center js-reveal gs-reveal-right">
				<?php the_field('consult_subtitle'); ?>
			</div>
			<div class="consult__action js-reveal gs-reveal">
				<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability"
				   data-hystmodal="#feedback">
					Получить консультацию
					<span class="button__icon">
					<svg class="button__home-icon" width="49px" height="49px">
						<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#home"></use>
					</svg>
				</span>
				</a>
			</div>
			<div class="consult__text text text--large text--black text--w-light text-center js-reveal gs-reveal">
				<?php the_field('consult_text'); ?>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>