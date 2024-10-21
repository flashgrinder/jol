import HystModal from 'hystmodal';

function modalForm(container = document) {

    let wpcf7Elem = document.querySelectorAll( '.wpcf7-form' );

    wpcf7Elem.forEach(function(elem) {

        elem.addEventListener( 'wpcf7mailsent', function( e ) {

            modalsForms.open('.js-modal-success');

        }, false );

    });

    const modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: false,
    });

    const modalsFormsPolicy = new HystModal({
        linkAttributeName: "data-policy",
        catchFocus: true,
        waitTransitions: true,
        backscroll: true,
        closeOnOverlay: false,
    });

}

export default modalForm