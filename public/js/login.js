const xMark = document.querySelector('.xMark');
const message = document.querySelector('.message');
const element = document.querySelector('.element');

xMark.addEventListener('click', () => {
    console.log(message);
    message.style.setProperty('display', 'none', 'important');
});