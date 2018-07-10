@extends('layout.template')

@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">
    <link href="{{asset('/')}}css/blog-home.css" rel="stylesheet">
@endsection
@section('top')

    @include('components.ads.nav_ads')
    <!--Postaviti sesiju, ako sesija postoji skloniti div sign_in -->
    @include('components.ads.sign_in')
    
@endsection
@section('content')
<div class="container">
        
         <!--Obavezno ici u jumbo_header  tamo ce biti prikazan koji kod treba 
            da se izvrsi kada se korisnik uloguje
        -->
        @include('components.recruitment.jumbo_header')
      
        @include('components.ads.ads')
    </div>
@endsection