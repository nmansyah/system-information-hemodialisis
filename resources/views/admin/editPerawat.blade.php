@extends('layouts.adminUser')

@section('title', 'Edit Perawat')

@section('content')

<div class="x_content">

            <form class="form-horizontal form-label-left" action="/admin/inputPerawat/{{$perawat->id}}/update" method="post" value="post" novalidate>
                {{ csrf_field() }}
                @method('PUT')
            <span class="section">Edit Data Perawat</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama" >Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-words="1" name="nama" required="required" value="{{ $perawat->nama }}" type="text">
                </div>
            </div>
            <!-- <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="jenis_kelamin" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="jenis_kelamin" value="male"> &nbsp; Male &nbsp;
                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="jenis_kelamin" value="female"> Female
                  </label>
                </div>
              </div>
            </div> -->
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pendidikan">Pendidikan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="pendidikan" class="form-control col-md-7 col-xs-12" name="pendidikan" required="required" value="{{ $perawat->pendidikan }}" type="text">
                </div>
            </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{ $perawat->email }}">
                        </div>
                      </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12">{{ $perawat->alamat }}</textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Telepon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12" value="{{ $perawat->no_hp}}">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPerawat'">Cancel</button>
                <button id="send" type="submit" class="btn btn-success" onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit</button>
                {{ csrf_field() }}
                </div>
            </div>
            </form>
        </div>
@endsection
