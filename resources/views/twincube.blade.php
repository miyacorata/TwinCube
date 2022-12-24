@extends('layout.app', ['title' => 'About TwinCube'])

@section('head')
    <style>
        #TwinCube {
            position: relative;
            z-index: 2;
        }
        #TwinCube > .cube {
            position: absolute;
            height: 80px;
            width: 80px;
            background: rgba(0,0,0,0.3);
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.5), inset 0 0 10px rgba(0,0,0,0.1);
        }
        #TwinCube > .cube::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0,0,0,0.1);
            height: 60px;
            width: 60px;
            border-radius: 15px;
            filter: blur(5px);
        }
        #TwinCube > .cube::after {
            content: '';
            position: absolute;
            top: 5px;
            left: 7px;
            background: rgba(255,255,255,0.9);
            height: 15px;
            width: 20px;
            border-radius: 4px;
            filter: blur(4px);
        }
        #TwinCube > .cube.cyan {
            transform: rotate(10deg);
            right: 5px;
            top: -8px;
            background: deepskyblue;
        }
        #TwinCube > .cube.yellow {
            transform: rotate(-5deg);
            right: 83px;
            top: -5px;
            background: yellow;
        }
    </style>
@endsection

@section('main')

    <section class="hero is-dark">
        <div class="hero-body is-flex is-justify-content-space-between">
            <div style="z-index: 3; text-shadow: 0 0 10px hsl(0deg, 0%, 29%)">
                <div class="title">About TwinCube</div>
                <div class="subtitle">Yet another simple CMS</div>
            </div>
            <div id="TwinCube" class="is-desktop">
                <div class="cube cyan"></div>
                <div class="cube yellow"></div>
            </div>
        </div>
    </section>
    <section class="container is-max-widescreen content pt-5 px-3">
        <h1>TwinCubeについて</h1>
        <p>TwinCube は小規模なサークル、個人サイト向け簡易CMS(コンテンツ管理システム)です。</p>
        <p>
            PHPのフレームワークとして
            <a href="https://laravel.com" target="_blank">Laravel</a>
            、CSSフレームワークとして
            <a href="https://bulma.io" target="_blank">Bulma</a>
            を採用しています。
        </p>
        <p>
            TwinCube は
            <a href="https://opensource.org/licenses/MIT" target="_blank">MITライセンス</a>
            でライセンスされたオープンソースソフトウェアです。ソースコードは
            <a href="https://github.com/miyacorata/TwinCube" target="_blank">GitHub</a> にあります。
        </p>
    </section>
@endsection
