<?php 
require_once('header.php');
require('class/DAO.php');
?>
<div id="Titre" class="container">
    <div class="fs-1 ms-md-4 titre">Tout Les Plats :</div>
<!-- Div contenant le titre "Tout Les Plats :" -->
</div>
<!-- Div contenant les plats -->
<div id="checkplathtml" class="row justify-content-center">
    <?php
    // Vérification si le paramètre numcat est défini dans l'URL
    $p = new requete();
    $p->setConnection($servername,$dbname,$username,$password);
    
              if(isset($_GET['numcat'])){
    
                $stocknum = intval($_GET['numcat']); 
                $p->setSelectcondition('plat',$stocknum);
              
              } else {
                $p->setSelectcondition('plat','toutlesplat');
                                                              }
    
    $result = $p->getSelectall('all');
    unset($p);
    
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