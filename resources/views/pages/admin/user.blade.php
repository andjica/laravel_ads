@extends('layout.template_admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{asset('/admin')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Users</li>
      </ol>
       
    </div>
</div>
@endsection