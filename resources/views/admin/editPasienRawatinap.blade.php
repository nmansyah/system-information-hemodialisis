@extends('layouts.adminUser')

@section('title', 'Edit Pasien Rawat Inap')

@section('content')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.select2').select2();
      // $('.js-example-basic-multiple').select2();
    });
  </script>

        <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputPasienRawatinap/{{$pasien_rawatinap->id}}/update" method="post" value="post" novalidate>
        {{ csrf_field() }}
            @method('PUT')
        <span class="section">Edit Data Pasien Rawat Inap</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12">{{ $pasien_rawatinap->alamat }}</textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Telepon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12" value="{{ $pasien_rawatinap->no_hp }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal" type="date" data-date="" data-date-format="DD/MM/YYYY" name="tanggal" class="optional form-control col-md-7 col-xs-12" value="{{ $pasien_rawatinap->tanggal }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit">Unit/Bangsal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="unit" type="text" class="optional form-control col-md-7 col-xs-12" value="{{ $pasien_rawatinap->unit }}" readonly>
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPasienRawatinap'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
            </form>
        </div>
@endsection