@extends('layout/app')

@section('main')
    <section class="hero is-fullheight-with-navbar" id="top-hero"
             @if(!empty(config('twincube.top.image'))) style="background-image: url('{{ config('twincube.top.image') }}')" @endif>
        <div class="hero-body">
            <div>
                <div class="title is-2 is-4-mobile has-text-white">{{ config('twincube.top.tagline') }}</div>
                <div class="subtitle is-5 has-text-white-ter">{{ config('twincube.top.tagline-sub') }}</div>
            </div>
        </div>
        <div id="top-hero-caption" class="has-text-white">{{ config('twincube.top.caption') }}</div>
    </section>
@endsection
