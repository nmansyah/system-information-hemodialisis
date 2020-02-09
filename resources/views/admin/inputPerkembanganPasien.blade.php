@extends('layouts.adminUser')

@section('title', 'Input Pasien Meninggal')

@section('content')

    <div class="x_content">

            <form class="form-horizontal form-label-left" action="/admin/inputPerkembanganPasien" method="post" value="post" novalidate>
            <span class="section">Masukkan Data Perkembangan Pasien</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="nama" class="form-control select2">
                        @foreach($pasien as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal Pemeriksaan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal" type="date" name="tanggal" data-validate-length-range="1,20" class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hb">HB <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="hb" name="hb" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ureum">Ureum <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="ureum" name="ureum" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kreatinin">Kreatinin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="kreatinin" name="kreatinin" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="obat">Obat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" multiple="multiple" name="obat[]">
                        @foreach($medicines as $medicine)
                            <option value="{{ $medicine->name }}">{{ $medicine->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPerkembanganPasien'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
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
    </script>
@endsection
