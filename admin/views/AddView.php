<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Configuration de la vue pour les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page, actuellement vide -->
    <title></title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feuille de style additionnelle, actuellement non spécifiée -->
    <link rel="stylesheet" href="">
</head>

<body>
    <section>
        <!-- Inclusion du header via un fichier PHP externe -->
        <?php include 'HeaderView.php' ?>
        <!-- Conteneur principal avec une marge en haut -->
        <div class="container mt-5">
            <!-- Centre les éléments de la ligne -->
            <div class="row justify-content-center">
                <!-- Colonne centrale avec une largeur moyenne de 4 sur une échelle de 12 colonnes -->
                <div class="col-md-4">
                    <!-- Titre de la section, actuellement vide -->
                    <h1 class="mb-4"></h1>
                    <!-- Formulaire pour ajouter une voiture -->
                    <form method="POST">
                        <!-- Champ pour l'image de la voiture -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image de la voiture</label>
                            <input type="text" class="form-control" id="image" name="image" required>
                        </div>
                        <!-- Champ pour le nom de la voiture -->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom de la voiture</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <!-- Champ pour l'année de mise en circulation de la voiture -->
                        <div class="mb-3">
                            <label for="annee" class="form-label">Année de mise en circulation</label>
                            <input type="text" class="form-control" id="annee" name="annee">
                        </div>
                        <!-- Champ pour le nombre de kilomètres parcourus par la voiture -->
                        <div class="mb-3">
                            <label for="kilometres" class="form-label">Kilomètres</label>
                            <input type="number" class="form-control" id="km" name="km">
                        </div>
                        <!-- Champ pour le prix de la voiture -->
                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input type="number" class="form-control" id="prix" name="prix">
                        </div>
                        <!-- Champ pour la description de la voiture -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
                        </div>
                        <!-- Bouton pour soumettre le formulaire -->
                        <button type="submit" name="valider" class="btn btn-dark">Publier</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>