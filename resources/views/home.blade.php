<!doctype html>
<html lang="sk">
<head>
    <title>ARTWIFE 2023: JAZYK | Diera do sveta</title>
    <link rel="icon" type="image/x-icon" href="/static/images/DIERA_ELIPSA.svg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- OPENGRAPH TAGS -->
    <meta property="og:title" content="ARTWIFE 2023: JAZYK | Diera do sveta" />
    <meta property="og:url" content="/festivaly/artwife/jazyk/" />
    <meta property="og:type" content="article" />

    <meta property="og:image" content="/media/filer_public_thumbnails/filer_public/7d/15/7d150d89-95e1-4ae6-a302-acfa36041d66/cover.png__1200x630_q85_crop_subsampling-2_upscale.jpg" />

    <!-- LOAD ELASTIC FONT -->
    <style>
        @font-face {
            font-family: Elastik-A;
            font-style: normal;
            font-weight: normal;
            src: url(/fonts/Elastik-A.ttf) format('truetype');
        }

        body {
            background-image: url('/img/2024_marec_web_bckgrnd.png');
        }


    </style>

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <!-- DIERA GLOBAL CSS  -->
    <link href="/css/diera.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
{{--    <link href="/css/festival_year.css" rel="stylesheet">--}}
    {{--    <link href="/css/event.css" rel="stylesheet">--}}
{{--    <link href="/css/festival.css" rel="stylesheet">--}}

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


</head>
<body>

<!-- CMS TOOLBAR -->

<!-- SITE NAV -->
<header>

    <nav id="main-menu" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <!-- SITE LOGO -->
            <a class="navbar-brand pt-0 pb-0" href="/">
                <img src="/img/DIERA_ELIPSA.svg" />
            </a>

            <!-- TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navLinks" class="collapse navbar-collapse navbarSupportedContent flex-grow-0">
                <!-- SITE SECTIONS -->
                <div class="mr-auto ml-auto mt-0 mb-0">
                    <ul class="navbar-nav">

                        <li class="child nav-item">
                            <a class="nav-link fs-3" href="/">DOMOV</a>
                        </li>

                        <li class="child nav-item">
                            <a class="nav-link fs-3" href="/program/">PROGRAM</a>
                        </li>

                        <li class="child ancestor nav-item">
                            <a class="nav-link fs-3" href="/artwife">ARTWIFE</a>
                        </li>

                        <li class="child nav-item">
                            <a class="nav-link fs-3" href="/festival">FESTIVAL</a>
                        </li>

                        <li class="child nav-item">
                            <a class="nav-link fs-3" href="/event/">EVENT</a>
                        </li>

                        <li class="child nav-item">
                            <a class="nav-link fs-3" href="/about/">O NÁS</a>
                        </li>

                        <li class="d-block d-lg-none socials-and-lang mt-2">
                            <div class="row">

                                <div class="col text-center">
                                    <a class="fs-3" href="https://www.facebook.com/dieradosveta">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </div>

                                <div class="col text-center">
                                    <a class="fs-3" href="https://www.instagram.com/dieradosveta/">
                                        <i class="fab fa-instagram-square"></i>
                                    </a>
                                </div>

                                <div class="col text-center">
                                    <a class="fs-3" href="https://www.youtube.com/channel/UC326HkT9w-FxK3ySvKfKxKQ">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>

                                <div class="col text-center">
                <span class="fs-3 fw-bold nav-item">



<a class="fs-3" href="/en/festivals/artwife/2023/">EN</a>


                </span>
                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="d-flex d-none d-lg-block socials-and-lang">
                <a class="fs-3" href="https://www.facebook.com/dieradosveta">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a class="fs-3" href="https://www.instagram.com/dieradosveta/">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a class="fs-3" href="https://www.youtube.com/channel/UC326HkT9w-FxK3ySvKfKxKQ">
                    <i class="fab fa-youtube"></i>
                </a>
                <span class="fs-3 fw-bold nav-item">



<a class="fs-3" href="/en/festivals/artwife/2023/">EN</a>


      </span>
            </div>

        </div>
    </nav>



</header>

<!-- CONTENT -->
<main>
    <a  href="/program/ai-kreativita/" class="marquee" style="text-decoration:none">
        <div class="marquee__content">
            <span class="fs-2">next event → AI &amp; kreativita → Stvrtok 16:00 →</span>
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
        </div>

        <!-- Mirrors the content above -->
        <div class="marquee__content" aria-hidden="true">
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
        </div>
    </a>

    <!-- Teasers for featured events and articles -->
    <div id="featured">

        <div class="row gx-2 gy-2">
            <!-- teasers -->

            <div class="col-12">

                <a class="hp-teaser" href="/program/ai-umenie/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/2024_marec_ai_a_umenie_event.png__600x400_q85_crop_subsampling-2_upscale.jpg" />

                            <img class="d-none small-display mb-2" src="/img/2024_marec_ai_a_umenie_event.png__600x300_q85_crop_subsampling-2_upscale.jpg" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">AI &amp; UMENIE</h2>
                            </header>
                            <p>Nachádzame sa na začiatku konca ľudskej tvorivosti, alebo len nového začiatku ďalšej tvorivej éry?</p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                        <footer>
                            <div class="row schedule">
                                <div class="col fs-3 day" style="text-align:left;">
                                    23.3.
                                </div>
                                <div class="col fs-3 time" style="text-align:right;">
                                    17:00
                                </div>
                            </div>
                        </footer>



                    </article>
                </a>
            </div>

            <div class="col-12">
                <a class="hp-teaser" href="/vase-2-pre-nas-znamenaju-vela/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/image.png__600x400_q85_crop_subsampling-2_upscale.png" />

                            <img class="d-none small-display mb-2" src="/img/image.png__600x300_q85_crop_subsampling-2_upscale.png" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">VAŠE 2% PRE NÁS ZNAMENAJÚ VEĽA</h2>
                            </header>
                            <p>Podporte aj tento rok súčasné umenie na Liptove a darujte dve percentá Diere do sveta.</p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                    </article>
                </a>
            </div>

            <div class="col-12">

                <a class="hp-teaser" href="/program/eduv-syn-pipesh/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/311b00af-433a-44f7-9e06-441f346cbdf6.jpg__600x400_q85_crop_subsampling-2_upscale.jpg" />

                            <img class="d-none small-display mb-2" src="/img/311b00af-433a-44f7-9e06-441f346cbdf6.jpg__600x300_q85_crop_subsampling-2_upscale.jpg" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">EDÚV SYN &amp; PIPESH</h2>
                            </header>
                            <p>jedno z najzaujímavejších nových mien na rapovej scéne &amp; nová vlna beznádejného punku z Košíc</p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                        <footer>
                            <div class="row schedule">
                                <div class="col fs-3 day" style="text-align:left;">
                                    23.3.
                                </div>
                                <div class="col fs-3 time" style="text-align:right;">
                                    20:00
                                </div>
                            </div>
                        </footer>
                    </article>
                </a>

            </div>

            <div class="col-12">

                <a class="hp-teaser" href="/program/kumst-nova-stranka-knihy/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/370e4a3e-bd74-4820-b1f6-2bcd44241004.jpg__600x400_q85_crop_subsampling-2_upscale.jpg" />

                            <img class="d-none small-display mb-2" src="/img/370e4a3e-bd74-4820-b1f6-2bcd44241004.jpg__600x300_q85_crop_subsampling-2_upscale.jpg" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">KUMŠT: NOVÁ STRÁNKA KNIHY</h2>
                            </header>
                            <p>Marec je mesiac knihy. Pozrime sa na ňu z iného uhla pohľadu. </p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                        <footer>
                            <div class="row schedule">
                                <div class="col fs-3 day" style="text-align:left;">
                                    24.3.
                                </div>
                                <div class="col fs-3 time" style="text-align:right;">
                                    15:00
                                </div>
                            </div>
                        </footer>

                    </article>
                </a>

            </div>

            <div class="col-12">
                <a class="hp-teaser" href="/program/eja-deveckova-colaps-mode/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/mode_colapse.jpg__600x400_q85_crop_subsampling-2_upscale.jpg" />

                            <img class="d-none small-display mb-2" src="/img/mode_colapse.jpg__600x300_q85_crop_subsampling-2_upscale.jpg" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">EJA DEVEČKOVÁ: COLAPS MODE</h2>
                            </header>
                            <p>Inštalácia, ktorá rozšíri pohľady na prácu s fotografiou a upozorňuje na princíp imerzívnych fotokoláží, ktoré generuje AI.</p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                        <footer>
                            <div class="row schedule">
                                <div class="col fs-3 day" style="text-align:left;">
                                    30.3.
                                </div>
                                <div class="col fs-3 time" style="text-align:right;">
                                    19:00
                                </div>
                            </div>
                        </footer>



                    </article>
                </a>

            </div>



            <div class="col-12">




                <a class="hp-teaser" href="/program/dukla-cz-anki-cz/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/d_2.jpg__600x400_q85_crop_subsampling-2_upscale.jpg" />

                            <img class="d-none small-display mb-2" src="/img/d_2.jpg__600x300_q85_crop_subsampling-2_upscale.jpg" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">DUKLA (CZ) + ANKI (CZ)</h2>
                            </header>
                            <p>Pražská kapela hrajúca gytarový pop nesúci odkaz novej vlny, post punku, deväťdesiatkových gytaroviek a klubovej hudby.</p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                        <footer>
                            <div class="row schedule">
                                <div class="col fs-3 day" style="text-align:left;">
                                    6.4.
                                </div>
                                <div class="col fs-3 time" style="text-align:right;">
                                    20:00
                                </div>
                            </div>
                        </footer>



                    </article>
                </a>

            </div>



            <div class="col-12">




                <a class="hp-teaser" href="/program/berlin-manson/">
                    <article class="hp-teaser-content p-2">
                        <div class="teaser-img-container">
                            <!-- Checking if the extension was set -->

                            <img class="wide-display" src="/img/image00055.jpeg__600x400_q85_crop_subsampling-2_upscale.jpg" />

                            <img class="d-none small-display mb-2" src="/img/image00055.jpeg__600x300_q85_crop_subsampling-2_upscale.jpg" />

                        </div>

                        <div class="teaser-body-container fs-3">
                            <header class="pb-3">
                                <h2 class="display-3 lh-1">BERLIN MANSON</h2>
                            </header>
                            <p>koncert (synth)punkovej dvojice muzikantov Patrika Nagy a Adama Draguna</p>
                        </div>

                        <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                        <footer>
                            <div class="row schedule">
                                <div class="col fs-3 day" style="text-align:left;">
                                    18.5.
                                </div>
                                <div class="col fs-3 time" style="text-align:right;">
                                    20:00
                                </div>
                            </div>
                        </footer>



                    </article>
                </a>

            </div>








            <div class="col-md-6">
                <section id="opening-hours" class="p-1">
                    <header>
                        <h2 class="display-3 lh-1 card-title pt-4 pb-4">Otváracie hodiny</h2>
                    </header>
                    <div id="hours-container">
                        <div class="fs-3 fw-bold lh-1"><p style="text-align: center;">ŠTVRTOK — SOBOTA<br>
                                14:00 — 20:00</p>

                            <p style="text-align: center;">+ počas akcií</p></div>
                    </div>
                </section>
            </div>

            <div class="col-md-6">
                <section id="news-letter-teaser" class="p-1">
                    <header>
                        <h2 class="display-3 lh-1 card-title pt-4 pb-4">Odoberaj newsletter</h2>
                    </header>
                    <div id="nl-link-container" class="position-relative">
                        <a class="fs-3 position-absolute top-50 start-50 translate-middle" href="/newsletter/">klik!</a>
                    </div>
                </section>
            </div>




        </div>

    </div>

</main>


<!-- FOOTER -->
<footer id="site-footer">

    <div id="page-footer" class="container">
        <div class="container">

            <!-- Contacts, address, banking and partner -->
            <div class="row">

                <!-- Left side of the footer -->
                <div id="footer-left" class="col-auto">
                    <div class="row">

                        <!-- Contacts -->
                        <div id="footer-contacts" class="col-auto">
                            <div class="card">

                                <div class="card-body">

                                    <div style="margin-bottom: 20px;">
                                        <b>KONTAKTY</b>
                                        <div class="text-muted" style="line-height:1.1;">
                                            dieradosveta (at) gmail.com
                                        </div>
                                    </div>

                                    <ul class="list-group" style="list-style: none;" >
                                        <li class="" style="line-height:1.1; margin-bottom: 10px;">
                                            <b>Ján Mikuš</b>
                                            <br>
                                            &nbsp &nbsp
                                            +421 949 505 458
                                        </li>

                                        <li class="" style="line-height:1.1; margin-bottom: 10px;">
                                            <b>Jana Hanzelová</b>
                                            <br>
                                            &nbsp &nbsp
                                            +421 949 368 311
                                        </li>

                                        <li class="" style="line-height:1.1;margin-bottom: 10px;">
                                            <b>Barbora Bohušová</b>
                                            <br>
                                            &nbsp &nbsp
                                            +421 915 350 327
                                        </li>

                                    </ul>

                                </div>  <!-- /card-body -->

                            </div>  <!-- /card -->

                        </div>  <!-- /footer-contacts -->

                        <!-- Address -->
                        <div id="footer-address" class="col-auto">

                            <!-- Operation -->
                            <div class="row">
                                <div class="col">

                                    <div class="card" style="margin-bottom: 20px;">

                                        <div class="card-body">

                                            <b>PREVÁDZKA</b>
                                            <div style="line-height:1.1">
                                                Námestie osloboditeľov 1, č.s. 61 • 0301 01, Liptovský Mikuláš • Slovensko
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>  <!-- /operation row -->

                            <!-- Registered office -->
                            <div class="row">

                                <div class="col">

                                    <div class="card">
                                        <div class="card-body">
                                            <b>SÍDLO</b>
                                            <div style="line-height:1.1">
                                                Diera do sveta o.z. • A. Bernoláka 42/11 • 031 01, Liptovský Mikuláš • Slovensko
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>  <!-- /registered-office row -->

                        </div>  <!-- /address col -->

                    </div>

                </div>  <!-- /left-footer col -->

                <!-- Right side of the footer -->
                <div id="footer-right" class="col-auto">
                    <div class="row">

                        <div id="footer-banking" class="col-auto"> <!-- Banking -->

                            <div class="row"> <!-- ICODICO -->

                                <div class="col">

                                    <div class="card" style="margin-bottom: 20px;">

                                        <div class="card-body">
                                            <div style="line-height:1.1">
                                                <b>IČO:</b> 423 857 76
                                                <br>
                                                <b>DIČ:</b> 2024 0736 01
                                                <br>
                                                Nie sme platcami DPH
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>  <!-- /ICODICO -->

                            <div class="row"> <!-- Bank account -->
                                <div class="col">

                                    <div class="card" style="margin-bottom: 20px;">
                                        <div class="card-body">
                                            <span class="card-title"><b>BANKOVÉ SPOJENIE</b></span>
                                            <div style="line-height:1.1">
                                                Banka: FIO
                                                <br>
                                                IBAN: <span style="font-size:11px;">SK8983300000002500592531</span>
                                                <br>
                                                BIC/SWIFT: FIOZSKBAXXX
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>  <!-- /bank account row -->

                        </div>

                        <!-- Partner -->
                        <div id="footer-partner" class="col-auto">

                            <div class="row">  <!-- FPU dedication -->
                                <div class="col">
                                    <div class="card" style="">
                                        <div id="fpu-ded" class="card-body">
                                            <div style="line-height:1;font-size:13px;">
                                                Podujatia KC Diera do sveta z verejných zdrojov podporil <a href='https://www.fpu.sk/sk/'>Fond na podporu umenia</a>. Fond na podporu umenia je naším hlavným partnerom.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div id="fpu-logo">
                                        <img id="fpu-logo" src="/img/FPU_logo_modre.png" style="width:100%">
                                    </div>
                                </div>
                            </div>

                            <div class="row">  <!-- Orange dedication -->
                                <div class="col">
                                    <div class="card" style="">
                                        <div id="orange-ded" class="card-body">
                                            <div style="line-height:1;font-size:13px;">
                                                Tento projekt sa uskutočnil vďaka podpore v programe <a href='https://www.nadaciaorange.sk/sk/aktivna-komunita-s-nadaciou-orange/'>Aktívna komunita s Nadáciou Orange</a>.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div id="orange-logo">
                                        <img id="orange-logo" src="/img/orange_foundation_logo.svg" style="width:100%">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div id="copyright" class="row">

                <div class="col-12">
                    © Copyright Diera do sveta 2024. Všetky práva vyhradené. <a href="/ochrana-sukromia/">GDPR</a>.
                </div>

                <div class="col-12">
                    <b>dizajn:</b> <a href="http://www.bobaxbasa.com/">boba</a>  <b>dev:</b> <a href="https://github.com/mar-vic">marvic</a> <b>cms:</b> <a href="https://www.django-cms.org/en/">djangoCMS</a>
                </div>

            </div>
        </div>
    </div>

</footer>

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>




</body>
</html>
