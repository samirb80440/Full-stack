<?php 
// Inclusion du fichier header.php
require_once('header.php')
?>
   
<!-- Div contenant le titre "Tout Les Plats :" -->
<div id="Titre" class="container">
    <div class="fs-1 ms-md-4">Tout Les Plats :</div>
</div>
<!-- Div contenant les plats -->
<div id="checkplathtml" class="row justify-content-center">
    <?php
    // Vérification si le paramètre numcat est défini dans l'URL
    if(isset($_GET['numcat'])){
        // Préparation de la requête SQL pour récupérer les plats d'une catégorie spécifique
        $stmt = $conn->prepare("SELECT plat.libelle AS platnom, plat.image, plat.description, categorie.libelle AS catnom ,plat.id ,id_categorie
                              FROM plat LEFT JOIN categorie on plat.id_categorie = categorie.id
                                                   WHERE id_categorie = :id
                                                          ORDER BY categorie.libelle DESC");
        // Liaison du paramètre :id avec la valeur de $_GET['numcat']
        $stmt->bindParam(':id' , $_GET['numcat']);
    } else {
        // Préparation de la requête SQL pour récupérer tous les plats
        $stmt = $conn->prepare("SELECT plat.libelle AS platnom, plat.image, plat.description, categorie.libelle AS catnom ,plat.id
                              FROM plat LEFT JOIN categorie on plat.id_categorie = categorie.id
                                                          ORDER BY categorie.libelle DESC");
    }
    
    try {
        // Exécution de la requête SQL
        $stmt->execute();
    } catch (PDOException $e) {
        // Affichage d'un message d'erreur si la requête échoue
        echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
    }
    
    // Récupération des résultats de la requête
    $result = $stmt->fetchAll();
    
    // Initialisation des variables $stock et $i
    $stock == 'null';
    $i = 1;
    $nbpage = 1;
    
    // Début du formulaire pour commander un plat
    echo '<form action="commande.php" method="get">';
    
    // Boucle pour afficher chaque plat
    foreach($result as $plat){
        // Affichage d'un titre de page tous les 4 plats
        if ($i==1 || $i==5 || $i==9) {
            echo '<div id="page'.$nbpage.'" class="container">';
            $nbpage++;
        } 
        
        // Affichage d'une ligne pour les plats impairs
        if($i % 2 != 0) {echo '<div class="row justify-content-center">';}
        
        // Affichage d'une carte pour chaque plat
        echo '<div class=" card col-4 flex-row mt-3 mx-md-5 " style="width: 35rem;">
                <img src="assets/images_the_district/food/'.$plat['image'].'" class="rounded-3 img-fluid m-auto" alt="'.$plat['platnom'].'food" style="width: 10rem; height: fit-content;">
              <div class="card-body">
                <h5 class="card-title mt-md-4">'.$plat['platnom'].'</h5>
                <p class="card-text texte">"'.$plat['description'].'"</p>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-light" name="platcom" value="'.$plat['id'].'">Commander</button>
                </div>
              </div>
              </div>';
        
        // Fermeture de la ligne pour les plats impairs
        if($i % 2 == 0){echo '</div>';}
        
        // Fermeture du conteneur de page tous les 4 plats
        if ($i==4 || $i==8 || $i==11) {
            echo '</div>';}
        $i++;
    };
    
    // Fin du formulaire
    echo '</form>';
    ?>
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
    <script src="assets/Js/carouselplat1.js"></script>  
</body>
</html>