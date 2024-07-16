// Ajouter un écouteur d'événement pour attendre que le DOM soit complètement chargé
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form");

  // Ajouter un écouteur d'événement pour le formulaire pour empêcher la soumission par défaut
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Initialiser un indicateur de validation
    let checkvalide = true;

    // Valider les champs du formulaire
    checkvalide &= verifiltre(
      /^[A-Za-z\s]+$/,
      document.getElementById("Nom"),
      "Nom et Prenom invalide"
    );
    checkvalide &= verifiltre(
      /^[_A-Za-z0-9.-]+@[_a-z0-9.-]+.[a-z]{2,4}$/,
      document.getElementById("Email"),
      "veuillez entrer une adresse email valide"
    );
    checkvalide &= verifiltre(
      /^[0-9]{10}$/,
      document.getElementById("Tel"),
      "numéros de téléphone invalide"
    );
    checkvalide &= verifiltre(
      /^[A-Za-z0-9\s]+$/,
      document.getElementById("Adresse"),
      "veuillez écrire votre adresse"
    );

    console.log(checkvalide);

    // Si la validation est réussie, soumettre le formulaire
    if (checkvalide) {
      form.submit();
    }
  });
});

// Fonction de validation pour les champs du formulaire
function verifiltre(regex, element, mde) {
  if (!regex.test(element.value)) {
    // Afficher une erreur si la validation échoue
    alert(mde);
    element.focus();
    return false;
  }
  return true;
}