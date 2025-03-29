// ===================================================== Start js for index page ================================================

let pictures = document.querySelector(".hero-section");

let images = ["slide-miage-1.jpg", "slide-miage-2.jpg", "slide-miage-3.jpg"];
let index = 0;
setInterval(() => {
    index = index < images.length - 1 ? index + 1 : 0;
    pictures.style.backgroundImage = `linear-gradient(rgba(1, 1, 31, 0.7), rgba(1, 1, 20, 0.7)), url('/images/${images[index]}')`;
    

}, 5000);

// ===================================================== End js for index page ================================================


// ===================================================== Start js for etudiant page ================================================

let select = document.getElementById('select-s');
let s1 = document.querySelector('.s1');
let s2 = document.querySelector('.s2');
let search = document.querySelector('.search');

search.addEventListener('click', ()=> {
    if (select.value === 's1') {
        s1.style.display = 'table';
        s2.style.display = 'none';
        
    }
    else if (select.value === 's2') {
        s1.style.display = 'none';
        s2.style.display = 'table';

    }
    else {
        
        s1.style.display = 'none';
    }
});

// ===================================================== End js for etudiant page ================================================

// ===================================================== Start js for prof page ================================================

let choice = document.getElementById('filiere');
let dev = document.querySelector('.dev');
let reseau = document.querySelector('.reseau');
let save = document.querySelector('.save');
let recherche = document.querySelector('.recherche');
let filiere = document.querySelector('#filiere');
let matiere = document.querySelector('#matiere');

filiere.addEventListener('change', ()=>{
    matiere.removeAttribute('disabled');
});


search.addEventListener('click', ()=>{
    if (choice.value === 'dev') {
        dev.style.display = 'table';
        reseau.style.display = 'none';
        save.style.display = 'block';
    }
    
    else if (choice.value === 'reseau') {
        dev.style.display = 'none';
        reseau.style.display = 'table';
        save.style.display = 'block';
    }
    else {
        dev.style.display = 'none';
        reseau.style.display = 'none';
    }
});

// ===================================================== End js for etudiant page ================================================