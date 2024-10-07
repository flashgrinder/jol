import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

function gallerySlider () {

    const gallerySliderTrue = document.querySelector('.js-gallery-init-slider');
    if (gallerySliderTrue) {
        const gallerySlider = new Splide( '.js-gallery-init-slider', {
            type   : 'loop',
            // height: '30rem',
            autoHeight: true,
            perPage: 1,
            focus: 'center',
            perMove: 1,
            autoplay: true,
            pagination: false,
            classes: {
                arrows: 'splide__arrows gallery__splide-arrows',
                arrow : 'splide__arrow gallery__splide-arrow',
                prev  : 'splide__arrow--prev gallery__splide-arrow--prev',
                next  : 'splide__arrow--next gallery__splide-arrow--next',
            },
        } );
        gallerySlider.mount();
    }

}

export default gallerySlider;