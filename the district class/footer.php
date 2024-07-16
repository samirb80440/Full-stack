<!-- Pied de page -->
<footer>
    <!-- Navigation du pied de page -->
    <nav id="navbot" class="navbar navbar-expand bg-danger navbar-dark mt-3 col-12  justify-content-center rounded-pill rounded-xs-none container">
        <!-- Contenu de la navigation -->
        <div class="collapse navbar-collapse justify-content-center row" id="collapsibleNavbar2">
            <!-- Liste des éléments de navigation -->
            <ul class="navbar-nav col-12 justify-content-center mx-xl-2">
                <!-- Élément de navigation : Accueil -->
                <li class="nav-item">
                    <a class="nav-link active" href="#" title="Accueil">
                        <!-- Image de l'icône Facebook -->
                        <img src="assets/images_the_district/icons8-facebook-50.png" class="img-fluid align-text-top" alt="navinsta">
                    </a>
                </li>
                <!-- Élément de navigation : Catégorie -->
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Categorie">
                        <!-- Image de l'icône Pinterest -->
                        <img src="assets/images_the_district/icons8-pinterest-50.png" class="img-fluid d-inline-block align-text-top" alt="navfb">
                    </a>
                </li>
                <!-- Élément de navigation : Plat -->
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Plat">
                        <!-- Image de l'icône Snapchat -->
                        <img src="assets/images_the_district/icons8-snapchat-circled-logo-50.png" class="img-fluid d-inline-block align-text-top" alt="navtt">
                    </a>
                </li>
                <!-- Élément de navigation : Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="#" title="contact">
                        <!-- Image de l'icône Twitter -->
                        <img src="assets/images_the_district/icons8-twitter-50.png" class="img-fluid d-inline-block align-text-top" alt="navx">
                    </a>
                </li>
                <!-- Élément de navigation : Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="#" title="contact">
                        <!-- Image de l'icône Instagram -->
                        <img src="assets/images_the_district/icons8-instagram-50.png" class="img-fluid d-inline-block align-text-top" alt="navyt">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</footer>

<!-- Inclusion de feuille de style CSS en fonction de la page actuelle -->
<?php
if ($_SERVER['REQUEST_URI'] == "/commande.php?platcom=". $_GET['platcom']) {
    echo '<link rel="stylesheet" href="assets/css/commande.css">';
} elseif ($_SERVER['REQUEST_URI'] == "/Plat.php?numcat=". $_GET['numcat']) {
    echo '<link rel="stylesheet" href="assets/css/Plat.css">';
}
?>

<!-- Inclusion des bibliothèques JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>