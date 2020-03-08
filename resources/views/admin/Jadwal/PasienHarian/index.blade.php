@extends('layouts.adminUser')

@section('title', 'Jadwal Pasien Harian')

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Jadwal Harian Pasien</h2>
                <div class="clearfix"></div>
                @include('layouts.alert')
            </div>
            @include('admin.Jadwal.PasienHarian.pieces.today')
            {{--            @include('admin.Jadwal.PasienHarian.pieces.senin')--}}
            {{--            @include('admin.Jadwal.PasienHarian.pieces.selasa')--}}
            {{--            @include('admin.Jadwal.PasienHarian.pieces.rabu')--}}
            {{--            @include('admin.Jadwal.PasienHarian.pieces.kamis')--}}
            {{--            @include('admin.Jadwal.PasienHarian.pieces.jumat')--}}
            {{--            @include('admin.Jadwal.PasienHarian.pieces.sabtu')--}}
        </div>
    </div>
@endsection
@section('jsScript')
    <script>
        $(document).ready(function () {
            $('.dataTable').dataTable();
        })
    </script>
@endsection
