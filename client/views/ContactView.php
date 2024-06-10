<!-- Section de contact -->
<section class="contacts-section py-4">
    <div class="container" id="listcontact">
        <!-- Titre de la section -->
        <h2 class="fs-1 fw-semibold text-center text-white">Des questions ? Parlons-en !</h2>
        <div class="form-container">
            <!-- Formulaire de contact -->
            <form id="contactForm" class="w-75 mx-auto d-md-flex align-items-md-start justify-content-md-center mt-4" action="">
                <!-- Champ Nom -->
                <div class="mb-3 me-md-3">
                    <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom" required>
                </div>
                <!-- Champ Email -->
                <div class="mb-3 me-md-3">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <!-- Champ Message -->
                <div class="mb-3 me-md-3">
                    <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                </div>
                <!-- Bouton Envoyer -->
                <button class="btn btn-dark text-primerie" type="submit" required>Envoyer</button>
            </form>
        </div>
        <!-- Message de succès après envoi -->
        <div id="successMessage" class="success-message" style="display: none;">
            Votre message a été envoyé avec succès ! Merci de nous avoir contactés.
        </div>
    </div>
</section>