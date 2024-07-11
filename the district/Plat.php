<?php 
    require_once('header.php')
    ?>
   
   <div id="Titre" class="container">
            <div class="fs-1 ms-md-4">Tout Les Plats :</div>
        </div>
        <div id="checkplathtml" class="row justify-content-center">
        <?php
          if(isset($_GET['numcat'])){
            $stmt = $conn->prepare("SELECT plat.libelle AS platnom, plat.image, plat.description, categorie.libelle AS catnom ,plat.id ,id_categorie
                              FROM plat LEFT JOIN categorie on plat.id_categorie = categorie.id
                                                   WHERE id_categorie = :id
                                                          ORDER BY categorie.libelle DESC");
            $stmt->bindParam(':id' , $_GET['numcat']);
          } else {
                  $stmt = $conn->prepare("SELECT plat.libelle AS platnom, plat.image, plat.description, categorie.libelle AS catnom ,plat.id
                              FROM plat LEFT JOIN categorie on plat.id_categorie = categorie.id
                                                          ORDER BY categorie.libelle DESC");
          }
        try {

        $stmt->execute();

    } catch (PDOException $e) {

        echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
    }

        $result = $stmt->fetchAll();

        $stock == 'null';
                $i = 1;
                $nbpage = 1;
                echo '<form action="commande.php" method="get">';
                    foreach($result as $plat){

                    if ($i==1 || $i==5 || $i==9) {
                        echo '<div id="page'.$nbpage.'" class="container">';
                        $nbpage++;
                    } 

                    if($i % 2 != 0) {echo '<div class="row justify-content-center">';}
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
                    if($i % 2 == 0){echo '</div>';}
                  
                    if ($i==4 || $i==8 || $i==11) {
                            echo '</div>';}
                    $i++;
                    };
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