@extends('layouts.adminUser')

@section('title', 'Input Pasien Meninggal')

@section('content')
    <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputPasienMeninggal" method="post" value="post"
              novalidate>
            <span class="section">Masukkan Data Pasien Meninggal</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" name="nama">
                        @foreach($pasien as $psn)
                            <option value="{{$psn->id}}">{{$psn->nama}}</option>
                        @endforeach
                    </select>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="tanggal" type="date" data-date="" data-date-format="DD MM YYYY" name="tanggal"
                           class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPasienMeninggal'">
                        Cancel
                    </button>
                    <button id="send" type="submit" class="btn btn-success"
                            onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit
                    </button>
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection
@section('jsScript')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
