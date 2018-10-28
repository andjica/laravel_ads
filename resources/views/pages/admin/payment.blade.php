@extends('layout.template_admin')
@section('content')
<div class="content-wrapper">
@include('components.admin.nav')
    <div class="container-fluid">
    </div>
    @include('components.admin.admin_payment')
</div>