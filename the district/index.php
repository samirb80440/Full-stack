<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="shortcut icon" type="image/png" href="images_the_district/the_district_brand/favicon.png">
    <title>District</title>
</head>
<body>
    <?php 
    require_once('header.php')
    ?>
    <div id="parent">
        <div id="banniere" class="row g-0">
            <video id="video" class="col-12" src="assets/videos/123629-728697948_small.mp4"
                style="width: 100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
        <div id="recherche" class="d-none d-sm-flex">
            <form class="col-12" role="search">
                <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
            </form>
        </div>
    </div>
    <div class="parallaxe">
    <div class="container">
        <div class="row g-0 mt-xl-3">
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/salade.html">
                    <img class="imageanime imagecat img-fluid" src="assets/images_the_district/food/cesar_salad.jpg" alt="salad"></a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/hamburger.html">
                    <img class="imageanime imagecat img-fluid" src="assets/images_the_district/food/cheesburger.jpg" alt="burger"></a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/pizza.html">
                    <img class="imageanime imagecat img-fluid" src="assets/images_the_district/menu-pizza.jpg" alt="pizza"></a>
            </div>
        </div>
        <div class="row g-0 mt-xl-3">
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/veggie.html">
                    <img class="imageanime imagecat img-fluid" src="assets/images_the_district/food/courgettes_farcies.jpg" alt="courgettes"></a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/sandwich.html">
                    <img class="imageanime imagecat img-fluid" src="assets/images_the_district/category/sandwich_cat.jpg" alt="sandwich"></a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/wrap.html">
                    <img class="imageanime imagecat img-fluid" src="assets/images_the_district/food/Food-Name-3461.jpg" alt="wrap"></a>
            </div>
        </div>
        <div class="row g-0 mt-xl-3">
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/hamburger.html">
                    <img class="imageanime imageplat img-fluid" src="assets/images_the_district/food/Food-Name-6340.jpg" alt="burger"></a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <a href="/categorie/veggie.html">
                    <img class="imageanime imageplat img-fluid" src="assets/images_the_district/food/spaghetti-legumes.jpg" alt="spagetti"></a>
            </div>
            <div class="col-12 col-lg-4 mt-3">
                <a href="/categorie/pasta.html">
                    <img class="imageanime imageplat img-fluid" src="assets/images_the_district/food/lasagnes_viande.jpg" alt="lasagnes"> </a>
            </div>
        </div>
    </div>
</div>
    <?php require_once('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/Js/redirection.js"></script>
</body>

</html>