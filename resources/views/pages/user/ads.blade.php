


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
@include('components.user.user_header')
<div class="container">

    <div class="row my-4">
        
    @if($ad)
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