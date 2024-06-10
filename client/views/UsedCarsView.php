<!-- Section de filtres -->
<section class="filters-section with-margin-top">
    <div class="container">
        <div class="row flex-md-row-reverse">
            <!-- Filtre par année -->
            <div class="col-lg-4">
                <div class="filtre-range-slider">
                    <label for="anneeRange">Filtrer par année :</label>
                    <input id="anneeRange" type="range" min="1960" max="1990" class="form-range">
                    <span id="anneeRangeLabel"></span>
                </div>
            </div>
            <!-- Filtre par kilométrage maximum -->
            <div class="col-lg-4">
                <div class="filtre-range-slider">
                    <label for="kmMax">Filtrer par kilométrage max (km) :</label>
                    <input id="kmMax" type="range" min="40000" max="200000" class="form-range">
                    <span id="kmMaxLabel"></span>
                </div>
            </div>
            <!-- Filtre par prix -->
            <div class="col-lg-4">
                <div class="filtre-range-slider">
                    <label for="prixRange">Filtrer par prix (€) :</label>
                    <input id="prixRange" type="range" min="50000" max="1000000" class="form-range">
                    <span id="prixRangeLabel"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section de produits -->
<section>
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5" id="listeProduits">
            <?php foreach ($Produits as $produit) : ?>
                <div class="col">
                    <div class="card">
                        <!-- Image du produit -->
                        <img src="<?= $produit->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- Nom du produit -->
                            <h3 class="card-title"><?= $produit->nom ?></h3>
                            <!-- Année du produit -->
                            <p class="annee">Année : <?= $produit->annee ?></p>
                            <!-- Kilométrage du produit -->
                            <p class="km">Kilométrage : <?= $produit->km ?> km</p>
                            <!-- Prix du produit -->
                            <p class="prix">prix : <?= $produit->prix ?> €</p>
                            <div class="details-container">
                                <!-- Bouton pour voir les détails du produit -->
                                <a href="#" class="details btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $produit->id ?>">Voir les détails</a>
                                <!-- Modèle de fenêtre modale pour les détails du produit -->
                                <div class="modal fade" id="exampleModal<?= $produit->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Explorez notre garage - Réservez votre essai!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Contenu de la fenêtre modale -->
                                                <div id="error-message"></div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- Description du produit -->
                                                        <p class="descr"><?= substr($produit->description, 0.0); ?></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- Formulaire de contact pour les véhicules -->
                                                        <form method="POST">
                                                            <div class="mb-3">
                                                                <label for="nom" class="form-label">Nom</label>
                                                                <input type="text" class="form-control" id="nom">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="prenom" class="form-label">Prenom</label>
                                                                <input type="text" class="form-control" id="prenom">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="vehicules" class="form-label">Nom du véhicule</label>
                                                                <input type="text" class="form-control" id="vehicules" name="vehicules">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="message" class="form-label">Commentaire</label>
                                                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Soumettre</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>