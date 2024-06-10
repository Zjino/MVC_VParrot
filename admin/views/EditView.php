<!DOCTYPE html>
<html>

<head>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Titre de la page -->
    <title></title>
</head>

<body>

    <!-- Barre de navigation Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Marque de la barre de navigation -->
            <a class="navbar-brand" href="HomeController.php">vperrot</a>
            <!-- Bouton de bascule pour les appareils mobiles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contenu de la barre de navigation -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a class="nav-link" aria-current="page" href="AddController.php">Produits</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" aria-current="page" href="../admin/">Nouveau</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="DeleteController.php">Suppression</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link active" style="font-weight: bold; color: green" href="">Modification</a>
                    </li>
                </ul>
                <!-- Bouton de déconnexion -->
                <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="DestroyController.php">Se deconnecter</a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal de la page -->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($leProduit as $produit) : ?>
                    <!-- Formulaire de modification de produit -->
                    <form method="post">
                        <!-- Champ pour l'image du produit -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">L'image du produit</label>
                            <input type="name" class="form-control" name="image" value="<?= $produit->image ?>" required>
                        </div>
                        <!-- Champ pour le nom du produit -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
                            <input type="text" class="form-control" name="nom" value="<?= $produit->nom ?>" required>
                        </div>
                        <!-- Champ pour l'année du produit -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">annee</label>
                            <input type="number" class="form-control" name="annee" value="<?= $produit->annee ?>" required>
                        </div>
                        <!-- Champ pour le kilométrage du produit -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">km</label>
                            <input type="number" class="form-control" name="km" value="<?= $produit->km ?>" required>
                        </div>
                        <!-- Champ pour le prix du produit -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Prix</label>
                            <input type="number" class="form-control" name="prix" value="<?= $produit->prix ?>" required>
                        </div>
                        <!-- Champ pour la description du produit -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea class="form-control" name="desc" required><?= $produit->description ?></textarea>
                        </div>
                        <!-- Bouton de soumission du formulaire -->
                        <button type="submit" name="valider" class="btn btn-success">Enregistrer</button>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>