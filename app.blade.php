<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

    @livewireStyles

    <style>
        @font-face {
            font-family: 'NanumGothic';
            src: url('/assets/fonts/NanumGothic/NanumGothic.eot');
            src: url('/assets/fonts/NanumGothic/NanumGothic.eot') format('embedded-opentype'),
                url('/assets/fonts/NanumGothic/NanumGothic.woff') format('woff');
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body { margin: 0 }

        html,
        body,
        div {
            font-family: 'NanumGothic', 'serif';
        }

        body {
            font-family: 'NanumGothic', 'serif';
        }

        html {
            /* font-size: 1rem;; */
        }
        @media screen and (min-width: 768px) {
            .md-w-min {
                min-width: 1440px;
            }
        }

    </style>

    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>

</head>
<body class="inset-x-0 mx-auto antialiased font-nanumgothic">
    <div 
        class="container relative flex flex-col justify-between w-full h-screen min-h-screen mx-auto mt-0 overflow-x-hidden md:inline-block md-w-min font-nanumgothic sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl">
        <div class="bg-transparent ">
            <x-layouts.top-menu-component />
            <div class="w-full ">
                {{ $header  ?? null }}
            </div>

            <main class="mb-auto ">
                {{ $slot ?? null }}
            </main>
        </div>
        @include('layouts.footer')
    </div>

    @if ( request()->getHost() =='127.0.0.1' )
    <script id="__bs_script__">
        // <![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.14'><\/script>".replace("HOST", location.hostname));
        // ]]>
    </script>
    @endif

    @livewireScripts

    <script>
        // window.onload = function() {

        // }
        window.addEventListener('updatedPage', event => {
            // window.scrollTo( { top: 0, behavior: 'smooth' })
        })

        window.addEventListener('alertGoBack', event => {
            alert( event.detail.msg);
            window.history.back();
        })
        window.addEventListener('alertNavigate', event => {
            alert( event.detail.msg);
            document.location.href = event.detail.url;
        })
        window.addEventListener('alertWindow', event => {
            alert( event.detail.msg);
        })
        window.addEventListener('alertUpdatePage', event => {
            alert( event.detail.msg);
            document.location.href = document.location.href;
        })
        window.addEventListener('alertGoURL', event => {
            alert( event.detail.msg);
            document.location.href = event.detail.url;
        })
    </script>
</body>
</html>
