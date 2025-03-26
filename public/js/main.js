let pictures = document.querySelector(".hero-section");
// slider witch images
let images = ["slide-miage-1.jpg", "slide-miage-2.jpg", "slide-miage-3.jpg"];
let index = 0;
setInterval(() => {
    index = index < images.length - 1 ? index + 1 : 0;
    pictures.style.backgroundImage = `linear-gradient(rgba(1, 1, 31, 0.7), rgba(1, 1, 20, 0.7)), url('/images/${images[index]}')`;
    

}, 5000);

let s1 = document.querySelector('.s1');
let s2 = document.querySelector('.s2');
let search = document.querySelector('.search');
let select = document.getElementById('select-s');

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
})