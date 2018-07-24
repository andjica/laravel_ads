@extends('layout.template')
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">

@endsection

@section('top')

    @include('components.ads.nav_ads')
    @include('components.top_header')

    @if(!auth()->check())
        @include('components.ads.sign_in')
    @endif

   
@endsection
@section('content')

<div class="container">
    <div class="row">
        
        @include('components.ads.sidebar')
        @include('components.ads.slider')
        
    </div>
    <div class="row">
       <div class="col-lg-12">
        
             @include('components.ads.content_and_map')
        </div>
    </div>
    <div class="row">
       
        
                @include('components.ads.video')
        
    </div>
    <hr>
    <div class="row">
      
        
        @include('components.ads.limited_ads') 
        
    </div>
      
</div>
@endsection