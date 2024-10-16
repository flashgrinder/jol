<?php include_once(__DIR__ . '/template-parts/head.php'); ?>
<div class="header-top js-menu js-menu-main-screen mobile-nav__menu">
	<div class="header-top__wrap container">
		<nav class="header-top__menu">
			<ul class="header-top__menu-list d-flex flex-justify-sb flex-align-center">
				<li class="header-top__menu-item">
					<a href="#about" class="header-top__menu-link js-anchor-link">
						О проекте
					</a>
				</li>
				<li class="header-top__menu-item">
					<a href="#features" class="header-top__menu-link js-anchor-link">
						Преимущества
					</a>
				</li>
				<li class="header-top__menu-item">
					<a href="#gallery" class="header-top__menu-link js-anchor-link">
						Галерея
					</a>
				</li>
				<li class="header-top__menu-item">
					<a href="#apartments" class="header-top__menu-link js-anchor-link">
						Планировки
					</a>
				</li>
				<li class="header-top__menu-item">
					<a href="#contacts" class="header-top__menu-link js-anchor-link">
						Контакты
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<header class="header">
	<div class="mobile-nav">
		<div class="mobile-nav__outer container">
			<div class="mobile-nav__inner d-flex flex-justify-sb flex-align-center">
				<a href="/" class="mobile-nav__logo">
					<img src="<?= STANDART_DIR; ?>/img/logo.png" alt=""
					     class="mobile-nav__logo-img">
				</a>
				<button class="mobile-nav__btn mobile-nav__btn--header js-mobile-nav-btn">
					<div class="mobile-nav__btn-icon js-mobile-nav-icon"></div>
				</button>
			</div>
		</div>
	</div>
</header>

<main class="main">