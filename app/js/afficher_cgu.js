
const cgu = document.getElementById('cgu');

const cgu_class = document.querySelector('.cgu_class');

cgu_class.addEventListener('click', ()=>{
    cgu.classList.add('window_on');
    cgu.classList.remove('window_hidden');
})

const cgu_window_on = document.querySelector('.cgu_window_on')

cgu_window_on.addEventListener('click', ()=>{
    cgu.classList.add('window_on');
})

cgu.addEventListener('click', ()=>{
    cgu.classList.toggle('window_hidden');
    cgu.classList.toggle('window_on');
})