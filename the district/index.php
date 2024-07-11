    <?php 
    require_once('header.php');
    
    $stmt = $conn->prepare("SELECT * FROM categorie WHERE active='Yes'");

    try {

    $stmt->execute();

    } catch (PDOException $e) {

        echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
    }   

        $result = $stmt->fetchAll();
    
        ?>
       
       <div class="parallaxe">
           <div class="fs-1  col-12 ms-md-5 red">Les Categories Favorites :</div>
           <div class="mid2 container my-5">
               <div class="row justify-content-center mt-3">
      
    
        <?php
            $i = 0;
                foreach($result as $category){
                    echo '<div class="col-12 col-sm-6 col-lg-4 mt-3"">
                  <a  href="Categorie.php">
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
      
             
      <div class="fs-1 ms-md-5 red">Nos plats star :</div>

      <?php 

    $stmt = $conn->prepare("SELECT p.id,p.id_categorie,c.id_plat,SUM(quantite) as quantite_vendue,SUM(quantite)*prix as rentabilite,p.libelle,p.description,p.prix,p.image FROM commande c LEFT JOIN plat p ON c.id_plat =p.id WHERE c.etat != 'Annulée'  GROUP BY c.id_plat ORDER BY rentabilite DESC;");

    try {

        $stmt->execute();

    } catch (PDOException $e) {

        echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
    }

    $result = $stmt->fetchAll();

    $i = 0;    
        foreach($result as $plat){
            echo '  <div class="col-12 col-sm-6 col-lg-4 mt-3"">
                   <a  href="/commande.php?platcom='.$plat['id'].'">
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
    ?>
    </div>
    </div>
      
      
      
      
      
    <?php require_once('footer.php') ?>
</div>
 
    <script src="assets/Js/redirection.js"></script>
</body>

</html>