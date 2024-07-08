// Ajouter un écouteur d'événement pour attendre que le DOM soit complètement chargé et analysé
document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM fully loaded and parsed");

  // Obtenir les éléments HTML pour les boutons Précédent et Suivant
  var precedent = document.getElementById("precedent");
  var suivant = document.getElementById("suivant");

  // Obtenir les éléments HTML pour les pages du carousel
  var veggie = document.getElementById("pageveggie");
  var hamburger = document.getElementById("pagehamburger");
  var pasta = document.getElementById("pagepate");
  var wrap = document.getElementById("pagewrap");
  var pizza = document.getElementById("pagepizza");
  var asianfood = document.getElementById("pageasian");

  // Compteur de page pour le carousel
  var page = 1;

  // Si l'élément HTML "checkplathtml" existe, masquer toutes les pages sauf la première
  if (document.getElementById("checkplathtml")!= null) {
    hamburger.style.display = "none";
    pasta.style.display = "none";
    wrap.style.display = "none";
    pizza.style.display = "none";
    asianfood.style.display = "none";
  }

  // Ajouter un écouteur d'événement pour le bouton Suivant
  suivant.addEventListener("click", function suivant() {
    // Incrémenter le compteur de page
    page++;
    
    // Si le compteur de page dépasse 6, le réinitialiser à 1
    if (page > 6) {
      page = 1;
    }
    
    // Appeler la fonction pages pour mettre à jour l'affichage de la page
    pages(page);
  }); // Fait tourner le carousel avec le bouton Suivant

  // Ajouter un écouteur d'événement pour le bouton Précédent
  precedent.addEventListener("click", function precedent() {
    // Décrémenter le compteur de page
    page--;
    
    // Si le compteur de page est inférieur à 1, le réinitialiser à 6
    if (page < 1) {
      page = 6;
    }
    
    // Appeler la fonction pages pour mettre à jour l'affichage de la page
    pages(page);
  }); // Fait tourner le carousel avec le bouton Précédent

  // Fonction pour mettre à jour l'affichage de la page en fonction du compteur de page
  function pages(page) {
    // Masquer toutes les pages
    veggie.style.display = "none";
    hamburger.style.display = "none";
    pasta.style.display = "none";
    wrap.style.display = "none";
    pizza.style.display = "none";
    asianfood.style.display = "none";

    // Afficher la page correspondante au compteur de page
    if (page == 1) {
      veggie.style.display = "block";
    }
    if (page == 2) {
      hamburger.style.display = "block";
    }
    if (page == 3) {
      pasta.style.display = "block";
    }
    if (page == 4) {
      wrap.style.display = "block";
    }
    if (page == 5) {
      pizza.style.display = "block";
    }
    if (page == 6) {
      asianfood.style.display = "block";
    }
  }
});