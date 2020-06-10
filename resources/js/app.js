/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.onload = function(){
    // mobile menu
    const hamburger = document.querySelector('.hamburger');
    hamburger.onclick = function() {
        this.classList.toggle('is-active');
        document.querySelector('body').classList.toggle('scroll-lock');
        document.querySelector('.mobile-menu').classList.toggle('active');
        // document.querySelector('.mobile-menu').classList.toggle('slide-in');
    };
}
