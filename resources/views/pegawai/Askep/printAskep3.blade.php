<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta, title, CSS, favicons, etc. -->
    {{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--    <link rel="stylesheet" href="{{ public_path('css/master.css') }}">--}}
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist/css/bootstrap-grid.min.css') }}">
    <style>
        .column-kiri {
            float: left;
            width: 30%;
        }

        .column-kanan {
            float: left;
            width: 70%;
        }

        .column-checkbox {
            float: left;;
            width: 40%;
        }

        .column-label-chackbox{
            float: left;
            width: 60%;
        }

        /* Clear floats after the columns */
        .baris:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
<div class="container-fluid body">
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="x_content">
                    <form class="form-horizontal form-label-left"
                          novalidate>
                        <span class="section">Catatan Terintegrasi Hemodialisis</span>
                        <br>
                        <h2 class="section">A. IDENTITAS KLIEN</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama
                                            Pasien <span
                                                class="required">*</span>
                                        </label>
                                        <textarea readonly class="form-control col-md-7 col-xs-12">{{ ucwords($askep->pasien['nama']) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Umur <span class="required">*</span></label>
                                        <textarea class="form-control col-xs-4" readonly>{{ $askep->pasien['usia'] }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Jenis Kelamin <span
                                                class="required">*</span></label>
                                        <textarea class="form-control col-md-7 col-xs-12" readonly>{{ ucwords($askep->pasien['jenis_kelamin']) }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label">Alamat
                                            <span
                                                class="required">*</span>
                                        </label>
                                        <textarea id="alamat" readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->pasien['alamat'] }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label" for="no_rm">Nomor CM
                                            <span
                                                class="required">*</span>
                                        </label>
                                        <textarea id="alamat" readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->pasien['no_cm'] }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label" for="no_rm">Tanggal Pemeriksaan
                                            <span
                                                class="required">*</span>
                                        </label>
                                        <textarea id="alamat" readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->tanggal_pemeriksaan }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label" for="no_rm">Jam
                                        </label>
                                        <textarea id="alamat" readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->sesi }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label">Hemodialisa ke
                                            - <span
                                                class="required">*</span>
                                        </label>
                                        <textarea readonly class="form-control col-md-7 col-xs-12">{{ $askep->hemodialisa_number }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label">Tipe Dialiser
                                            - <span
                                                class="required">*</span>
                                        </label>
                                        <textarea readonly class="form-control col-md-7 col-xs-12">{{ $askep->dialiser_type }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <h3 style="color: #73879c">Pengkajian Keperawatan</h3>
                        <hr>
                        <h4>Keluhan</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-form-label">Keluhan
                                            Utama <span
                                                class="required">*</span></label>
                                        <div class="form-group">
                                            <label class="col-form-label"><input type="checkbox" style="display: inline"
                                                                                 name="keluhan_utama_sesak_nafas"
                                                                                 value="true"
                                                                                 @if($askep->keluhan_utama_sesak_nafas) checked @endif>Sesak Nafas</label>
                                            <label class="col-form-label"><input type="checkbox" style="display: inline"
                                                                                 value="true"
                                                                                 @if($askep->keluhan_utama_mual) checked @endif>Mual, Muntah</label>
                                            <label class="col-form-label"><input type="checkbox" style="display: inline"
                                                                                 name="keluhan_utama_gatal" value="true"
                                                                                 @if($askep->keluhan_utama_gatal) checked @endif>Gatal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Pemeriksaan Fisik</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-form-label">Keadaan Umum <span class="required">*</span></label>
                                        <br>
                                        <input style="display: inline" type="radio" @if($askep->keadaan_umum == 'Baik') Checked @endif>Baik
                                        <input style="display: inline" type="radio" @if($askep->keadaan_umum == 'Sedang') Checked @endif>Sedang
                                        <input style="display: inline" type="radio" @if($askep->keadaan_umum == 'Buruk') Checked @endif>Buruk
                                    </div>

                                    <label>Konjungtiva
                                        <span
                                            class="required">*</span></label>
                                    <div class="form-group">
                                        <label class="col-form-label"><input type="radio" style="display: inline" @if($askep->konjungtiva == 'Tidak Anemis') checked @endif>Tidak Anemis</label>
                                        <label class="col-form-label"><input type="radio" style="display: inline" @if($askep->konjungtiva == 'Anemis') checked @endif>Anemis</label>
                                    </div>

                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Ekstrimitas
                                            <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="ekstrimitas_not_edema_or_dehidrasi"
                                                           @if($askep->ekstrimitas_not_edema_or_dehidrasi) checked
                                                           @endif
                                                           value="true">
                                                    Tidak Edema/Dehidrasi
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="ekstrimitas_dehidrasi" value="true"
                                                           @if($askep->ekstrimitas_dehidrasi) checked @endif>
                                                    Dehidrasi
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="ekstrimitas_edema" value="true"
                                                           @if($askep->ekstrimitas_edema) checked @endif>
                                                    Edema
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="ekstrimitas_edema_anasarka"
                                                           value="true"
                                                           @if($askep->ekstrimitas_edema_anasarka) checked @endif>
                                                    Edema Anasarka
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="ekstrimitas_pucat_and_dingin"
                                                           value="true"
                                                           @if($askep->ekstrimitas_pucat_and_dingin) checked @endif>
                                                    Pucat&Dingin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan
                                            Kering <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="bb" class="form-control col-md-7 col-xs-12"
                                                   name="berat_badan_kering" required="required"
                                                   value="{{ $askep->berat_badan_kering }}"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan
                                            Pre HD <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="bb" class="form-control col-md-7 col-xs-12"
                                                   name="berat_badan_pre_hd" required="required"
                                                   value="{{ $askep->berat_badan_pre_hd }}"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan HD
                                            <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="bb" class="form-control col-md-7 col-xs-12" name="berat_badan_hd"
                                                   required="required"
                                                   type="number" value="{{ $askep->berat_badan_hd }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Akses
                                            Vaskular <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="akses_vaskular"
                                                           value="AV-Fistula"
                                                           required @if($askep->akses_vaskular) checked @endif>
                                                    AV-Fistula
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="akses_vaskular"
                                                           value="Femoral"
                                                           @if($askep->akses_vaskular) checked @endif>
                                                    Femoral
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">HD
                                            Kateter <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="hd_kateter"
                                                           value="Subclavia" required
                                                           @if($askep->hd_kateter == 'Subclavia') checked @endif>
                                                    Subclavia
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="hd_kateter"
                                                           value="Jugular"
                                                           @if($askep->hd_kateter == 'Jugular') checked @endif>
                                                    Jugular
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="hd_kateter"
                                                           value="Femolar"
                                                           @if($askep->hd_kateter == 'Femolar') checked @endif>
                                                    Femoral
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengkajian">Pemeriksaan
                                            Penunjang </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="pem_penunjang" class="form-control col-md-7 col-xs-12"
                                                   name="pemeriksaan_penunjang"
                                                   type="text" value="{{ $askep->pemeriksaan_penunjang }}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Diagnosa
                                            Keperawatan <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="diagnosa_kelebihan_volume_cairan"
                                                           value="true"
                                                           @if($askep->diagnosa_kelebihan_volume_cairan) checked @endif>
                                                    1. Kelebihan volume cairan
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="diagnosa_resiko_ketidakstabilan_tekanan_darah"
                                                           value="true"
                                                           @if($askep->diagnosa_resiko_ketidakstabilan_tekanan_darah) checked @endif>
                                                    2. Resiko ketidakstabilan tekanan darah
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="diagnosa_gangguan_keseimbangan_elektrolit"
                                                           value="true"
                                                           @if($askep->diagnosa_gangguan_keseimbangan_elektrolit) checked @endif>
                                                    3. Gangguan keseimbangan elektrolit
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="diagnosa_resiko_ketidakstabilan_kadar_gula_darah"
                                                           value="true"
                                                           @if($askep->diagnosa_resiko_ketidakstabilan_kadar_gula_darah) checked @endif>
                                                    4. Resiko ketidakstabilan kadar gula darah
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="diagnosa_resiko_infeksi" value="true"
                                                           @if($askep->diagnosa_resiko_infeksi) checked @endif>
                                                    5. Resiko Infeksi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Intervensi Keperawatan (rekapitulasi pre-intra dan post HD) </h4>

                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi
                                            Keperawatan <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_monitor_berat_badan"
                                                           @if($askep->intervensi_keperawatan_monitor_berat_badan) checked
                                                           @endif
                                                           value="true">
                                                    Monitor berat badan, intake output
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_penkes"
                                                           @if($askep->intervensi_keperawatan_penkes) checked @endif
                                                           value="true">
                                                    PENKES: diit, AV Shuut
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_lakukan_akses_vaskular"
                                                           @if($askep->intervensi_keperawatan_lakukan_akses_vaskular) checked
                                                           @endif
                                                           value="true">
                                                    Lakukan Akses Vaskular: Femoral, HD cath, AV Shunt
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_lakukan_hd"
                                                           @if($askep->intervensi_keperawatan_lakukan_hd) checked @endif
                                                           value="true">
                                                    Lakukan HD sesuai program
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_monitor_infeksi"
                                                           @if($askep->intervensi_keperawatan_monitor_infeksi) checked
                                                           @endif
                                                           value="true">
                                                    Monitor tanda dan gejala infeksi
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_pasien_mulai_hipotensi"
                                                           @if($askep->intervensi_keperawatan_pasien_mulai_hipotensi) checked
                                                           @endif
                                                           value="true">
                                                    Bila pasien mulai hipotensi
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_keperawatan_monitor_kompilasi"
                                                           @if($askep->intervensi_keperawatan_monitor_kompilasi) checked
                                                           @endif
                                                           value="true">
                                                    Monitor kompilasi selama HD
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi
                                            Kolaborasi <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_program_hd"
                                                           value="true"
                                                           @if($askep->intervensi_kolaborasi_program_hd) checked @endif>
                                                    Program HD
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_transfusi_darah"
                                                           value="true"
                                                           @if($askep->intervensi_kolaborasi_transfusi_darah) checked @endif>
                                                    Transfusi darah
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_diit"
                                                           value="true"
                                                           @if($askep->intervensi_kolaborasi_diit) checked @endif>
                                                    Kolaborasi diit
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_pemberian_ca_glukonas"
                                                           @if($askep->intervensi_kolaborasi_pemberian_ca_glukonas) checked
                                                           @endif
                                                           value="true">
                                                    Pemberian Ca Glukonas
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_antibiotik"
                                                           @if($askep->intervensi_kolaborasi_antibiotik) checked @endif
                                                           value="true">
                                                    Pemberian Antibiotik
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_antipiretik_and_analgetik"
                                                           @if($askep->ntervensi_kolaborasi_antipiretik_and_analgetik) checked
                                                           @endif
                                                           value="true">
                                                    Pemberian Antipiretik dan analgetik
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_pemberian_preparat_besi"
                                                           @if($askep->intervensi_kolaborasi_pemberian_preparat_besi) checked
                                                           @endif
                                                           value="true">
                                                    Pemberian preparat besi
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="intervensi_kolaborasi_obat_emegensi"
                                                           @if($askep->intervensi_kolaborasi_obat_emegensi) checked
                                                           @endif
                                                           value="true">
                                                    Obat-obat emegensi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3>Instruksi Medik</h3>
                                    <br>
                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Resep
                                            HD <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="resep_hd"
                                                           value="Inisiasi" required
                                                           @if($askep->resep_hd == 'Inisiasi') checked @endif>
                                                    Inisiasi
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="resep_hd"
                                                           value="Akut"
                                                           @if($askep->resep_hd == 'Akut') checked @endif>
                                                    Akut
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="resep_hd"
                                                           value="Rutin"
                                                           @if($askep->resep_hd == 'Rutin') checked @endif>
                                                    Rutin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">TD <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="dialisir" class="form-control col-md-7 col-xs-12" name="td"
                                                   required="required"
                                                   type="number" value="{{ $askep->td }}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QB <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qb"
                                                   required="required"
                                                   value="{{ $askep->qb }}"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QD <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qd"
                                                   required="required"
                                                   value="{{ $askep->qd }}"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">UF Goal
                                            <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="dialisir" class="form-control col-md-7 col-xs-12" name="uf_goal"
                                                   required="required"
                                                   value="{{ $askep->uf_goal }}"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Dialisat
                                            <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="dialisat_bicarbonat" value="true"
                                                           @if( $askep->dialisat_bicarbonat) checked @endif>
                                                    Bicarbonat
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Conductivity
                                            <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="dialisat" class="form-control col-md-7 col-xs-12"
                                                   name="conductivity" required="required"
                                                   type="number" value="{{ $askep->conductivity }}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Temperatur
                                            <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="dialisat" class="form-control col-md-7 col-xs-12"
                                                   name="temperatur" required="required"
                                                   value="{{ $askep->temperatur }}"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Heparinisasi
                                            <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="heparinisasi_standar" value="true"
                                                           @if( $askep->heparinisasi_standar) checked @endif>
                                                    Standar
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="heparinisasi_mini" value="true"
                                                           @if($askep->heparinisasi_mini) checked @endif>
                                                    Mini
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="heparinisasi_free_heparin"
                                                           value="true"
                                                           @if($askep->heparinisasi_free_heparin) checked @endif>
                                                    Free Heparin
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="heparinisasi_lmwh" value="true"
                                                           @if($askep->heparinisasi_lmwh) checked @endif>
                                                    LMWH
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <br><br>
                                    <h2 class="section">B. IDENTITAS Penanggung Jawab</h2>
                                    <hr>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Perawat
                                            Bertugas <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control select2" name="perawat_id">
                                                <option>Pilih Perawat..</option>
                                                @foreach($perawat as $prw)
                                                    @if ( $askep->perawat_id == $prw->id)
                                                        <option value="{{ $prw->id }}"
                                                                selected>{{ $prw->nama }}</option>
                                                    @else
                                                        <option value="{{$prw->id}}">{{$prw->nama}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>
</body>
</html>
