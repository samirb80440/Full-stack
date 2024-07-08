<header id="navbar">
        <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
            <a class="navbar-brand" href="#"><img src="assets/images_the_district/the_district_brand/logo_transparent.png"
                    width="50" class="d-inline-block align-text-top" alt="navicon"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center col-6" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="textnav nav-item px-5">
                        <a  <?php if($_SERVER['REQUEST_URI'] =="/index.php")echo ' class="textnav nav-link active"';else echo ' class="textnav nav-link"'?> href="index.php" title="Accueil">Accueil</a>
                    </li>
                    <li class="textnav nav-item px-5">
                        <a <?php if($_SERVER['REQUEST_URI'] =="/Categorie.php")echo ' class="textnav nav-link active"';else echo ' class="textnav nav-link"'?> href="Categorie.php" title="Categorie">Categorie</a>
                    </li>
                    <li class="textnav nav-item px-5">
                        <a <?php if($_SERVER['REQUEST_URI'] == "/Plat.php")echo ' class="textnav nav-link active"';else echo ' class="textnav nav-link"'?> href="Plat.php" title="Plat">Plat</a>
                    </li>
                    <li class="textnav nav-item px-5">
                        <a <?php if($_SERVER['REQUEST_URI'] == "/contact.php")echo ' class="textnav nav-link active"';else echo ' class="textnav nav-link"'?> href="contact.php" title="Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>