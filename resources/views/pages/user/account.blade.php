@extends('layout.template')
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">
    <link href="{{asset('/')}}css/blog-home.css" rel="stylesheet">
@endsection

@section('top')
    @include('components.ads.nav_ads')
    
   
    
@endsection
@section('content')

<div class="container bg-light">
    <div class="row">
        
        @include('components.sidebar')
        @include('components.ads.slider')
        
    </div>
    <div class="row">
        @include('components.ads.content_and_map')

    </div>
   
</div>
@endsection