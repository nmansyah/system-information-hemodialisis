@extends('layouts.adminUser')

@section('title', 'Input Kehadiran Pasien')

@section('content')

        <div class="x_content">

            <form class="form-horizontal form-label-left" action="/admin/inputKehadiranPasien" method="post" value="post" novalidate>
            <span class="section">Masukkan Data Presensi Kehadiran Pasien</span>

            <div class="item form-group">
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bulan">Bulan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" id="bulan" name="bulan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hadir">Jumlah Pasien Hadir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="hadir" name="hadir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tdk_hadir">Jumlah Pasien Tidak Hadir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="tdk_hadir" name="tdk_hadir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataKehadiranPasien'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
            </form>
        </div>
@endsection