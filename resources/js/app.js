/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
window.$ = window.jQuery = require('jquery');
require("slick-carousel");
const jQueryBridget = require('jquery-bridget');
const Isotope = require("isotope-layout");

jQueryBridget('isotope', Isotope, $);

window.onload = function(){
    // mobile menu
    const hamburger = document.querySelector('.hamburger');
    hamburger.onclick = function() {
        this.classList.toggle('is-active');
        document.querySelector('body').classList.toggle('scroll-lock');
        document.querySelector('.mobile-menu').classList.toggle('active');
        // document.querySelector('.mobile-menu').classList.toggle('slide-in');
    };

    // upload button
    const inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        const label	 = input.nextElementSibling;
        const labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            let fileName = '';
            fileName = e.target.value.split( '\\' ).pop();
            // if( this.files && this.files.length > 1 ) {
            //     fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            // }
            // else {
                
            // }
            if( fileName ) {
                label.innerHTML = fileName;
            }
            else {
                label.innerHTML = labelVal;
            }
        });
    });
    // slick-slider
    $('.slider').slick({
        // slidesToShow: 5,
        variableWidth: true,
        dots: false,
        autoplay: true,
        arrows: false,
        cssEase: 'linear',
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 0,
        speed: 5000,
    });

    //isotop filter
    const grid = $('.isotope-grid').isotope({
        // options
        itemSelector: '.isotope-item',
        layoutMode: 'fitRows',
        getSortData: {
            description: '.description',
            aritst: '.artist',
            venue: '.venue',
        } 
      });

      $('.filter-button-group button').on( 'click', function() {
        const filterValue = $(this).attr('data-filter');
        grid.isotope({ filter: filterValue });
      });

      $('.sort-by-button-group').on( 'click', 'button', function() {
        var sortByValue = $(this).attr('data-sort-by');
        grid.isotope({ sortBy: sortByValue });
      });

      $('.button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function() {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $( this ).addClass('is-checked');
        });
      });
}
