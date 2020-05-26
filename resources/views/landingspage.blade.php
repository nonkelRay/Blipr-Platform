<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blipr</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
        <script src="{{ asset('js/app.js')}}"></script>
    </head>
    <body class="frontpage">
        <div class="mobile-menu">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Our plans</a></li>
                        <li><a href="#">Business</a></li>
                    </ul>
                </nav>
                <div class="socials">
                    <a href="https://www.instagram.com/blipr.app/" target="_blank"><img src="{{ asset('images/insta.png') }}" alt=""></a>
                    <a href="https://www.facebook.com/Blipr-105156707830640" target="_blank"><img src="{{ asset('images/fb.png') }}" alt=""></a>
                </div>
            </div>
        </div>
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
                <h1 class="mobile-title">Enjoy at any time</h1>
                <img src="{{ asset('images/hero-image.png') }}" alt="">
                <div class="text">
                    <h1 class="large-title">Enjoy at any time</h1>
                    <p>Blipr is a platform that captures your musical experiences. Save your beloved memories with a single blip and relive them at any time. No more filming, distractions or empty batteries.</p>
                    <a href="#" class="btn">try for free</a>
                </div>
            </div>
        </section>
        <section class="tutorial">
            <div class="container">
                <h1>How it works</h1>
                <div class="steps">
                    <img src="{{ asset('images/step-1.png') }}" alt="">
                    <img class="hide" src="{{ asset('images/step-2.png') }}" alt="">
                    <img class="hide" src="{{ asset('images/step-3.png') }}" alt="">
                </div>
            </div>
        </section>
        <section class="business">
            <div class="container">
                <img src="{{ asset('images/business.png') }}" alt="">
                <div class="text">
                    <h1>Blipr Business</h1>
                    <p>Since the music scene depends on the hard work and dedication of venues and event organizers we want to give something in return. Next to a digital experience to offer to their audience we will offer a commission for every Blipr user. This way we can expand our Blipr family and work towards a better music experience all over the world.</p>
                    <a href="#" class="btn">discover more</a>
                </div>
            </div>
        </section>
        <section class="store">
            <div class="container">
                <div class="text">
                    <h1>Our application</h1>
                    <p>The Blipr application is developed so you can keep your memories as close as possible. Access your blips, find new concerts or connect with your friends. Our application knows you and your music taste very well and is completely personalized just for you.</p>
                    <div class="download">
                        <img src="{{ asset('images/playstore.png') }}" alt="">
                        <img src="{{ asset('images/appstore.png') }}" alt="">
                    </div>
                </div>
                <img class="phone" src="{{ asset('images/phone.png') }}" alt="">
            </div>
        </section>
        <section class="shows">
            <div class="container">
                <h1>Upcoming shows</h1>
                <div class="mobile">
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                </div>
                <div class="mobile more">
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                </div>
                <div class="mobile more">
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                    <div class="artist">
                        <h2>Jamie xx</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="partners">
            <div class="container">
                <h1>Our partners</h1>
                <div class="partner-logos">
                    <img src="{{ asset('images/lofelt.png') }}" alt="">
                    <img src="{{ asset('images/tm.png') }}" alt="">
                    <img src="{{ asset('images/made.png') }}" alt="">
                </div> 
            </div>
        </section>
        <footer class="mobile-footer">
            <a href="/"><img src="{{ asset('images/logo-footer.png') }}" alt=""></a>
            <a href="https://www.instagram.com/blipr.app/" target="_blank"><img src="{{ asset('images/insta.png') }}" alt=""></a>
            <a href="https://www.facebook.com/Blipr-105156707830640" target="_blank"><img src="{{ asset('images/fb.png') }}" alt=""></a>
        </footer>
        <footer class="large-footer">
            <div class="container">
                <ul>
                    <li>Connect</li>
                    <li><a href="https://www.facebook.com/Blipr-105156707830640" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/blipr.app/" target="_blank">Instagram</a></li>
                    <li><a href="mailto:hello@blipr.app">hello@blipr.app</a></li>
                </ul>
                <ul>
                    <li>Info</li>
                    <li><a href="/">Home</a></li>
                    <li><a href="#how">How it works</a></li>
                    <li><a href="#business">Business</a></li>
                    <li><a href="#app">Our application</a></li>
                    <li><a href="#plans">Our plans</a></li>
                </ul>
                <ul>
                    <li>Platform</li>
                    <li><a href="#">Signup</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Download</a></li>
                </ul>
                <div class="copy">
                    <img src="{{ asset("images/logo.png") }}" alt="">
                    <span> &copy; {{ date("Y") }} Blipr</span>
                </div>
            </div>
        </footer>
    </body>
</html>
