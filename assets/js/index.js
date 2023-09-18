$(document).ready(function(){
   //Déclaration des variables 
var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var downloadBtn = document.getElementById("downloadBtn");
var cancelBtn = document.getElementById("cancelBtn");

// boutton d'ouverture du modal
openModalBtn.onclick = function() {
  modal.style.display = "block";
}
// bouton annuler
cancelBtn.onclick = function(){
    modal.style.display ="none";
}
// Confirmer le téléchragement
downloadBtn.onclick = function() {
  window.location.href = 'CV Henintsoa.pdf';
  modal.style.display = "none";
}

});