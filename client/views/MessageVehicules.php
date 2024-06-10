<form method="POST">
    <!-- Champ pour le nom -->
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom">
    </div>
    <!-- Champ pour le prénom -->
    <div class="mb-3">
        <label for="first_name" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="prenom">
    </div>
    <!-- Champ pour l'email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <!-- Champ pour le nom du véhicule -->
    <div class="mb-3">
        <label for="productName" class="form-label">Nom du véhicule</label>
        <input type="text" class="form-control" id="vehicules" name="vehicules">
    </div>
    <!-- Champ pour le commentaire -->
    <div class="mb-3">
        <label for="comment" class="form-label">Commentaire</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <!-- Bouton de soumission -->
    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>