@extends('layout.template')
@section('title')
    IederWatWils - Requitment
@endsection
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">
    <link href="{{asset('/')}}css/blog-home.css" rel="stylesheet">
@endsection
@section('top')

    @include('components.ads.nav_ads')
    @include('components.top_header')
    @if(!auth()->check())
        @include('components.ads.sign_in')
    @endif
    
@endsection
@section('content')
    @include('components.recruitment.jumbo_header')
    <div class="container">
        @include('components.recruitment.ads')
    </div>
@endsection