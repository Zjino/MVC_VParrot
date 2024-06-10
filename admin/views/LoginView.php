<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Métadonnées pour la configuration de la page -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>Login - vperrot</title>
    <!-- Liens vers les feuilles de style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>Login.css">
</head>

<body>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- Image du logo -->
                    <img src="../assets/images/logo-dark.png" alt="Logo" class="img-fluid mb-4 mx-auto d-block" style="max-width: 300px;">
                    <!-- Texte "Connexion" -->
                    <div class="connexion-text">Connexion</div>
                    <!-- Formulaire de connexion -->
                    <div class="login-form">
                        <!-- Formulaire HTML -->
                        <form method="post">
                            <div class="mb-3">
                                <!-- Champ d'entrée pour l'e-mail -->
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <!-- Champ d'entrée pour le mot de passe -->
                                <label for="motdepasse" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="motdepasse">
                            </div>
                            <!-- Bouton de soumission du formulaire -->
                            <input type="submit" class="btn btn-dark" name="envoyer" value="Se connecter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>