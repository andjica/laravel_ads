


@extends('layout.template')
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">

@endsection

@section('top')

 
    @include('components.ads.nav_ads')
    @include('components.user.top_info')


    @if(!auth()->check())
        @include('components.ads.sign_in')
    @endif

   
@endsection
@section('content')

<div class="container bg-dark">
    <div class="row">
        
        @include('components.ads.sidebar')
        @include('components.ads.slider')
        
    </div>
    @if($ad)
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
      <hr>
      @else
            <div class="col-lg-9 text-center">
                    
                <h1 class="text-danger" style="margin-top:150px;">
                
                    You havent posted an ad yet.
                        
                </h1>
            </div>
            </div>
            
        @endif
        
</div>
@endsection