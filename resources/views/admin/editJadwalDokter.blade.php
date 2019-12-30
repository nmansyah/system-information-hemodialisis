@extends('layouts.adminUser')

@section('title', 'Edit Jadwal Dokter')

@section('content')
    <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputJadwalDokter/{{$jadwal_dokter->id}}/update" method="post" value="post" novalidate>
        {{ csrf_field() }}
                @method('PUT')
        <span class="section">Edit Jadwal Dokter</span>

        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bulan">Bulan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" id="bulan" name="bulan" required="required" data-validate-minmax="1,100" class="form-control col-md-7 col-xs-12" value="{{ $jadwal_dokter->bulan }}">
                </div>
        </div>
    
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Senin</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari1" name="hari1">
                        <option selected>{{ $jadwal_dokter->hari1 }}</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Mid">Mid</option>
                        <option value="Sore">Sore</option>
                        <option value="Libur">Libur</option>
                    </select>
                </div>
        </div>      
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Selasa</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari2" name="hari2">
                        <option selected>{{ $jadwal_dokter->hari2 }}</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Mid">Mid</option>
                        <option value="Sore">Sore</option>
                        <option value="Libur">Libur</option>
                    </select>
                </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Rabu</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari3" name="hari3">
                        <option selected>{{ $jadwal_dokter->hari3 }}</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Mid">Mid</option>
                        <option value="Sore">Sore</option>
                        <option value="Libur">Libur</option>
                    </select>
                </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Kamis</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari4" name="hari4">
                        <option selected>{{ $jadwal_dokter->hari4 }}</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Mid">Mid</option>
                        <option value="Sore">Sore</option>
                        <option value="Libur">Libur</option>
                    </select>
                </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Jumat</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari5" name="hari5">
                        <option selected>{{ $jadwal_dokter->hari5 }}</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Mid">Mid</option>
                        <option value="Sore">Sore</option>
                        <option value="Libur">Libur</option>
                    </select>
                </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Sabtu</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari6" name="hari6">
                        <option selected>{{ $jadwal_dokter->hari6 }}</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Mid">Mid</option>
                        <option value="Sore">Sore</option>
                        <option value="Libur">Libur</option>
                    </select>
                </div>
        </div>
        <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/jadwalDokter'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Jadwal yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
            </div>
        </div>
        </form>
    </div>
@endsection