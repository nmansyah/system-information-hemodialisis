@extends('layouts.adminUser')

@section('title', 'Edit Pindah Jadwal')

@section('content')

    <div class="x_content">

    <form class="form-horizontal form-label-left" action="/admin/inputPerpindahanJadwal/{{$perpindahan_jadwal->id}}/update" method="post" value="post" novalidate>
            {{ csrf_field() }}
            @method('PUT')
        <span class="section">Edit Perpindahan Jadwal Sementara</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal" type="date" name="tanggal" data-validate-length-range="5,20" value="{{ $perpindahan_jadwal->tanggal }}" class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari dan Sesi</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" id="hari1" name="hari1">
                        <option selected>{{ $perpindahan_jadwal->hari1 }}</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>                
                <div class="col-8 col-md-4">
                <select class="custom-select" id="sesi1" name="sesi1">
                        <option selected>{{ $perpindahan_jadwal->sesi1 }}</option>
                        <option value="Sesi 1">Sesi 1</option>
                        <option value="Sesi 2">Sesi 2</option>
                        <option value="Sesi 3">Sesi 3</option>
                    </select>
                </div>
                </label>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPerpindahJadwal'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection


