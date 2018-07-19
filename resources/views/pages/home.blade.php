@extends('layout.template')

@section('content')
    @include('components.nav')
    @include('components.header')
    @include('components.about')
    @include('components.home_ads')
    @include('components.services')
    @include('components.services_2')

    @if(!auth()->check())
        @include('components.sign_in') 
    @endif 

    @include('components.contact')
@endsection