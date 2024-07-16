<?php 
require_once('header.php');
require('class/DAO.php');
// Créez une nouvelle instance de la classe requete
$p = new requete();

// Définissez les paramètres de connexion
$p->setConnection($servername, $dbname, $username, $password);

// Définissez la requête SELECT ALL pour les catégories
$p->setSelectall('categorie');

// Exécutez la requête et stockez le résultat
$req = $p->getSelectall('all');

// Détruisez l'objet $p pour libérer la mémoire
unset($p);
?>

<!-- Div contenant les catégories favorites -->
<div class="parallaxe">
    <div class="fs-1  col-12 ms-md-5 red">Les Catégories Favorites :</div>
    <div class="mid2 container my-5">
        <div class="row justify-content-center mt-3">
            
            <?php
            // Boucle pour afficher les 6 premières catégories
            $i = 0;
            foreach($req as $category){
                echo '<div class="col-12 col-sm-6 col-lg-4 mt-3">
                      <a href="Categorie.php">
                            <img src="assets/images_the_district/category/'.$category['image'].'" class="imageanime imagecat img-fluid" alt="'.$category['libelle'].'">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>';
                $i++;
                if($i == 6){   
                    break;
                };
            };
          ?>
            
            <!-- Div contenant les plats star -->
            <div class="fs-1 ms-md-5 red">Nos plats star :</div>

            <?php 
            // Détruisez l'objet $req pour libérer la mémoire
            unset($req);

            // Créez une nouvelle instance de la classe requete
            $pd = new requete();

            // Définissez les paramètres de connexion
            $pd->setConnection($servername, $dbname, $username, $password);

            // Définissez la requête SELECT conditionnelle pour les plats
            $pd->setSelectcondition('plat', 'plusvendue');

            // Exécutez la requête et stockez le résultat
            $req = $pd->getSelectall('all');

            // Détruisez l'objet $pd pour libérer la mémoire
            unset($pd);

            // Boucle pour afficher les 3 premiers plats
            $i = 0;    
            foreach($req as $plat){
                echo '<div class="col-12 col-sm-6 col-lg-4 mt-3">
                       <a href="/commande.php?platcom='.$plat['id'].'">
                                <img src="assets/images_the_district/food/'.$plat["image"].'" class="imageanime imageplat img-fluid" alt="'.$plat["libelle"].'">
                                <div class="card-body">
                                </div>
                            </a>
                        </div>';
                $i++;
                if($i == 3){  
                    break;
                };
            };

            // Détruisez l'objet $req pour libérer la mémoire
            unset($req);
          ?>
        </div>
    </div>
    
    <?php 
    // Incluez le fichier footer.php
    require_once('footer.php');?>
 
</div>
<script src="assets/Js/redirection.js"></script>
</body>
</html>