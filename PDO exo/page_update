<?php
require_once('header.php')
?>


<?php
                $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
                
                $stmt->execute(array($_GET['modif']));
               
                $result = $stmt->fetch();

                ?>

    <div class='container'>
     
        <form action='script_update.php' method='POST' enctype="multipart/form-data" class='row justify-content-center'>
    
            <label class='mt-2' for='title'>Titre :</label><br><input type='text' class='mt-2' id='title' name='ajouttitle' value='<?php echo $result['disc_title']; ?>' required><br>
            <label class='mt-2' for='artiste'>Artiste :</label><br><input type='text' class='mt-2' id='artiste' name='ajoutartist' value='<?php echo $result['artist_name']; ?>' required><br>
            <label class='mt-2' for='year'>Année :</label><br><input type='text' class='mt-2' id='year' name='ajoutyear' value='<?php echo $result['disc_year']; ?>' required><br>
            <label class='mt-2' for='genre'>Genre :</label><br><input type='text' class='mt-2' id='genre' name='ajoutgenre' value='<?php echo $result['disc_genre']; ?>' required><br>
            <label class='mt-2' for='label'>label :</label><br><input type='text' class='mt-2' id='label' name='ajoutlabel' value='<?php echo $result['disc_label']; ?>' required><br>
            <label class='mt-2' for='price'>Prix :</label><br><input type='text' class='mt-2' id='price' name='ajoutprix' value='<?php echo $result['disc_price']; ?>' required><br>

            <label class='mt-2' for='jaquette'>Jaquette d'album :</label><br><input type='file' class='mt-2' id='jaquette' name='ajoutimage'><br>
            <img src='../../pictures/<?php echo $result['disc_picture']; ?>' alt='<?php echo $result['disc_title']; ?>' style="max-width: 540px" class='mt-2 img-fluid'><br>

            <button type='submit' name='modif' value='<?php echo $_GET['modif']; ?>' class='btn btn-primary mt-2'>Ajouter</button>
        </form>
    </div>


</body>
</html>
</body>
</html>