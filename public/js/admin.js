const cardEtudiant = document.querySelector(".add-etudiant");
const infoEtudiant = document.querySelector(".info-etudiant");
const addEtudiant = document.querySelector(".addEtudiant");
const annuler = document.querySelector(".annuler");
const overlay = document.querySelector(".overlay");

addEtudiant.addEventListener("click", function () {
    cardEtudiant.style.display = "block";
    overlay.style.display = "block";
});

annuler.addEventListener("click", function () {
    cardEtudiant.style.display = "none";
    overlay.style.display = "none";
});

overlay.addEventListener("click", function () {
    cardEtudiant.style.display = "none";
    overlay.style.display = "none";
});