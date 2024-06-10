<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags pour définir l'encodage et l'échelle initiale -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=he, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- En-tête de la page -->
    <header>
        <!-- Barre de navigation Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Marque de la barre de navigation -->
                <a class="navbar-brand" style="font-weight: bold" href="HomeController.php">vparrot</a>
                <!-- Bouton de bascule pour les appareils mobiles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Contenu de la barre de navigation -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Liste des liens de navigation -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <!-- Lien pour ajouter -->
                            <a class="nav-link active" aria-current="page" href="AddController.php">Ajouters</a>
                        </li>
                        <li class="nav-item">
                            <!-- Lien pour supprimer -->
                            <a class="nav-link" href="DeleteController.php">Supprimers</a>
                        </li>
                        <li class="nav-item">
                            <!-- Lien vers la page de messages -->
                            <a class="nav-link" aria-current="page" href="../admin/">Messages</a>
                        </li>
                    </ul>
                    <!-- Bouton de déconnexion -->
                    <a class="btn btn-dark btn-sm flex-grow-0" href=" DestroyController.php">Se deconnecter</a>

                </div>
            </div>
        </nav>
    </header>
</body>

</html>