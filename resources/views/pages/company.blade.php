@extends('layout.template')
@section('title')
    IederWatWils - Auto's
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
		
		@include('components.company.jumbo_header')
		<hr>
        @include('components.company.ads')
         
    </div>
@endsection 