import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

function apartmentsSliders () {
    const allSliders = document.querySelectorAll('.js-apartments-slider-init');
    if (allSliders) {
        const buildApartmentsSlider = sliderElm => {
            const sliderIdentifier = sliderElm.dataset.id;
            return new Splide(`#${sliderElm.id}`, {
                type   : 'fade',
                height: 'auto',
                perPage: 1,
                perMove: 1,
                autoplay: true,
                arrows: true,
                classes: {
                    arrows: 'splide__arrows slider-nav__splide-arrows',
                    arrow: 'splide__arrow slider-nav__splide-arrow',
                    prev: 'splide__arrow--prev slider-nav__splide-arrow--prev',
                    next: 'splide__arrow--next slider-nav__splide-arrow--next',
                    pagination: 'splide__pagination slider-pagination-dotted',
                    page      : 'splide__pagination__page slider-pagination-dotted__page',
                },
            } );
        }

        const allSliders = document.querySelectorAll('.js-apartments-slider-init');

        allSliders.forEach(slider => buildApartmentsSlider(slider).mount());
    }

}

export default apartmentsSliders;