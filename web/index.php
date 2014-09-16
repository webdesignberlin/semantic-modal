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

        <button type="button" id="modal-open">Modal öffnen</button>


        <section class="modal" id="modal-dialog"
             aria-hidden="true" role="dialog"
             aria-labelledby="modal__title">

            <div class="modal__content" id="modal-holder" role="document">

                <h1 class="modal__content__title">Modal Title</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                <button class="btn-modal__close" id="modal-close" type="button" aria-label="close">
                    &times; Modal schließen
                </button>

            </div>
        </section>

    </article>
</main>
<?php include 'inc/_footer.php'; ?>
