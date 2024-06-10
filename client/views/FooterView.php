<footer class="footer-section bg-dark pb-2 pt-5">
    <div class="container">
        <div class="row gy-3">
            <!-- Logo -->
            <div class="col-md-3 text-center">
                <img class="img-fluid" src="client/assets/images/logo-dark.png" alt="vpperrot_footer">
            </div>
            <!-- Horaires d'ouverture -->
            <div class="opening-hours col-md-3 text-center bg-dark">
                <h3 class="text-white">Horaires d'ouverture</h3>
                <ul class="text-white" style="list-style-type:none;">
                    <!-- Horaires à afficher dynamiquement -->
                    <?php
                    // // Lecture des horaires d'ouverture à partir du fichier opening_hours.txt
                    // $schedule_content = file_get_contents("schedule.txt");
                    // // Convertir le contenu en tableau associatif
                    // $schedule = json_decode($schedule_content, true);
                    ?>
                    <!-- <li>Lundi: <span id="monday"><?php echo $schedule['monday']; ?></span></li>
                    <li>Mardi à Vendredi: <span id="tueToFri"><?php echo $schedule['tueToFri']; ?></span></li>
                    <li>Samedi: <span id="saturday"><?php echo $schedule['saturday']; ?></span></li> -->
                </ul>
            </div>
            <!-- Informations -->
            <div class="col-md-3 text-center">
                <h3 class="text-white">Informations</h3>
                <p class="mb-1"><a class="text-decoration-none small text-white" href="#">Mentions légales</a></p>
                <p class="mb-1"><a class="text-decoration-none small text-white" href="#">Conditions de ventes</a></p>
            </div>
            <!-- Réseaux sociaux -->
            <div class="col-md-3 text-center">
                <h3 class="text-white">Nous suivre</h3>
                <p class="fs-1 text-center">
                    <a class="text-secondary" href="#"><i class="bi bi-instagram"></i></a>
                    <a class="text-secondary" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="text-secondary" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="text-secondary" href="#"><i class="bi bi-youtube"></i></a>
                </p>
            </div>
        </div>
        <hr class="border border-secondary">
        <!-- Texte de droits d'auteur -->
        <p class="text-center small text-secondary">&copy; 2024 - <a href="https://www.seb-code.fr" class="text-white text-decoration-none">Zjino Code</a> - Tous les droits réservés</p>
    </div>
</footer>