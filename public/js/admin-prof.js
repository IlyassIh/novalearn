const cardProf = document.querySelector(".add-prof");
const modifierProf = document.querySelector(".modifier-prof");
const addProf = document.querySelector(".add");
const btnModifier = document.querySelectorAll(".modifier");
const annuler = document.querySelector(".annuler");
const overlay = document.querySelector(".overlay");

addProf.addEventListener("click", function () {
    cardProf.style.display = "block";
    overlay.style.display = "block";
});

annuler.addEventListener("click", function () {
    cardProf.style.display = "none";
    overlay.style.display = "none";
});

btnModifier.forEach((btn) => {
    btn.addEventListener("click", function () {
        modifierProf.style.display = "block";
        overlay.style.display = "block";
    });
});

const ajouterFiliere = document.querySelectorAll(".ajouter-filiere");
const ajouterMat = document.querySelector(".ajouter-mat");

ajouterFiliere.forEach((btn) => {
    btn.addEventListener("click", () => {
        ajouterMat.style.display = "block";
        overlay.style.display = "block";
    });
});
overlay.addEventListener("click", function () {
    cardProf.style.display = "none";
    overlay.style.display = "none";
    modifierProf.style.display = "none";
    ajouterMat.style.display = "none";
});
