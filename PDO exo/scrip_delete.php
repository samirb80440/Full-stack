<?php 
require_once('header.php');


if($_POST['SUPP'] == 'supprimer'){
    $stmt = $conn->prepare('DELETE 
    FROM disc
    WHERE disc_id = :id');
    $stmt->bindValue(':id', $_POST['delete']);
    $stmt->execute();
    header('Location:index.php');
} else {
    header('Location:index.php');
}

?>

</body>
</html>