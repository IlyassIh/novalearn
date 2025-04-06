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
