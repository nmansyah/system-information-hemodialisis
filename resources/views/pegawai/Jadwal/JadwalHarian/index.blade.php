@extends('layouts.pegawaiUser')

@section('title', 'Jadwal Pasien Harian')

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Jadwal Harian Pasien</h2>
                <div class="clearfix"></div>
            </div>
            @include('pegawai.Jadwal.PasienHarian.pieces.senin')
            @include('pegawai.Jadwal.PasienHarian.pieces.selasa')
            @include('pegawai.Jadwal.PasienHarian.pieces.rabu')
            @include('pegawai.Jadwal.PasienHarian.pieces.kamis')
            @include('pegawai.Jadwal.PasienHarian.pieces.jumat')
            @include('pegawai.Jadwal.PasienHarian.pieces.sabtu')
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
