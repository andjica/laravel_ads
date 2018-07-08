@extends('layout.template')

@section('content')
    @include('components.development.nav')
    <div class="container">
        @include('components.acctypes.content')
        @include('components.acctypes.table')
    </div>
@endsection