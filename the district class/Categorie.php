<?php 
require_once('header.php');
require('class/DAO.php');
 $p = new requete();
 $p->setConnection($servername,$dbname,$username,$password);
 $p->setSelectall('categorie');
 $result = $p->getSelectall('all');
unset($p);
?>

<?php

// Initialisation d'un compteur pour les catégories
$i = 1;
foreach($result as $category){
    // Affichage d'un titre pour les catégories
    if($i==1){
        echo '<div id="page1">
        <div class="container"> 
                <div class="fs-1 texte ms-md-4 red">Toute les catégories :</div><br>
                  <div class="row justify-content-between mt-3">';
    } elseif($i==7) {
        echo '<div id="page2">
        <div class="container"> 
                <div class="fs-1 texte ms-md-4 red ">Toute les catégories :</div><br>
                  <div class="row justify-content-between mt-3">';
    };
    
    // Affichage d'une carte pour chaque catégorie
    echo '<div class="card col-12 col-sm-6 col-md-4 mt-3 mx-auto">
                    <a  href="/Plat.php?numcat='.$category['id'].'">
                    <img src="assets/images_the_district/category/'.$category['image'].'" class="imageanime imagecat img-fluid" alt="'.$category['libelle'].'food">
                    <div class="card-body">
                    </div>
                  </a>
                  </div>';
    
    // Fermeture du conteneur de page si 6 ou 7 catégories sont affichées
    if($i == 6 or $i ==7 ){
        echo ' </div>
                </div>
              </div>';}
    $i++;
};
?>

<!-- Div contenant les boutons de pagination -->
<div id="boutonarmy" class="container">
    <div class="row justify-content-between mt-3">
        <button class="btn btn-succes color-B09595 rounded-pill col-3" type="button"
            id="precedent">précédent</button>
        <button class="btn btn-succes color-B09595 rounded-pill col-3" type="button" id="suivant"> suivant</button>
    </div>
</div>

<?php 
// Inclusion du fichier footer.php
require_once('footer.php'); ?>
   
<script src="assets/Js/redirection.js"></script>
<script src="assets/Js/carouselcategorie.js"></script>
</body>

</html>