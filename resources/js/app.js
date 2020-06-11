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

}
