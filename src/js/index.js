import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import mobileNav from './modules/mobile-nav.js';
import apartmentsSliders from "./modules/apartments-slider.js";
// import gsReveal from './modules/gs-reveal.js';
import modalForm from "./modules/modal.js";
document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    // gsReveal.init();
    apartmentsSliders();
    modalForm();
    Fancybox.bind('[data-fancybox]');

    const btnToUp = document.querySelector('.js-button-to-up');
    btnToUp.addEventListener('click', () => {

        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });

    });

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
