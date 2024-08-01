
-- Base de données : `the_district`
--
DROP DATABASE IF EXISTS theDistrict;

CREATE DATABASE theDistrict;

USE theDistrict;

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int AUTO_INCREMENT PRIMARY KEY ,
  `libelle` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ;



--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `libelle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categorie` int NOT NULL REFERENCES categorie(id),
  `active` varchar(10) NOT NULL
) ;


--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
                            `id` int AUTO_INCREMENT PRIMARY KEY,
                            `id_plat` int NOT NULL REFERENCES plat(id),
                            `quantite` int NOT NULL,
                            `total` decimal(10,2) NOT NULL,
                            `date_commande` datetime NOT NULL,
                            `etat` varchar(50) NOT NULL,
                            `nom_client` varchar(150) NOT NULL,
                            `telephone_client` varchar(20) NOT NULL,
                            `email_client` varchar(150) NOT NULL,
                            `adresse_client` varchar(255) NOT NULL
) ;

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `nom_prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ;





-- Données pour la table catégorie
INSERT INTO categorie (id, libelle, image, active) VALUES
("4","Pizza","pizza_cat.jpg","Yes"),
("5","Burger","burger_cat.jpg","Yes"),
("9","Wraps","wrap_cat.jpg","Yes"),
("10","Pasta","pasta_cat.jpg","Yes"),
("11","Sandwich","sandwich_cat.jpg","Yes"),
("12","Asian Food","asian_food_cat.jpg","No"),
("13","Salade","salade_cat.jpg","Yes"),
("14","Veggie","veggie_cat.jpg","Yes");



-- Données pour la table plat
INSERT INTO plat (id,libelle,description,prix,image,id_categorie,active) VALUES
("4","District Burger","Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .","8.00","hamburger.jpg","5","Yes"),
("5","Pizza Bianca","Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.","14.00","pizza-salmon.png","4","Yes"),
("9","Buffalo Chicken Wrap","Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.","5.00","buffalo-chicken.webp","9","Yes"),
("10","Cheeseburger","Burger composé d’un bun’s du boulanger,de salade,oignons rouges, pickles,oignon confit,tomate,d’un steak d’origine Française,d’une tranche de cheddar affiné, et de notre sauce maison.","8.00","cheesburger.jpg","5","Yes"),
("12","Spaghetti aux légumes","Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide","10.00","spaghetti-legumes.jpg","10","Yes"),
("13","Salade César","Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.","7.00","cesar_salad.jpg","13","Yes"),
("14","Pizza Margherita","Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...","14.00","pizza-margherita.jpg","4","Yes"),
("15","Courgettes farcies au quinoa et duxelles de champignons","Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!","8.00","courgettes_farcies.jpg","14","Yes"),
("16","Lasagnes","Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.","12.00","lasagnes_viande.jpg","10","Yes"),
("17","Tagliatelles au saumon","Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!","12.00","tagliatelles_saumon.webp","10","Yes");





-- Données pour la table commande
INSERT INTO commande (id,id_plat,quantite,total,date_commande,etat,nom_client,telephone_client,email_client,adresse_client) VALUES
("2",4,"4","16.00","2020-11-30 03:52:43","Livrée","Kelly Dillard","7896547800","kelly@gmail.com","308 Post Avenue"),
("3",5,"2","20.00","2020-11-30 04:07:17","Livrée","Thomas Gilchrist","7410001450","thom@gmail.com","1277 Sunburst Drive"),
("4",5,"1","10.00","2021-05-04 01:35:34","Livrée","Martha Woods","78540001200","martha@gmail.com","478 Avenue Street"),
("6",9,"1","7.00","2021-07-20 06:10:37","Livrée","Charlie","7458965550","charlie@gmail.com","3140 Bartlett Avenue"),
("7",10,"2","8.00","2021-07-20 06:40:21","En cours de livraison","Claudia Hedley","7451114400","hedley@gmail.com","1119 Kinney Street"),
("8",14,"1","6.00","2021-07-20 06:40:57","En préparation","Vernon Vargas","7414744440","venno@gmail.com","1234 Hazelwood Avenue"),
("9",9,"4","20.00","2021-07-20 07:06:06","Annulée","Carlos Grayson","7401456980","carlos@gmail.com","2969 Hartland Avenue"),
("10",16,"4","12.00","2021-07-20 07:11:06","Livrée","Jonathan Caudill","7410256996","jonathan@gmail.com","1959 Limer Street");









