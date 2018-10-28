@extends('layout.template_admin')

@section('content')
<div class="content-wrapper">
@include('components.admin.nav')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <table class="table">
      <tr style="background-color:#F74FE4;">
      <!--Ovde ubacujemo, id, title, description, expares at -->
        <th>ID</th>
        <th>Tietel</th>
        <th>Omschrijving</th>
        <th>Verval datum</th>
        <th>Delete</th>
      </tr>
      @foreach($ads as $ad)
      <tr>
        <td> {{$ad->id}}</td>
        <td> {{$ad->title}}</td>
        <td> {{$ad->body}}</td>
        <td> {{$ad->expires}}</td>
        <th><a href="{{asset('/admin-delete/'.$ad->id)}}">Delete</a></th>
      </tr>
      @endforeach
    </table>
    @include('components.admin.table')
    </div>
   
</div>
@endsection