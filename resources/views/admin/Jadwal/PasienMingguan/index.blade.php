@extends('layouts.adminUser')

@section('title', 'Jadwal Pasien Mingguan')

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Jadwal Mingguan Pasien</h2>
                <div class="clearfix"></div>
                @include('layouts.alert')
            </div>
                       @include('admin.Jadwal.PasienMingguan.pieces.senin')
                       @include('admin.Jadwal.PasienMingguan.pieces.selasa')
                       @include('admin.Jadwal.PasienMingguan.pieces.rabu')
                       @include('admin.Jadwal.PasienMingguan.pieces.kamis')
                       @include('admin.Jadwal.PasienMingguan.pieces.jumat')
                       @include('admin.Jadwal.PasienMingguan.pieces.sabtu')
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
