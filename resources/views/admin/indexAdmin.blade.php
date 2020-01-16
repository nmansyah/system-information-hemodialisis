@extends('layouts.adminUser')

@section('title', 'Home')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-6 greeting">
        @include('layouts.alert')
        <h1>Hello Admin, Selamat Datang</h1>
  </div>
</div>
@endsection
