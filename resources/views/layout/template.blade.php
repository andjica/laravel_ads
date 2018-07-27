<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IederWatWils | @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    @section('appendCss')
    <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/')}}vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/')}}css/stylish-portfolio.min.css" rel="stylesheet">
    
    
    <script>
      const BASE_URL = "{{asset('/')}}";
      const TOKEN = "{{csrf_token()}}";
    </script>

    @show
  </head>

  <body id="page-top">
   
    
    @yield('top')
   

    @yield('content')

    <hr>
  
  @include('components.footer')
  @include('components.footer_bottom')
  
  
  