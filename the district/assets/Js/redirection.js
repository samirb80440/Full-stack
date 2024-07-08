// Fonction de redirection vers une page de catégorie en fonction de l'ID de catégorie
function redirection(cat) {
  // Vérifier si la catégorie est égale à 1, si oui, rediriger vers la page asianfood.html
  if (cat == 1) {
    window.location.href = "categorie/asianfood.html";
  }
  // Vérifier si la catégorie est égale à 2, si oui, rediriger vers la page hamburger.html
  if (cat == 2) {
    window.location.href = "categorie/hamburger.html";
  }
  // Vérifier si la catégorie est égale à 3, si oui, rediriger vers la page pasta.html
  if (cat == 3) {
    window.location.href = "categorie/pasta.html";
  }
  // Vérifier si la catégorie est égale à 4, si oui, rediriger vers la page pizza.html
  if (cat == 4) {
    window.location.href = "categorie/pizza.html";
  }
  // Vérifier si la catégorie est égale à 5, si oui, rediriger vers la page salade.html
  if (cat == 5) {
    window.location.href = "categorie/salade.html";
  }
  // Vérifier si la catégorie est égale à 6, si oui, rediriger vers la page sandwich.html
  if (cat == 6) {
    window.location.href = "categorie/sandwich.html";
  }
  // Vérifier si la catégorie est égale à 7, si oui, rediriger vers la page veggie.html
  if (cat == 7) {
    window.location.href = "categorie/veggie.html";
  }
  // Vérifier si la catégorie est égale à 8, si oui, rediriger vers la page wrap.html
  if (cat == 8) {
    window.location.href = "categorie/wrap.html";
  }
  // Si aucune des conditions ci-dessus n'est remplie, afficher un message d'erreur
  else {
    console.log("Catégorie invalide");
  }
}