<?php
    $title_long = !empty($title) ? $title.' - '.config('app.name') : config('app.name');
?><!doctype html>
<html lang="{{ app()->getLocale() }}" class="has-background-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title_long }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/twincube.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('head')
</head>
<body>

<nav class="navbar px-2" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            @if(config('twincube.icon'))<img src="{{ config('twincube.icon') }}" alt="icon" width="28" height="28">@endif
            <span class="title is-4 ml-2">{{ config('app.name') }}</span>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar-menu" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/') }}">
                Home
            </a>

            <a class="navbar-item">
                About
            </a>

            <a class="navbar-item">
                Works
            </a>

            <a class="navbar-item">
                Links
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @if(config('twincube.twitter'))
                        <a href="https://twitter.com/{{ config('twincube.twitter') }}" target="_blank" class="button is-info is-small">
                            <span class="icon"><i class="fa-brands fa-twitter"></i></span>
                            <span>&commat;{{ config('twincube.twitter') }}</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('main')

<footer class="footer has-background-light">
    <div class="content has-text-centered">
        <p>
            <a href="{{ route('TwinCube') }}" class="has-text-weight-bold">TwinCube</a>
            for <a href="https://twitter.com/{{ config('twincube.twitter') }}" target="_blank">{{ config('twincube.operator') }}</a>
        </p>
        <p>
            <a href="https://bulma.io" target="_blank">
                <img src="https://bulma.io/images/made-with-bulma--semiblack.png" alt="Made with Bulma" width="128" height="24">
            </a>
        </p>
    </div>
</footer>

</body>
</html>
