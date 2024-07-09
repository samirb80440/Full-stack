<?php

function insert_plat($nv_plat,$checkimage){

if($checkimage ==1){
    $stock = 'plat';
    stock_image($nv_plat['image'],$stock);
}

$stmt= $conn->prepare("INSERT INTO plat(libelle,description,prix,image,id_categorie,active)VALUES(:libelle,:description,:prix,:image,:id_categorie,:active;");


$stmt->bindParam(':libelle',$nv_plat['libelle']);
$stmt->bindParam(':descrition',$nv_plat['descrition']);
$stmt->bindParam(':prix',$nv_plat['prix']);
$stmt->bindParam(':image',$nv_plat['image']);
$stmt->bindParam(':id_categorie',$nv_plat['id_categorie']);
$stmt->bindParam(':libelle',$nv_plat['libelle']);




}















































?>