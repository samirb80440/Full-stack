<?php
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "record";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

//ou, si vous utilisez une fonction, n'oubliez pas le `return`:

function connect_database(){

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configurer le mode d'erreur PDO pour générer des exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connecté avec succès à la base de données";

        return $conn;

    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }

    }

?>  
