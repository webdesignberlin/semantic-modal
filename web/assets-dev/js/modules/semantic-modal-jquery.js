(function() {
//(function(window, document, undefined) {

    'use strict';

    // list out the vars
    var mOpen = $('.modal-open'),
        mClose = $('.modal-close'),
        modalOpen = false,
        mOverlay = $('.modal'),
        mClassOpen = 'modal--opened',
        mClassClose = 'modal--closed',
        lastFocus;

    function modalTarget(modalId){

        var mOverlay = $('#'+modalId),
            modal = mOverlay.find('.modal-holder');

        if (modalOpen == true){
            modalShow(mOverlay, modal);
        } else {
            modalClose(event, mOverlay, modal)
        }
    }


    function modalShow (mOverlay, modal) {
        mOverlay.attr('aria-hidden', 'false');
        modalOpen = true;
        mOverlay.removeClass(mClassClose);
        mOverlay.addClass(mClassOpen);
        modal.attr('tabindex', '0');
    }

    // binds to both the button click and the escape key to close the modal window
    // but only if modalOpen is set to true
    function modalClose ( event, mOverlay, modal ) {
        if (modalOpen == false && ( !event.keyCode || event.keyCode === 27 ) ) {
            mOverlay.removeClass(mClassOpen);
            mOverlay.addClass(mClassClose);
            mOverlay.attr('aria-hidden', 'true');
            modal.attr('tabindex', '-1');
            modalOpen = false;
        }
    }




    // Close modal window by clicking on the overlay
    mOverlay.on('click', function() {
        var modalId = $(this).attr('id');
        modalOpen = false;
        modalTarget(modalId, modalOpen);
    });


    // open modal by btn click/hit
    mOpen.on('click', function(){
        var modalId = $(this).data('modal-target');
        modalOpen = true;
        modalTarget(modalId, modalOpen);
    });

    // close modal by btn click/hit
    mClose.on('click', function(){
        var modalId = $(this).data('modal-target');
        modalOpen = false;
        modalTarget(modalId, modalOpen);
    });


    $(document).keydown(function(event) {
        if (modalOpen == true && ( event.keyCode === 27 ) ) {
            var modalId = $('.'+mClassOpen).attr('id');
            modalOpen = false;
            modalTarget(modalId, modalOpen);
        }
     });


})();
