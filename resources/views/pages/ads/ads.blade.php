@extends('layout.template')
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">

@endsection

@section('top')

    @include('components.ads.nav_ads')

    @if(!auth()->check())

        @include('components.ads.sign_in')

    @endif
   
    
@endsection
@section('content')

<div class="container bg-white">
    <div class="row">
        
        @include('components.ads.sidebar')
        @include('components.ads.slider')
        
    </div>
    <div class="row">
       <div class="col-lg-12">
        
             @include('components.ads.single_content_and_map')
        </div>
    </div>
    <div class="row">
       
            @if(count($ad->videos)>0)
        
                @include('components.ads.video')
        
            @endif
    </div>
    <hr>
    <div class="row">
      
        @include('components.ads.limited_ads') 
    </div>
      
</div>
@endsection