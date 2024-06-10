<!DOCTYPE html>
<html>

<head>

    <!-- Inclusion du CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Inclusion du JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Tous les produits</title>
    <!-- Inclusion du CSS de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Inclusion du CSS spécifique à cette page -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>HomeStyle.css">
</head>

<body>
    <!-- En-tête -->
    <section>
        <?php include 'HeaderView.php' ?>
        <div class="album py-5  mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="table-responsive">
                            <!-- Tableau des produits -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!-- En-têtes des colonnes -->
                                        <th scope="col">id</th>
                                        <th scope="col">image</th>
                                        <th scope="col">nom</th>
                                        <th scope="col">annee</th>
                                        <th scope="col">km</th>
                                        <th scope="col">prix</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Editer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Affichage des données des produits -->
                                    <?php foreach ($produits as $produit) : ?>
                                        <tr>
                                            <th scope="row"><?= $produit->id ?></th>
                                            <!-- Image du produit -->
                                            <td>
                                                <img src="<?= $produit->image ?>" class="img-fluid rounded large-screen-image" alt="<?= $produit->nom ?>">
                                            </td>
                                            <!-- Nom du produit -->
                                            <td><?= $produit->nom ?></td>
                                            <!-- Année du produit -->
                                            <td><?= $produit->annee ?></td>
                                            <!-- Kilométrage du produit -->
                                            <td><?= $produit->km ?></td>
                                            <!-- Prix du produit -->
                                            <td style="font-weight: bold; color: green;"><?= $produit->prix ?>€</td>
                                            <!-- Description du produit -->
                                            <td><?= substr($produit->description, 0, 100); ?>...</td>
                                            <!-- Bouton pour éditer le produit -->
                                            <td class="edit-cell"><a href="EditController.php?id=<?= $produit->id ?>"><i class="fa fa-pencil-square bg-light " style="font-size: 25px;color:black ;"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </style>
    </section>

</body>

</html>