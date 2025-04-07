const cardEtudiant = document.querySelector(".add-etudiant");
const infoEtudiant = document.querySelector(".info-etudiant");
const addEtudiant = document.querySelector(".addEtudiant");
const annuler = document.querySelector(".annuler");
const overlay = document.querySelector(".overlay");
const modifierEtudiant = document.querySelector(".modifier-etudiant");
const modifier = document.querySelectorAll(".modifier");

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
    modifierEtudiant.style.display = "none";
});

modifier.forEach((btn) => {
    btn.addEventListener("click", function () {
        modifierEtudiant.style.display = "block";
        overlay.style.display = "block";
    });
});