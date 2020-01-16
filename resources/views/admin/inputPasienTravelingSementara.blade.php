@extends('layouts.adminUser')

@section('title', 'Input Pasien Traveling Sementara')

@section('content')
        <script type="text/javascript">
            $(document).ready(function(){
            $('.select2').select2();
            // $('.js-example-basic-multiple').select2();
            });
        </script>

        <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputPasienTravelingSementara" method="post" value="post" novalidate>
            <span class="section">Masukkan Data Pasien Traveling Sementara</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control select2" name="nama">
                  <option>Pilih Pasien..</option>
                  @foreach($pasien as $pas)
                  <option value="{{$pas->id}}">{{$pas->nama}}</option>
                  @endforeach
                </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Telepon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_mulai">Tanggal Mulai <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal_mulai" type="date" name="tanggal_mulai" class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_selesai">Tanggal Mulai <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal_selesai" type="date" name="tanggal_selesai" class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tujuan">Tujuan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="tujuan" name="tujuan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPasienTraveling'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
            </form>
        </div>
@endsection