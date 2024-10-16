</main>
<footer class="footer">
	<div class="footer__body container">
		<div class="footer__top">
			<nav class="footer__menu menu">
				<ul class="footer__menu-list menu__list">
					<li class="footer__menu-item menu__item">
						<a href="#about" class="footer__menu-link menu__link">
							О проекте
						</a>
					</li>
					<li class="footer__menu-item menu__item">
						<a href="#features" class="footer__menu-link menu__link">
							Преимущества
						</a>
					</li>
					<li class="footer__menu-item menu__item">
						<a href="#gallery" class="footer__menu-link menu__link">
							Галерея
						</a>
					</li>
					<li class="footer__menu-item menu__item">
						<a href="#apartments" class="footer__menu-link menu__link">
							Планировки
						</a>
					</li>
					<li class="footer__menu-item menu__item">
						<a href="#contacts" class="footer__menu-link menu__link">
							Контакты
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="footer__bottom d-flex flex-justify-sb flex-align-center">
			<div class="footer__contacts text text--large text--white text--w-light">
				<div class="footer__contacts-text">
					Заказать звонок
				</div>
				<a href="tel:+7 915 118-80-80" class="footer__contact">
					+7 915 118-80-80
				</a>
				<a href="tel:info@jol-agency.ru" class="footer__contact">
					info@jol-agency.ru
				</a>
				<div class="footer__contacts-wrap d-flex">
					<a href="https://t.me/jolagency" class="footer__contact">
						Telegram
					</a>
					<a href="https://wa.me/message/TGMYNWTYHYZJF1" class="footer__contact">
						WhatsApp
					</a>
				</div>
			</div>
			<a href="/" class="footer__logo">
				<img src="<?= STANDART_DIR; ?>/img/logo-white.png" alt="" class="footer__logo-img">
			</a>
			<button class="footer__button-up d-flex flex-align-center flex-justify-center js-button-to-up">
				<svg class="footer__button-up-icon" width="38px" height="20px">
					<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-up"></use>
				</svg>
			</button>
		</div>
		<div class="footer__action d-flex flex-justify-center flex-justify-center">
			<a href="javascript:;" class="footer__policy text text--large text--w-light">
				Положение об обработке персональных данных
			</a>
		</div>
	</div>
</footer>
<!-- Модалка обратной связи -->
<div class="modal hystmodal" id="feedback" aria-hidden="true">
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
				</svg>
			</div>
			<div class="modal__logo">
				<img src="<?= STANDART_DIR; ?>/img/logo-white.png" alt=""
				     class="modal__logo-img">
			</div>
			<h3 class="modal__title title title--white title--w-regular">
				Связаться с нами
			</h3>
			<?= do_shortcode('[contact-form-7 id="8849b0d" title="Модальная форма" html_class="modal__form"]'); ?>
			<div class="modal__footer d-flex flex-justify-sb flex-align-center">
				<a href="tel:+7 915 118-80-80" class="modal__contact">
					+7 915 118-80-80
				</a>
				<a href="mailto:info@jol-agency.ru" class="modal__contact">
					info@jol-agency.ru
				</a>
				<a href="https://wa.me/message/TGMYNWTYHYZJF1" class="modal__contact">
					WhatsApp
				</a>
				<a href="https://t.me/jolagency" class="modal__contact">
					Telegram
				</a>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- /. Модалка обратной связи -->

<!-- Success -->
<div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
				</svg>
			</div>
			<div class="modal__wrapper-success">
				<div class="modal__success-text text text--large text--white text--w-regular">
					Спасибо, ваша заявка принята!
					<br>
					<br>
					Наш менеджер скоро с вами свяжется.
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /. Success -->
<?php wp_footer(); ?>
</body>
</html>