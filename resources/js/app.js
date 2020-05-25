require('./bootstrap');
console.log('yihaa');
const hamburger = document.querySelector('hamburger');
hamburger.onclick = function() {
    console.log('yes');
    this.classList.toggle('is-active');
    document.querySelector(body).classList.toggle('scroll-lock');   
};