@extends('layouts.adminUser')

@section('title', 'Input Pasien')

@section('content')

    <div class="x_content">
        @include('layouts.alert')
        <form class="form-horizontal form-label-left" action="/admin/inputPasien" method="post" value="post" novalidate>
            <span class="section">Masukkan Data Pasien</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_cm">Nomor CM <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="no_cm" name="no_cm" required="required" value="{{ old('no_cm') }}"
                           class="form-control col-md-7 col-xs-12">
                    @if($errors->has('no_cm'))
                        <p>{{ $errors->first('no_cm') }}</p>
                    @endif
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="4"
                           data-validate-words="1" name="nama" required="required" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="jenkel" class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default" data-toggle-class="btn-primary"
                               data-toggle-passive-class="btn-default">
                            <input type="radio" name="jenis_kelamin" value="male"> &nbsp; Male &nbsp;
                        </label>
                        <label class="btn btn-primary" data-toggle-class="btn-primary"
                               data-toggle-passive-class="btn-default">
                            <input type="radio" name="jenis_kelamin" value="female"> Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="alamat" required="required" name="alamat"
                              class="form-control col-md-7 col-xs-12"></textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Telepon <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="no_hp" name="no_hp" required="required"
                           class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usia">Usia <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="usia" name="usia" required="required" data-validate-minmax="1,100"
                           class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="riwayat">Riwayat Penyakit <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="riwayat" class="form-control col-md-7 col-xs-12" name="riwayat" required="required"
                           type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="asuransi">Asuransi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="asuransi" class="form-control select2 asuransi-input" required>
                        @foreach($insurances as $insurance)
                            <option value="{{ $insurance }}">{{ $insurance }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input placeholder="Mohon isi asuransi anda"
                           class="form-control col-md-7 col-xs-12 asuransi-text-input" name="asuransi_text" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required"
                       class="col-2 col-form-label">Jadwal</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" required="required" id="hari1" name="hari1">
                        <option value="Kosong" selected>Hari 1</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>
                <div class="col-8 col-md-4">
                    <select class="custom-select" required="required" id="sesi1" name="sesi1">
                        <option value="Kosong" selected>Sesi ..</option>
                        <option value="Sesi 1">Sesi 1</option>
                        <option value="Sesi 2">Sesi 2</option>
                        <option value="Sesi 3">Sesi 3</option>
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input"
                       class="col-2 col-form-label">Jadwal</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" id="hari2" name="hari2">
                        <option value="Kosong" selected>Hari 2</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>
                <div class="col-8 col-md-4">
                    <select class="custom-select" id="sesi2" name="sesi2">
                        <option value="Kosong" selected>Sesi ..</option>
                        <option value="Sesi 1">Sesi 1</option>
                        <option value="Sesi 2">Sesi 2</option>
                        <option value="Sesi 3">Sesi 3</option>
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input"
                       class="col-2 col-form-label">Jadwal</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" id="hari3" name="hari3">
                        <option value="Kosong" selected>Hari 3</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>
                <div class="col-8 col-md-4">
                    <select class="custom-select" id="sesi3" name="sesi3">
                        <option value="Kosong" selected>Sesi ..</option>
                        <option value="Sesi 1">Sesi 1</option>
                        <option value="Sesi 2">Sesi 2</option>
                        <option value="Sesi 3">Sesi 3</option>
                    </select>
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPasien'">Cancel
                    </button>
                    <button id="send" type="submit" name="button" class="btn btn-success"
                            onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit
                    </button>
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection
@section('jsScript')
    <script>
        $(document).ready(function () {
            $('.select2').select2()
        })
        $('.asuransi-text-input').hide()
        $('.asuransi-input').change(function (e) {
            if (e.target.value === 'Lain - lain') {
                $('.asuransi-text-input').show()
            } else {
                $('.asuransi-text-input').hide()
            }
        })
    </script>
@endsection
