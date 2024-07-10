    <?php 
    require_once('header.php');
    
    $stmt = $conn->prepare("SELECT * FROM categorie");

    try {

    $stmt->execute();

    } catch (PDOException $e) {

        echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
    }   

        $result = $stmt->fetchAll();
    
        ?>
       
       <div class="parallaxe">
       <div class="fs-1 col-12 ms-md-5 red">Les Categories Favorites :</div>
       <div class="mid2 container my-5">
    <div class="row justify-content-center mt-3">
      
    
        <?php
            $i = 0;
                foreach($result as $category){
                    echo '<div class="col-12 col-sm-6 col-lg-4 mt-3"">
                    <a class= href="/Categorie.php">
                        <img src="assets/images_the_district/category/'.$category['image'].'" class="imageanime imagecat img-fluid" alt="'.$category['libelle'].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$category['libelle'].'</h5>
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

    $stmt = $conn->prepare("SELECT p.id_categorie,c.id_plat,SUM(quantite) as quantite_vendue,SUM(quantite)*prix as rentabilite,p.libelle,p.description,p.prix,p.image FROM commande c LEFT JOIN plat p ON c.id_plat =p.id WHERE c.etat != 'Annulée'  GROUP BY c.id_plat ORDER BY rentabilite DESC;");

    try {

        $stmt->execute();

    } catch (PDOException $e) {

        echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
    }

    $result = $stmt->fetchAll();

    $i = 0;    
        foreach($result as $plat){
            $stmt= $conn->prepare("SELECT libelle FROM categorie WHERE id = :id");
            $stmt->bindParam(':id',$plat['id_categorie']);
            $stmt->execute();
            $stockcat = $stmt->fetch();
            echo '  <div class="col-12 col-sm-6 col-lg-4 mt-3"">
                    <a class= href="/Categorie.php">
                        <a class= href="#'.$stockcat['libelle'].'.html">
                            <img src="assets/images_the_district/food/'.$plat["image"].'" class="imageanime imageplat img-fluid" alt="'.$plat["libelle"].'">
                            <div class="card-body">
                                <h5 class="card-title">'.$plat["libelle"].'</h5>
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
      
      
      
      
      
</div>
    <?php require_once('footer.php') ?>
 
    <script src="assets/Js/redirection.js"></script>
</body>

</html>