<?php include 'inc/_head.php'; ?>
<header>
    <div class="container">
        <h1>semantic modal</h1>
    </div>
</header>
<main>
    <article class="container">

        <h2>Demo Content</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

        <button type="button" class="modal-open" data-modal-target="modal-dialog">Modal öffnen</button>


        <section class="modal modal-dialog" id="modal-dialog"
             aria-hidden="true" role="dialog"
             aria-labelledby="modal__title">

            <div class="modal__content modal-holder" role="document">

                <h1 class="modal__content__title">Modal Title</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                <button class="btn-modal__close modal-close" data-modal-target="modal-dialog" type="button" aria-label="close">
                    &times; Modal schließen
                </button>

            </div>
        </section>






        <button type="button" class="modal-open" data-modal-target="modal-dialog-2">Modal öffnen</button>


        <section class="modal modal-dialog" id="modal-dialog-2"
                 aria-hidden="true" role="dialog"
                 aria-labelledby="modal__title">

            <div class="modal__content modal-holder" role="document">

                <h1 class="modal__content__title">Modal Title 2</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                <button class="btn-modal__close modal-close" data-modal-target="modal-dialog-2" type="button" aria-label="close">
                    &times; Modal schließen
                </button>

            </div>
        </section>






    </article>
</main>
<?php include 'inc/_footer.php'; ?>
