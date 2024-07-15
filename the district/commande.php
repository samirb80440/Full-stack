<?php 
// Inclusion du fichier header.php
require_once('header.php');
    
// Préparation de la requête SQL pour récupérer le plat sélectionné
$stmt = $conn->prepare('SELECT * FROM plat WHERE id = :id;');
$stmt->execute(array(':id' => $_GET['platcom']));
$plat = $stmt->fetch();
?>
<!-- Div contenant le formulaire de commande -->
<div id="insertbgimg" class="mt-5">
    <form id="form" action="commandescript.php" method="POST" class="container mt-3">
        <div class="row m-3">
            <!-- Div contenant les informations du plat -->
            <div id="insertcommande" class="d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <!-- Image du plat -->
                            <img src="assets/images_the_district/food/<?= $plat['image'] ?>" class="img-fluid rounded-start" alt="<?= $plat['name'] ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <!-- Titre et description du plat -->
                                <h5 class="card-title"><?= $plat['name'] ?></h5>
                                <p class="card-text color"><?= $plat['description'] ?></p>
                                <p class="card-text color"><small class="text-body-secondary"><?= $plat['prix']?> euros</small></p>
                                <!-- Sélection de la quantité -->
                                <div class="col-3" id="ChoixQuantité">
                                    <label for="quantite" class="labelt form-label">Quantité</label>
                                    <select class="form-select" id="quantite" name='quantite' aria-label="Default select example">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <!-- Champ caché pour stocker l'ID du plat -->
                                <input type="hidden" name="stock" value="<?= $plat['id'] ?>" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulaire de commande -->
            <div class=" mt-3 col-12 mb-3">
                <label for="Nom" class=" couleur col-3 form-label">Nom et Prénom*:</label>
                <input type="text" name="nomprenom" class="form-control" id="Nom" >
                <p class="texte">Ce champs est obligatoire</p>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <label for="Email" class=" couleur col-3 form-label">Email*:</label>
                <input type="text" name="email" class="form-control" id="Email">
                <p class="texte">Ce champs est obligatoire</p>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <label for="Tel" class=" couleur col-3 form-label">Téléphone*:</label>
                <input type="text" name="tel" class="form-control" id="Tel">
                <p class="texte">Ce champs est obligatoire</p>
            </div>
            <div class="col-12 mb-3">
                <label for="Adresse" class=" couleur col-3 form-label">Votre adresse*:</label>
                <textarea cols="500" rows="4" name="adresse" class="form-control" id="Adresse"></textarea>
                <p class="texte">Ce champs est obligatoire</p>
            </div>
            <!-- Bouton d'envoi du formulaire -->
            <div class="row justify-content-end mt-3">
                <button class="btn btn-primary rounded-pill col-md-2 col-3" type="submit" id="suivant">Envoyer</button>
            </div>
        </div>
    </form>
</div>
<?php 
// Inclusion du fichier footer.php
require_once('footer.php') ?>
  
<script src="assets/Js/commande1.js"></script>
</body>
</html>