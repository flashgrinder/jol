function mobileNav() {
	// Mobile nav button
	const navBtn = document.querySelector('.js-mobile-nav-btn');
	const navBtnMainScreen = document.querySelector('.js-mobile-nav-btn-main-screen');
	const nav = document.querySelector('.js-menu');
	const navMainScreen = document.querySelector('.js-menu-main-screen');
	const menuIcon = document.querySelector('.js-mobile-nav-icon');
	const menuIconMainScreen = document.querySelector('.js-mobile-nav-icon-main-screen');

	navBtn.onclick = function () {
		nav.classList.toggle('is-open');
		menuIcon.classList.toggle('is-active');
		document.body.classList.toggle('no-scroll');
	};
	navBtnMainScreen.onclick = function () {
		navMainScreen.classList.toggle('is-open');
		menuIconMainScreen.classList.toggle('is-active');
		document.body.classList.toggle('no-scroll');
	};

	const header = document.querySelector('.header');
	let lastScroll = 0;

	const throttle = (func, time = 100) => {
		let lastTime = 0;
		return () => {
			const now = new Date();
			if (now - lastTime >= time) {
				func();
				time = now;
			}
		};
	};

	const validateHeader = () => {
		const windowY = window.scrollY;
		const windowH = window.innerHeight;
		if (windowY > windowH) {
			// We passed the first section, set a toggable class
			header.classList.add("is-fixed");
			// Determine is we ready to animate
			if (windowY > windowH + 30) {
				header.classList.add("can-animate");
				if (windowY < lastScroll) {
					// Determine if we scrolling up
					header.classList.add("scroll-up");
				} else {
					header.classList.remove("scroll-up");
				}
			} else {
				header.classList.remove("scroll-up");
			}
		} else {
			header.classList.remove("is-fixed", "can-animate");
		}
		lastScroll = windowY;
	};

	window.addEventListener("scroll", throttle(validateHeader, 100));
}

export default mobileNav;