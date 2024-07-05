<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Artwife') }}</title>

        <link rel="icon" type="image/x-icon" href="/img/DIERA_ELIPSA.svg">

{{--        <!-- LOAD ELASTIC FONT -->--}}
{{--        <style>--}}
{{--            body {--}}
{{--                background-image: url('/img/2024_marec_web_bckgrnd.png');--}}
{{--            }--}}
{{--        </style>--}}

        <!-- Alpine Plugins -->
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/0d8827d474.js" crossorigin="anonymous"></script>

    </body>
</html>
