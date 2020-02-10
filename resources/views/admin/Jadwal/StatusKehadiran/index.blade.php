@extends('layouts.adminUser')

@section('title', 'Status Kehadiran')

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Status Kehadiran</h2>
                <div class="clearfix"></div>
            </div>
            @php
                $now = \Carbon\Carbon::now()
            @endphp
            <h3>{{ date('d M Y', strtotime($now)) }}</h3>
            <div class="x_content">
                @include('admin.Jadwal.StatusKehadiran.Pieces.sesi1')
                <br>
                @include('admin.Jadwal.StatusKehadiran.Pieces.sesi2')
                <br>
                @include('admin.Jadwal.StatusKehadiran.Pieces.sesi3')
            </div>
        </div>
    </div>
@endsection
