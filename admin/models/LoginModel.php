<?php

/**
 * Fonction pour récupérer les informations d'un administrateur à partir de son email et de son mot de passe.
 *
 * @param string $email L'adresse e-mail de l'administrateur.
 * @param string $password Le mot de passe de l'administrateur.
 * @return mixed Retourne les informations de l'administrateur si trouvé, sinon retourne false.
 */
function getAdmin($email, $password)
{
    // Inclusion du fichier de connexion à la base de données
    if (require("../../services/ServiceConnexion.php")) {

        // Préparation de la requête SQL pour récupérer l'administrateur correspondant à l'email et au mot de passe fournis
        $req = $access->prepare("SELECT * FROM admin WHERE email = ? AND motdepass = ?");

        // Exécution de la requête SQL avec les valeurs passées en paramètre
        $req->execute(array($email, $password));

        // Vérification du nombre de lignes retournées par la requête
        if ($req->rowCount() == 1) {
            // Récupération des données de l'administrateur
            $data = $req->fetch();
            return $data; // Retourne les informations de l'administrateur
        } else {
            return false; // Aucun administrateur trouvé, retourne false
        }

        // Fermeture du curseur
        $req->closeCursor();
    }
}
