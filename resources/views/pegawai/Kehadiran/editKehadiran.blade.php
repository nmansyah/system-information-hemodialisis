@extends('layouts.pegawaiUser')

@section('title', 'Input Kehadiran')

@section('content')
    <div class="x_content">
        @include('layouts.alert')
        <form class="form-horizontal form-label-left"
              action="/pegawai/{{ $pasien->id }}/inputKehadiran/{{ $kehadiran->id }}" method="post" value="post"
              novalidate>
            @method('put')
            <span class="section">Masukkan Kehadiran</span>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="tanggal" type="date" data-date="" data-date-format="DD MM YYYY" name="tanggal"
                           class="optional form-control col-md-7 col-xs-12" value="{{ $kehadiran->tanggal }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kehadiran">Kehadiran <span
                        class="required">*</span></label>
                <div class="col-8 col-md-4">
                    <select class="custom-select" required="required" id="kehadiran" name="kehadiran">
                        <option @if($kehadiran->kehadiran == 'Hadir') selected @endif value="Hadir">Hadir</option>
                        <option @if($kehadiran->kehadiran == 'Tidak Hadir') selected @endif value="Tidak Hadir">Tidak
                            Hadir
                        </option>
                    </select>
                </div>
                <br>
                <br>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"
                                onclick="location.href='/pegawai/{{ $pasien->id }}/dataKehadiran'">Cancel
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
