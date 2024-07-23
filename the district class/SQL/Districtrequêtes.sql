use district;
SELECT date_commande,total,nom_client,p.*FROM commande c LEFT JOIN plat p ON c.id_plat = p.id ORDER BY date_commande ;
SELECT p.libelle,p.description,p.prix,p.image,c.libelle as nom_categorie,c.image as image_cat FROM plat p LEFT JOIN categorie c ON p.id_categorie =c.id ;
SELECT * FROM categorie c LEFT JOIN plat p ON c.id =p.id_categorie  ORDER BY c.libelle ;
SELECT c.id_plat,SUM(quantite) as quantite_vendue,p.libelle,p.description,p.prix FROM commande c LEFT JOIN plat p ON c.id_plat=p.id WHERE c.etat !='Annulée' GROUP BY c.id_plat ORDER BY quantite_vendue DESC;
SELECT c.id_plat,SUM(quantite) as quanite_vendue,SUM(quantite)*prix as rentabilite,p.libelle,p.description,p.prix FROM commande c LEFT JOIN plat p ON c.id_plat= p.id WHERE c.etat !='Annulée' GROUP BY c.id_plat ORDER BY rentabilite DESC;
SELECT c.nom_client,c.id_plat,SUM(c.quantite) as quantite_vendue,SUM(c.quantite)*prix as rentabilite,p.libelle,p.description,p.prix FROM commande c LEFT JOIN plat p on c.id_plat=p.id WHERE c.etat !='Annulée' GROUP BY c.nom_client ORDER BY rentabilite DESC; 
DELETE  FROM plat WHERE active !='Yes';
DELETE FROM commande WHERE etat='Livrée';
INSERT TO categorie(libelle,image,active) values ('Indien',indien.jpg,YES);
INSERT TO plat (libelle,description,prix,image,id_categorie,active) values('Poulet au beure','Delicieux poulet au Beurre inspire d\'une recette Tout droit venu d\'inde',11,butter_chicken.png,1,Yes);
UPDATE  plat SET  prix =prix*1.1 WHERE id_categorie ='Pizza';

DELETE FROM commande WHERE nom_client='bedrouni samir';





















