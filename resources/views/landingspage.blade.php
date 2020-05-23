<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blipr</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    </head>
    <body class="frontpage">
        <nav class="home-nav">
            <div class="container">
                <a href="/" class="brand">Blipr</a>
                <button class="hamburger hamburger--vortex" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </nav>
        <section class="hero">
            <div class="container">
                <h1>Enjoy at any time<span>.</span></h1>
                <img src="{{ asset('images/hero-image.png') }}" alt="">
                <div class="text">
                    <p>Blipr is a platform that captures your musical experiences. Save your beloved memories with a single blip and relive them at any time. No more filming, distractions or empty batteries.</p>
                    <a href="#" class="btn">try for free</a>
                </div>
            </div>
        </section>
        <section class="tutorial">
            <div class="container">
                <h1>How it works<span>.</span></h1>
                <img src="{{ asset('images/tutorial-placeholder.png') }}" alt="">
            </div>
        </section>
        <section class="business">
            <div class="container">
                <img src="{{ asset('images/business.png') }}" alt="">
                <div class="text">
                    <h1>Blipr Business<span>.</span></h1>
                    <p>Since the music scene depends on the hard work and dedication of venues and event organizers we want to give something in return. Next to a digital experience to offer to their audience we will offer a commission for every Blipr user. This way we can expand our Blipr family and work towards a better music experience all over the world.</p>
                    <a href="#" class="btn">discover more</a>
                </div>
            </div>
        </section>
        <section class="store">
            <div class="container">
                <div class="text">
                    <h1>Our application<span>.</span></h1>
                    <p>The Blipr application is developed so you can keep your memories as close as possible. Access your blips, find new concerts or connect with your friends. Our application knows you and your music taste very well and is completely personalized just for you.</p>
                </div>
            </div>
        </section>
        <section class="shows">
            <div class="container">
                <h1>Upcoming shows<span>.</span></h1>
                <div class="show-images">

                </div>
            </div>
        </section>
        <footer>
            
        </footer>
    </body>
</html>
