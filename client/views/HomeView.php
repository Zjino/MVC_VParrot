<!doctype html>
<html lang="fr">

<?php include 'HeadView.php' ?>

<body>
    <!-- en-tête -->
    <?php include 'HeaderView.php' ?>

    <!-- section hero desktop -->
    <section class="hero-desktop-section d-none d-sm-block p-5 vh-100">
        <div class="container">
            <!-- Titre et description -->
            <h1 class="display-1 fw-semibold text-white">Quand la mécanique <br>
                rencontre <span class="text-danger">la performance</span> <br> l'excellence prend vie.</h1>
            <p class="mt-5 text-white w-50">Le garage automobile, lieu dédié à l'entretien de vos véhicules,
                offre l'espace idéal pour réaliser vos besoins mécaniques. Que votre voiture nécessite
                une réparation, une mise au point ou simplement un entretien régulier, vous trouverez
                ici tous les services nécessaires pour répondre à vos exigences.</p>
            <!-- Bouton pour la demande de devis -->
            <p class="mt-5"><a class="btn btn-danger btn-lg" href="#">Demande Devis</a></p>
        </div>
    </section>

    <!-- section hero mobile -->
    <section class="hero-mobile-section d-sm-none py-5 px-3 vh-100">
        <div class="container">
            <!-- Titre et description -->
            <h1 class="display-5 fw-semibold text-white">Quand la mécanique<br>
                rencontre <span class="text-danger">la performance</span> l'excellence prend vie.<br> </h1>
            <p class="mt-5 text-white">Le garage automobile, lieu dédié à l'entretien de vos véhicules,
                offre l'espace idéal pour réaliser vos besoins mécaniques. Que votre voiture nécessite
                une réparation, une mise au point ou simplement un entretien régulier, vous trouverez
                ici tous les services nécessaires pour répondre à vos exigences..</p>
            <!-- Bouton pour la demande de devis -->
            <p class="mt-5"><a class="btn btn-danger btn-lg" href="#">Demande Devis</a></p>
        </div>
    </section>

    <!-- section "ProduitVehicles" -->
    <?php include_once('UsedCarsView.php') ?>

    <!-- section "Pourquoi nous choisir ?" -->
    <?php include_once('ServicesView.php')  ?>

    <!-- section "équipements" -->
    <?php include_once('AboutView.php')  ?>

    <!-- section "contacts" -->
    <?php include_once('ContactView.php')  ?>

    <!-- section footer -->
    <?php include_once('FooterView.php') ?>


    <!-- Chargement des scripts -->
    <script src="client/adminhoraire.js"></script>
    <script src="client/schedule.js"></script>
    <script src=".client/assets/js/filter.js"></script>
    <script src="client/assets/js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>