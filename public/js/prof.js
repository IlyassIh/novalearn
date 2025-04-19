let choice = document.getElementById('filiere');
let dev = document.querySelector('.dev');
let reseau = document.querySelector('.reseau');
let save = document.querySelector('.save');
let recherche = document.querySelector('.recherche');
let filiere = document.querySelector('#filiere');
let matiere = document.querySelector('#matiere');
let search = document.querySelector('.search');
let exams = document.querySelector('#exams');

filiere.addEventListener('change', ()=>{
    matiere.removeAttribute('disabled');
});


// search.addEventListener('click', ()=>{
//     dev.style.display = 'block';
// });

matiere.addEventListener('change', ()=>{
    exams.removeAttribute('disabled');
});



const xMark = document.querySelector('.xMark');
const message = document.querySelector('.message');
const element = document.querySelector('.element');

xMark.addEventListener('click', () => {
    console.log(message);
    message.style.setProperty('display', 'none', 'important');
});
