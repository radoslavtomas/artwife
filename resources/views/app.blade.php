<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Artwife') }}</title>

        <link rel="icon" type="image/x-icon" href="/static/images/DIERA_ELIPSA.svg">

        <!-- OPENGRAPH TAGS -->
        <meta property="og:title" content="ARTWIFE 2023: JAZYK | Diera do sveta" />
        <meta property="og:url" content="/festivaly/artwife/jazyk/" />
        <meta property="og:type" content="article" />

        <meta property="og:image" content="/media/filer_public_thumbnails/filer_public/7d/15/7d150d89-95e1-4ae6-a302-acfa36041d66/cover.png__1200x630_q85_crop_subsampling-2_upscale.jpg" />

        <!-- LOAD ELASTIC FONT -->
        <style>
            body {
                background-image: url('/img/2024_marec_web_bckgrnd.png');
            }


        </style>

        <!-- Alpine Plugins -->
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- BOOTSTRAP CSS -->
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">--}}
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

        <!-- DIERA GLOBAL CSS  -->
{{--        <link href="/css/global.css" rel="stylesheet">--}}
{{--        <link href="/css/diera.css" rel="stylesheet">--}}
{{--        <link href="/css/home.css" rel="stylesheet">--}}

        <!-- Colcade JS for teasers masonry grid -->
        <script src="https://unpkg.com/colcade@0/colcade.js"></script>

        <!-- Styles for Colcade masonry grid -->
        <style>
            /* Using floats */
            .grid-col {
                float: left;
                width: 100%;
            }

            .grid-item {
                padding: 2px;
            }

            /* 1 columns by default, hide the second column */
            .grid-col--2 { display: none; }

            /* 2 columns at large size */
            @media ( min-width: 1200px ) {
                .grid-col { width: 50%; }
                .grid-col--2 { display: block; } /* show column 2 */
            }
        </style>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body>

    @inertia

    <!-- HTMX -->
    <script src="https://unpkg.com/htmx.org@1.9.2"
            integrity="sha384-L6OqL9pRWyyFU3+/bjdSri+iIphTN/bvYyM37tICVyOJkWZLpP2vGn6VUEXgzg6h"
            crossorigin="anonymous"></script>

    <!-- Masonry Grid by DeSandro -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!-- Images loaded package -->
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

    <!-- COOKIE CONSENT POPUP -->



    <div id="cookie-notice" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md">
                    <p>
                        dieradosveta.sk používa cookies na zabezpečenie jej základnej funkcionality. Používaním tejto stránky súhlasíte s ich spracovaním.
                    </p>
                </div>
                <div class="col-3 col-md" style="text-align:center">
                    <button class="" onclick="acceptCookieConsent();">Súhlasím</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Create cookie
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            let expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        // Delete cookie
        function deleteCookie(cname) {
            const d = new Date();
            d.setTime(d.getTime() + (24*60*60*1000));
            let expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=;" + expires + ";path=/";
        }

        // Read cookie
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for(let i = 0; i <ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        // Set cookie consent
        function acceptCookieConsent(){
            deleteCookie('user_cookie_consent');
            setCookie('user_cookie_consent', 1, 30);
            document.getElementById("cookie-notice").style.display = "none";
        }

        let cookie_consent = getCookie("user_cookie_consent");
        if(cookie_consent != ""){
            document.getElementById("cookie-notice").style.display = "none";
        }else{
            document.getElementById("cookie-notice").style.display = "block";
        }
    </script>


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/0d8827d474.js" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>--}}

    </body>
</html>
