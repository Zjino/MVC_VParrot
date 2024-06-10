<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="">
</head>

<body>
    <section>
        <!-- Inclusion de la vue du header -->
        <?php include 'HeaderView.php' ?>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5" id="listeProduits">
                <!-- Titre de la section, actuellement vide -->
                <h1 class="mb-4"></h1>
                <div class="col-12">
                    <!-- Formulaire pour supprimer un produit -->
                    <form method="post" action="../controllers/DeleteController.php">
                        <div class="mb-3 d-flex justify-content-start align-items-center">
                            <!-- Label pour l'ID du produit, actuellement vide -->
                            <label for="prix" class="form-label me-3"></label>
                            <!-- Champ pour saisir l'ID du produit à supprimer -->
                            <input type="number" class="form-control me-3" id="idproduit" name="idproduit" required>
                            <!-- Bouton de soumission pour supprimer le produit -->
                            <button type="submit" name="valider" class="btn btn-dark">Supprimer</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Affichage des produits existants -->
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5" id="listeProduits">
                <!-- Boucle à travers la liste des produits -->
                <?php foreach ($Produits as $produit) : ?>
                    <div class="col">
                        <div class="card position-relative">
                            <!-- Affichage de l'image du produit -->
                            <img src="<?= $produit->image ?>" class="card-img-top" alt="...">
                            <!-- Affichage de l'ID du produit en overlay sur l'image -->
                            <h6 class="card-title position-absolute top-0 start-0 bg-dark text-white px-2 py-1"><?= $produit->id ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>