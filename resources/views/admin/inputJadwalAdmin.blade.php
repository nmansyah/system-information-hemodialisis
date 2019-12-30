@extends('layouts.adminUser')

@section('title', 'Input Jadwal Admin')

@section('content')
<div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputJadwalAdmin" method="post" value="post" novalidate>
        <span class="section">Masukkan Jadwal Admin</span>

        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bulan">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="bulan" type="date" data-date="" data-date-format="DD MM YYYY" name="bulan" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="minggu">Minggu ke <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="minggu" name="minggu" required="required" class="form-control col-md-7 col-xs-12">
                </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-words="1" name="nama" required="required" type="text">
            </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Senin</label>                
                <div class="col-8 col-md-2">
                    <input class="form-control" id="hari1" name="hari1" type="time" required="required" placeholder="Masukan Jam">
                </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Selasa</label>                
                <div class="col-8 col-md-2">
                    <input class="form-control" id="hari2" name="hari2" type="time" required="required" placeholder="Masukan Jam">
                </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Rabu</label>                
                <div class="col-8 col-md-2">
                    <input class="form-control" id="hari3" name="hari3" type="time" required="required" placeholder="Masukan Jam">
                </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Kamis</label>                
                <div class="col-8 col-md-2">
                    <input class="form-control" id="hari4" name="hari4" type="time" required="required" placeholder="Masukan Jam">
                </div>
        </div><div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Jumat</label>                
                <div class="col-8 col-md-2">
                    <input class="form-control" id="hari5" name="hari5" type="time" required="required" placeholder="Masukan Jam">
                </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Sabtu</label>                
                <div class="col-8 col-md-2">
                    <input class="form-control" id="hari6" name="hari6" type="time" required="required" placeholder="Masukan Jam">
                </div>
        </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/jadwalAdmin'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Jadwal yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
            
@endsection