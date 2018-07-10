@extends('layout.template')

@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">
    <link href="{{asset('/')}}css/blog-home.css" rel="stylesheet">
@endsection
@section('top')
@include('components.ads.sign_in')
    @include('components.ads.nav_ads')
@endsection
@section('content')
<div class="container">
        @include('components.ads.nav_ads')
        @include('components.recruitment.jumbo_header')
      
        @include('components.ads.ads')
    </div>
@endsection