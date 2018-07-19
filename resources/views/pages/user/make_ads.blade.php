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
       
        <!--za formu -->
        <form action="{{asset('/insert')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" required>
            <select name='category'>
                @foreach ($categories as $c)
                    <option value="{{$c->id}}">{{$c->category}}</option>
                @endforeach
            </select>
            <textarea name="body" cols="10" rows="5"></textarea>
            <input type="text" name="phone">

            @can('upload-video')
                Select your videos<input type="file" name="videos[]" multiple>
            @endcan
            
            Select your images<input type="file" name="pictures[]" multiple>
            <input type="submit" value="Post your ad">
        </form>

        @foreach($errors->all() as $e)
            {{$e}} </br>
        @endforeach

        @if(!empty(session('message')))

            {{session('message')}}

        @endif

    </div>
   
   
</div>
@endsection