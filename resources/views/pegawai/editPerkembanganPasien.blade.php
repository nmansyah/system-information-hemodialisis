@extends('layouts.pegawaiUser')

@section('title', 'Edit Perkembangan Pasien')

@section('content')

    <div class="x_content">

            <form class="form-horizontal form-label-left" action="/pegawai/inputPerkembanganPasien/{{$perkembangan_pasien->id}}/update" method="post" value="post" novalidate>
            {{ csrf_field() }}
                @method('PUT')
            <span class="section">Masukkan Data Perkembangan Pasien</span>
            
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal Pemeriksaan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal" type="date" name="tanggal" data-validate-length-range="1,20" class="optional form-control col-md-7 col-xs-12" value="{{ $perkembangan_pasien->tanggal }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hb">HB <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="hb" name="hb" required="required" class="form-control col-md-7 col-xs-12" value="{{ $perkembangan_pasien->hb }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ureum">Ureum <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="ureum" name="ureum" required="required" class="form-control col-md-7 col-xs-12" value="{{ $perkembangan_pasien->ureum }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kreatinin">Kreatinin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="kreatinin" name="kreatinin" required="required" class="form-control col-md-7 col-xs-12" value="{{ $perkembangan_pasien->kreatinin }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="obat">Obat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="obat" name="obat" required="required" class="form-control col-md-7 col-xs-12" value="{{ $perkembangan_pasien->obat }}">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/pegawai/dataPerkembanganPasien'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
            </form>
        </div>

@endsection