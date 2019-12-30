@extends('layouts.adminUser')

@section('title', 'Input Edukasi')

@section('content')

    <div class="x_content">

        <form class="form-horizontal form-label-left" action="/admin/inputEdukasi" method="post" value="post" novalidate>
        <span class="section">Masukkan Edukasi Baru</span>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span class="required">*</span>
                </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal" type="date" name="tanggal" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desk">Deskripsi <span class="required">*</span>
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
            <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataEdukasi'">Cancel</button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
            {{ csrf_field() }}
            </div>
        </div>
        </form>
    </div>

@endsection