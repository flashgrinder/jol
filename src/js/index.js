import mobileNav from './modules/mobile-nav.js';
import gallerySlider from "./modules/gallery-slider";
import gsReveal from './modules/gs-reveal.js';
document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    gsReveal.init();
    gallerySlider();

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
