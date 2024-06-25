<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_POST["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <form method=POST><input type=text  name=disc_id ></form>
    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_title ?>
    Disc year <?= $disc->disc_year ?>
</body>
</html>