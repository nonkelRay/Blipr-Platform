<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blipr</title>

        <link rel="icon" type="image/png" href="images/favicon/Favicon.png" media="screen">

        <!-- SEO -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153290871-3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153290871-3');
        </script>

        <!-- Hotjar Tracking Code for https://www.blipr.app -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1830470,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){
                w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WXH9P4Q');
        </script>
        <!-- End Google Tag Manager -->

        <!-- FACEBOOK AND TWITTER CARD -->
        <meta property="og:url"                content="https://www.blipr.app/" />
        <meta property="og:type"               content="Landingpage" />
        <meta property="og:title"              content="Blipr | Your moments, your memories" />
        <meta property="og:description"        content="With Blipr you can fully experience music and reduce smartphone usage at concerts." />
        <meta property="og:image"              content="https://csar.be/logo-blipr.jpg">
        <meta property="fb:app_id"             content="930729077340126" />
    
        <meta name="twitter:card" content="summary_large_image">
        <meta name=”twitter:site” content="@blipr" /> 
        <meta name=”twitter:title” content="Blipr | Your moments, your memories" /> 
        <meta name=”twitter:description” content="With Blipr you can fully experience music and reduce smartphone usage at concerts." /> 
        <meta name=”twitter:image” content="https://csar.be/logo-blipr.jpg" />
    
        <!-- META TAGS -->
        <meta name="description" content="With Blipr you can fully experience music and reduce smartphone usage at concerts.">
        <meta name="keywords" content="blipr">
        <meta name="keywords" content="music">
        <meta name="keywords" content="reduces">
        <meta name="keywords" content="smartphones">
        <meta name="keywords" content="feeling">
        <meta name="keywords" content="experience">
        <meta name="keywords" content="re-experience">
        <meta name="keywords" content="mood">
        <meta name="keywords" content="stimulation">
        <meta name="keywords" content="memories">
        <meta name="keywords" content="music">
        <meta name="keywords" content="concert">
        <meta name="keywords" content="festival">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
        <script src="{{ asset('js/app.js')}}"></script>

    </head>
    <body class="frontpage">

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXH9P4Q"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('partials.mobile-nav')
        @include('partials.header-home')
        
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
                <a href="#" class="btn">read more</a>
            </div>
        </section>
        <section class="business">
            <div class="container">
                <img src="{{ asset('images/business.png') }}" alt="">
                <div class="text">
                    <h1>Blipr venues</h1>
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
                    <a href="https://lofelt.com/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/lofelt.jpg') }}" alt=""></a>
                    <a class="bigger"  href="https://www.thomasmore.be/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/tm.png') }}" alt=""></a>
                    <a href="https://www.haveitmade.be/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/made.png') }}" alt=""></a>
                </div> 
            </div>
        </section>
        @include('partials.mobile-footer')
        @include('partials.footer-home')
        

        <!-- Mailchimp pop-up script -->
        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/c422f71116982fc0fc65ef74f/f710971e8abc49e2bea974fd5.js");</script>

    </body>
</html>
