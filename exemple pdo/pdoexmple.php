<?php
    try 
    {        
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }       

   // ... code de connexion à la base ...
$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();



?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <?php foreach ($tableau as $artist):?>
        <div>
            <?= $artist->artist_name ?>
        </div>
    <?php endforeach;?>
</body>
</html>

















?>
</body>
</html>