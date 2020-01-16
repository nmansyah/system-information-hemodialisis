@extends('layouts.adminUser')

@section('title', 'Edit Pasien Traveling Sementara')

@section('content')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.select2').select2();
      // $('.js-example-basic-multiple').select2();
    });
  </script>

        <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputPasienTravelingSementara/{{$pasien_traveling_sementara->id}}/update" method="post" value="post" novalidate>
        {{ csrf_field() }}
            @method('PUT')
        <span class="section">Edit Data Pasien Traveling Sementara</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12">{{ $pasien_traveling_sementara->alamat }}</textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Telepon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12" value="{{ $pasien_traveling_sementara->no_hp }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_mulai">Tanggal Mulai <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal_mulai" type="date" data-date="" data-date-format="DD/MM/YYYY" name="tanggal_mulai" class="optional form-control col-md-7 col-xs-12" value="{{ $pasien_traveling_sementara->tanggal_mulai }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_selesai">Tanggal Selesai <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal_selesai" type="date" data-date="" data-date-format="DD/MM/YYYY" name="tanggal_selesai" class="optional form-control col-md-7 col-xs-12" value="{{ $pasien_traveling_sementara->tanggal_selesai }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tujuan">Tujuan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="tujuan" name="tujuan" required="required" class="form-control col-md-7 col-xs-12" value="{{ $pasien_traveling_sementara->tujuan }}">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPasienTravelingSementara'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
            </form>
        </div>
@endsection