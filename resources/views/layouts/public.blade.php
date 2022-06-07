<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Brand-hub - Создаем бренды онлайн | BrandHub - первый онлайн сервис брендинга</title>

    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" data-hid="viewport" name="viewport" content="width=device-width, initial-scale=1">

    <meta data-n-head="ssr" data-hid="description" name="description" content="Платформа для создания бренда для предпринимателей">
    <meta data-n-head="ssr" data-hid="keywords" name="keywords" content="">

    <meta data-n-head="ssr" data-hid="og:title" name="og:title" content="Brand-hub - Создаем бренды онлайн">
    <meta data-n-head="ssr" data-hid="og:description" name="og:description" content="Платформа для создания бренда для предпринимателей">
    <meta data-n-head="ssr" data-hid="og:type" property="og:type" content="website">
    <meta data-n-head="ssr" data-hid="og:url" property="og:url" content="https://brand-hub.ru/">
    <meta data-n-head="ssr" data-hid="og:image" property="og:image" content="https://brand-hub.ru/uploads/file/b/d/7/bd75154378a6ccb64455e065af0ba8db.jpg">
    <meta data-n-head="ssr" data-hid="og:locale" property="og:locale" content="ru_RU">
    <meta data-n-head="ssr" data-hid="og:site_name" property="og:site_name" content="BrandHub">

    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="stylesheet" href="{{ asset('css/v2/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-icons.css') }}">

    <link data-n-head="ssr" rel="canonical" href="https://brand-hub.ru/">

    <style>html{--tt-base: 20;--tt-scale: 1;--tt-ease:linear;--tt-max:1600}*,:before,:after,html{--tt-key:none;animation:var(--tt-key) 1s var(--tt-ease) 1 calc(-1s * var(--tt-bind) / var(--tt-max)) both paused}</style>

    <style type="text/css">
        span.im-caret {
            -webkit-animation: 1s blink step-end infinite;
            animation: 1s blink step-end infinite;
        }

        @keyframes blink {
            from, to {
                border-right-color: black;
            }
            50% {
                border-right-color: transparent;
            }
        }

        @-webkit-keyframes blink {
            from, to {
                border-right-color: black;
            }
            50% {
                border-right-color: transparent;
            }
        }

        span.im-static {
            color: grey;
        }

        div.im-colormask {
            display: inline-block;
            border-style: inset;
            border-width: 2px;
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        div.im-colormask > input {
            position: absolute;
            display: inline-block;
            background-color: transparent;
            color: transparent;
            -webkit-appearance: caret;
            -moz-appearance: caret;
            appearance: caret;
            border-style: none;
            left: 0; /*calculated*/
        }

        div.im-colormask > input:focus {
            outline: none;
        }

        div.im-colormask > input::-moz-selection{
            background: none;
        }

        div.im-colormask > input::selection{
            background: none;
        }
        div.im-colormask > input::-moz-selection{
            background: none;
        }

        div.im-colormask > div {
            color: black;
            display: inline-block;
            width: 100px; /*calculated*/
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
