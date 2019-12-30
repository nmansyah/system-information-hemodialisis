@extends('layouts.adminUser')

@section('title', 'Input Kegiatan')

@section('content')

    <div class="x_content">

        <form class="form-horizontal form-label-left" novalidate>
        <span class="section">Masukkan Kegiatan Baru</span>

        <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tgl" type="date" name="tgl" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Desk">Deskripsi <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="desk" required="required" name="desk" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo" >Masukkan Photo <span class="required">*</span>
            </label>
            <br><input id="photo" name="photo" type="file"><br>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
            </div>
        </div>
        </form>
    </div>

@endsection