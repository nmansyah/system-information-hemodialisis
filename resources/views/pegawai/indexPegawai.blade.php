@extends('layouts.pegawaiUser')

@section('title', 'Home')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            @include('layouts.alert')
        </div>
        <div class="col-md-6 greeting">
            <h1>Selamat Datang di Hemodialisis</h1>
        </div>
    </div>
@endsection
