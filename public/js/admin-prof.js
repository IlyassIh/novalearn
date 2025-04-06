const cardProf = document.querySelector(".add-prof");

const addProf = document.querySelector(".add");
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

overlay.addEventListener("click", function () {
    cardProf.style.display = "none";
    overlay.style.display = "none";
});