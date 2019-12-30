@extends('layouts.adminUser')

@section('title', 'Edit Kehadiran Pasien')

@section('content')

        <div class="x_content">

            <form class="form-horizontal form-label-left" action="/admin/inputKehadiranPasien/{{$kehadiran_pasien->id}}/update" method="post" value="post" novalidate>
            {{ csrf_field() }}
                @method('PUT')
            <span class="section">Masukkan Data Presensi Kehadiran Pasien</span>

            <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">{{ $kehadiran_pasien -> bulan}} </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="custom-select" required="required" id="bulan" name="bulan">
                        <option selected>Pilih Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desembe">Desembe</option>
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hadir">Jumlah Pasien Hadir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="hadir" name="hadir" required="required" class="form-control col-md-7 col-xs-12" value="{{ $kehadiran_pasien->hadir}}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tdk_hadir">Jumlah Pasien Tidak Hadir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="tdk_hadir" name="tdk_hadir" required="required" class="form-control col-md-7 col-xs-12" value="{{ $kehadiran_pasien->tdk_hadir}}">
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