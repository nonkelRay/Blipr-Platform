require('./bootstrap');

window.onload = function(){
    // mobile menu
    const hamburger = document.querySelector('.hamburger');
    hamburger.onclick = function() {
        this.classList.toggle('is-active');
        document.querySelector('body').classList.toggle('scroll-lock');
        document.querySelector('.mobile-menu').classList.toggle('active');  
    };
}
