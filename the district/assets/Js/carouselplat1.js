// Ajouter un écouteur d'événement pour attendre que le DOM soit complètement chargé et analysé
document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM fully loaded and parsed");

  if(document.getElementById('page2') != null){
    const veggie=document.getElementById('page1');
    const hamburger = document.getElementById('page2');
    const pasta = document.getElementById('page3');
    // const wrap = document.getElementById('pageWraps');
    // const pizza = document.getElementById('pagePizza');
    // const asianfood = document.getElementById('pageSalade');
    let page = 1 //Compteur de Page pour le carousel
    if(document.getElementById("checkplathtml")!=null){
    hamburger.style.display= 'none';
    pasta.style.display= 'none';
    // wrap.style.display= 'none';
    // pizza.style.display= 'none';
    // asianfood.style.display='none';
    // veggie.style.display='none';}//definie et desactive tout les cellule sauf la premiere si checkplat existe
    
    
    suivant.addEventListener('click',function suivant(){
        page++;
        if (page > 3) {
            page = 1;
        }
        pages(page);
    })//fait tourner le carousel avec Suivant

precedent.addEventListener('click',function precedent(){
    page--;
    if ( page < 1) {
        page = 3;
    }
    pages(page);
})//fait tourner le carousel avec Precedent
}


function pages(page){ //fonctionne pour afficher la page en fonction du compteur page

veggie.style.display= 'none';
hamburger.style.display= 'none';
pasta.style.display= 'none';
// wrap.style.display= 'none';
// pizza.style.display= 'none';
// asianfood.style.display='none';

if (page==1) {
veggie.style.display= 'block';
} else if (page==2) {
hamburger.style.display= 'block';
} else if (page==3) {
pasta.style.display= 'block';
}
}
}});