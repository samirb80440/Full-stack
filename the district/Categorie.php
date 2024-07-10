<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Catégorie.css">
    <link rel="shortcut icon" type="image/png" href="assets/images_the_district/the_district_brand/favicon.png">
    <title>District</title>
</head>
<body>
<?php 
    require_once('header.php')
    ?>
    <div id="page1">
        <div class="container">
            <div class="h1">toute les catégories :</div>
            <div class="row justify-content-between">
                <img class="imagecat imageanime img-fluid col-3 mt-3" src="assets/images_the_district/category/asian_food_cat.jpg"
                    alt="catasian" onclick="redirection(1)">
                <img class="imagecat  imageanime img-fluid col-3 mt-3" src="assets/images_the_district/category/burger_cat.jpg"
                    alt="catburger" onclick="redirection(2)">
                <img class="imagecat  imageanime img-fluid col-3 mt-3" src="assets/images_the_district/category/sandwich_cat.jpg"
                    alt="catsandwich" onclick="redirection(6)">
            </div>
            <div class="row justify-content-between">
                <img class="imagecat imageanime img-fluid col-3 mt-3" src="assets/images_the_district/category/pasta_cat.jpg"
                    alt="catpasta" onclick="redirection(3)">
                <img class="imagecat imageanime img-fluid col-3 mt-3" src="assets/images_the_district/category/pizza_cat.jpg"
                    alt="catpizza" onclick="redirection(4)">
                <img class="imagecat imageanime img-fluid col-3 mt-3" src="assets/images_the_district/category/salade_cat.jpg"
                    alt="catsalade" onclick="redirection(5)">
            </div>
        </div>
    </div>
    <div id="page2">
        <div class="container">
            <div class="h1">toute les catégories :</div>
            <div class="row justify-content-around mt-3">
                <img class="imagecat  imageanime img-fluid col-3" src="assets/images_the_district/category/veggie_cat.jpg"
                    alt="catveggie" onclick="redirection(7)">
                <img class="imagecat imageanime img-fluid col-3" src="assets/images_the_district/category/wrap_cat.jpg"
                    alt="catwrap" onclick="redirection(8)">
            </div>
        </div>
    </div>
    <div id="boutonarmy" class="container">
        <div class="row justify-content-between mt-3">
            <button class="btn btn-succes color-B09595 rounded-pill col-3" type="button"
                id="precedent">précédent</button>
            <button class="btn btn-succes color-B09595 rounded-pill col-3" type="button" id="suivant"> suivant</button>
        </div>
    </div>
    <?php require_once('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/Js/redirection.js"></script>
    <script src="assets/Js/carouselcategorie.js"></script>
</body>

</html>