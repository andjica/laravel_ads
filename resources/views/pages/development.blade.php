@extends('layout.template')
@section('appendCss')
@parent
    <link href="{{asset('/')}}css/heroic-features.css" rel="stylesheet">
    <link href="{{asset('/')}}css/blog-home.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
        @include('components.development.jumbo_header')
      
        @include('components.development.ads')
    </div>
@endsection