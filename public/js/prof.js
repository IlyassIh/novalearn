let choice = document.getElementById('filiere');
let dev = document.querySelector('.dev');
let reseau = document.querySelector('.reseau');
let save = document.querySelector('.save');
let recherche = document.querySelector('.recherche');
let filiere = document.querySelector('#filiere');
let matiere = document.querySelector('#matiere');
let search = document.querySelector('.search');

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

const xMark = document.querySelector('.xMark');
const message = document.querySelector('.message');
const element = document.querySelector('.element');

xMark.addEventListener('click', () => {
    console.log(message);
    message.style.setProperty('display', 'none', 'important');
});
