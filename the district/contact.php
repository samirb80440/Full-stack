<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="shortcut icon" type="image/png" href="assets/images_the_district/the_district_brand/favicon.png">
    <title>District</title>
</head>

<body>
<?php 
    require_once('header.php')
    ?>
    <div class="container-fluid p-0">
        <div id="parent">
            <div id="banniere" class="row g-0">
                <img class="imagebanniere img-fluid" src="assets/images_the_district/fosyyyy.jpg" alt="banniere">
            </div>
        </div>
    </div>
    <div id="insertbgimg">
        <div id="insertcommande"></div>
        <form id="form" action="contactscript.php" method="post">
            <div class="container mt-3">
                <div class="row mb-3">
                    <div class="col-6 mb-3">
                        <label for="Nom" class="col-3 couleur form-label">Nom*:</label>
                        <input type="text" name="nom" class="form-control" id="Nom">
                        <p>Ce champs est obligatore</p>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="Nom" class="col-3 couleur form-label">Prenom*:</label>
                        <input type="text" name="nom" class="form-control" id="Prenom">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="Email" class="col-3  couleur form-label">Email*:</label>
                        <input type="email" name="Email" class="form-control" id="Email">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="tel" class="col-3 couleur form-label">Téléphone*:</label>
                        <input type="text" name="tel" class="form-control" id="Tel">
                        <p>Ce champs est obligatore</p>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="demande" class="col-3 couleur form-label">Votre Demande*:</label>
                        <textarea cols="500" rows="4" name="demande" class="form-control" id="Demande"></textarea>
                    </div>
                    <div class="container">
                        <div class="container">
                            <div class="row justify-content-end mt-3">
                                <button class="btn btn-primary  rounded-pill col-3" type="submit"
                                    id="suivant">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require_once('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/Js/contact.js"></script>
</body>

</html>