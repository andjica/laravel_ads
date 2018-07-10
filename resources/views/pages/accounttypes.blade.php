@extends('layout.template')

@section('content')
    @include('components.ads.nav_ads')
    <div class="container">
        @include('components.acctypes.content')
        @include('components.acctypes.table')
    </div>
@endsection