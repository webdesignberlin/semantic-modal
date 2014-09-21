<?php include 'inc/_head.php'; ?>
<header role="banner">
    <div class="container">
        <h1>semantic modal</h1>
    </div>
</header>
<main role="main">
    <article class="container">

        <h2>Demo Content</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

        <button type="button" class="modal-open" data-modal-target="modal-dialog">Modal öffnen</button>

        <section class="modal modal-dialog" id="modal-dialog" role="dialog" aria-hidden="true" aria-labelledby="modal-title">
            <div class="modal__content modal-holder" role="document">

                <h1 class="modal__content__title" id="modal-title">Modal Title</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                <button class="btn-modal__close modal-close" data-modal-target="modal-dialog" type="button" aria-label="close">
                    &times; Modal schließen
                </button>

            </div>
        </section>


        <button type="button" class="modal-open" data-modal-target="modal-dialog-2">Modal 2 öffnen</button>
        
        <section class="modal modal-dialog" id="modal-dialog-2" aria-hidden="true" role="dialog" aria-labelledby="modal-title-2">
            <div class="modal__content modal-holder" role="document">

                <h1 class="modal__content__title" id_="modal-title-2">Modal Title 2</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <button class="btn-modal__close modal-close" data-modal-target="modal-dialog-2" type="button" aria-label="close">
                    &times; Modal schließen
                </button>

            </div>
        </section>

    </article>
</main>
<footer class="container" role="contentinfo">
    <p><a href="http://micha.seiler-gerstmann.de">Webdesign Berlin, Michael Seiler-Gerstmann</a> | <a href="https://github.com/webdesignberlin/semantic-modal">Find Semantic Modal on Github</a></p>
</footer>
<?php include 'inc/_footer.php'; ?>
