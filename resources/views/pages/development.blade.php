@extends('layout.template')
@section('title')
    IederWatWils - Development
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

	<div class="container">
    <div class="row">
		
		@include('components.development.jumbo_header')
	</div>

    
        @include('components.development.ads')
         
    </div>
@endsection       

      
        
