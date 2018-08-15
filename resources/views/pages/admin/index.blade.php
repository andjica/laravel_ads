@extends('layout.template_admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
    </div>
    <table style="border:1px solid black;">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Expires at</th>
        <th>Delete</th>
      </tr>
      @foreach($ads as $ad)
      <tr style="border:1px solid black;">
        <td> {{$ad->id}}</td>
        <td> {{$ad->title}}</td>
        <td> {{$ad->body}}</td>
        <td> {{$ad->expires}}</td>
        <th><a href="{{asset('/admin-delete/'.$ad->id)}}">Delete</a></th>
      </tr>
      @endforeach
    </table>
</div>
@endsection