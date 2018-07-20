@extends('layout.template')
@section('title')
    IederWatWils Account Types
@endsection
@section('content')
    @include('components.ads.nav_ads')
    <div class="container">
        <div class="row my-4">
            @include('components.acctypes.list')
            @include('components.acctypes.content')
            
        </div>
        
    </div>
@endsection