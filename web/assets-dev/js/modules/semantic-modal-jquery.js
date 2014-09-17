(function(window, document, undefined) {

    'use strict';

    // list out the vars
    var mOpen = $('.modal-open'),
        mClose = $('.modal-close'),
        modalOpen = false,
        mOverlay = $('.modal'),
        lastFocus;

    function modalTarget(modalId){

        var mOverlay = $('#'+modalId),
            modal = mOverlay.find('.modal-holder');

        if (modalOpen == true){
            console.log('true');
            modalShow(mOverlay, modal);
        } else {
            console.log('false');
            modalClose(mOverlay, modal)
        }
    }


    function modalShow (mOverlay, modal) {
        mOverlay.attr('aria-hidden', 'false');
        modalOpen = true;
        modal.attr('tabindex', '0');
        modal.focus();
    }

    // binds to both the button click and the escape key to close the modal window
    // but only if modalOpen is set to true
    function modalClose ( event, mOverlay, modal ) {
        if (modalOpen == false && ( !event.keyCode || event.keyCode === 27 ) ) {
            console.log(mOverlay);
            mOverlay.attr('aria-hidden', 'true');
            modal.attr('tabindex', '-1');
            modalOpen = false;
            lastFocus.focus();
        }
    }


    // Close modal window by clicking on the overlay
    mOverlay.on('click', function( e ) {
        if (e.target == modal.parentNode) {
            modalClose( e );
        }
    }, false);


    // open modal by btn click/hit
    mOpen.on('click', function(){
        console.log('click open');
        var modalId = $(this).data('modal-target');
        modalOpen = true;
        modalTarget(modalId, modalOpen);
    });

    // close modal by btn click/hit
    mClose.on('click', function(){
        console.log('click close');
        var modalId = $(this).data('modal-target');
        modalOpen = false;
        modalTarget(modalId, modalOpen);
    });



    // close modal by keydown, but only if modal is open
    //document.addEventListener('keydown', modalClose);

    // restrict tab focus on elements only inside modal window
    //window.addEventListener('keypress', focusRestrict);












})();
