@extends('layouts.adminUser')

@section('title', 'Input Jadwal Dokter')

@section('content')
    <script type="text/javascript">
        $(document).ready(function(){
        $('.select2').select2();
        // $('.js-example-basic-multiple').select2();
        });
    </script>
    <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputJadwalDokter" method="post" value="post" novalidate>
        <span class="section">Masukkan Jadwal Dokter</span>

        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bulan">Bulan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" id="bulan" name="bulan" required="required" data-validate-minmax="1,100" class="form-control col-md-7 col-xs-12">
                </div>
        </div>
        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control select2" name="nama">
                  <option>Pilih Dokter..</option>
                  @foreach($dokter as $dk)
                  <option value="{{$dk->id}}">{{$dk->nama}}</option>
                  @endforeach
                </select>
                </div>
            </div>
            <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Hari Senin</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari1" name="hari1">
                        <option selected>Pilih Jadwal</option>
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
                        <option selected>Pilih Jadwal</option>
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
                        <option selected>Pilih Jadwal</option>
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
                        <option selected>Pilih Jadwal</option>
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
                        <option selected>Pilih Jadwal</option>
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
                        <option selected>Pilih Jadwal</option>
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