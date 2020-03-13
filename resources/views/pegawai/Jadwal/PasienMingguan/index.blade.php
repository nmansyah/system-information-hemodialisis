@extends('layouts.pegawaiUser')

@section('title', 'Jadwal Pasien Mingguan')

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Jadwal Mingguan Pasien</h2>
                <div class="clearfix"></div>
                @include('layouts.alert')
            </div>
                       @include('pegawai.Jadwal.PasienMingguan.pieces.senin')
                       @include('pegawai.Jadwal.PasienMingguan.pieces.selasa')
                       @include('pegawai.Jadwal.PasienMingguan.pieces.rabu')
                       @include('pegawai.Jadwal.PasienMingguan.pieces.kamis')
                       @include('pegawai.Jadwal.PasienMingguan.pieces.jumat')
                       @include('pegawai.Jadwal.PasienMingguan.pieces.sabtu')
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.dataTable').dataTable();
        })
    </script>
@endsection
