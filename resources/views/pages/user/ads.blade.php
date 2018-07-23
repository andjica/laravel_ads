@extends('layout.template')
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">

@endsection

@section('top')
    @include('components.ads.nav_ads')
    @include('components.user.top_info')
    
@endsection
@section('content')
<div class="container bg-light">
    <div class="row">
        
        @include('components.development.sidebar')
        
        @if ($ad)
        
            
            @include('components.ads.slider')

            
            </div>
            
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    @include('components.ads.content_and_map')
                </div>
            </div>

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