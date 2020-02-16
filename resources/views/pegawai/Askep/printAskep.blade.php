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
    <link rel="stylesheet" href="{{ public_path('bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('bootstrap-4.4.1-dist/css/bootstrap-grid.min.css') }}">
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

        .column-label-chackbox {
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
                                            Pasien
                                        </label>
                                        <textarea readonly
                                                  class="form-control col-md-7 col-xs-12">{{ ucwords($askep->pasien['nama']) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Umur </label>
                                        <textarea class="form-control col-xs-4"
                                                  readonly>{{ $askep->pasien['usia'] }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Jenis Kelamin </label>
                                        <textarea class="form-control col-md-7 col-xs-12"
                                                  readonly>{{ ucwords($askep->pasien['jenis_kelamin']) }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label">Alamat
                                        </label>
                                        <textarea id="alamat" readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->pasien['alamat'] }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label" for="no_rm">Nomor CM
                                        </label>
                                        <textarea id="alamat" readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->pasien['no_cm'] }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label" for="no_rm">Tanggal Pemeriksaan
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
                                            -
                                        </label>
                                        <textarea readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->hemodialisa_number }}</textarea>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label">Tipe Dialiser
                                            -
                                        </label>
                                        <textarea readonly
                                                  class="form-control col-md-7 col-xs-12">{{ $askep->dialiser_type }}</textarea>
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
                                        <label class="col-form-label">Keluhan Utama <span
                                                class="required">*</span></label>
                                        <textarea class="form-control" readonly>@if($askep->keluhan_utama_sesak_nafas)
                                                Sesak
                                                Nafas @endif @if($askep->keluhan_utama_sesak_nafas && ($askep->keluhan_utama_mual || $askep->keluhan_utama_gatal))
                                                , @endif @if($askep->keluhan_utama_mual) Mual,
                                            Muntah @endif @if($askep->keluhan_utama_mual && $askep->keluhan_utama_gatal)
                                                , @endif @if($askep->keluhan_utama_gatal) Gatal @endif </textarea>
                                    </div>
                                    {{--                                    <input type="checkbox" style="display: inline"--}}
                                    {{--                                           name="keluhan_utama_sesak_nafas"--}}
                                    {{--                                           value="true"--}}
                                    {{--                                           @if($askep->keluhan_utama_sesak_nafas) checked @endif>Sesak Nafas--}}
                                    {{--                                    <input type="checkbox" style="display: inline"--}}
                                    {{--                                           value="true"--}}
                                    {{--                                           @if($askep->keluhan_utama_mual) checked @endif>Mual, Muntah--}}
                                    {{--                                    <input type="checkbox" style="display: inline"--}}
                                    {{--                                           name="keluhan_utama_gatal" value="true"--}}
                                    {{--                                           @if($askep->keluhan_utama_gatal) checked @endif>Gatal--}}
                                </div>
                            </div>
                        </div>

                        <h4>Pemeriksaan Fisik</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-form-label"
                                               style="margin-bottom: 0;padding-bottom: 0; margin-right: 5px; margin-top: 0; padding-top: 0">Keadaan
                                            Umum <span class="required">*</span></label>
                                        @if($askep->keadaan_umum == 'Sedang')
                                            <textarea class="form-control" readonly>Sedang</textarea>
                                        @elseif($askep->keadaan_umum == 'Buruk')
                                            <textarea class="form-control" readonly>Sedang</textarea>
                                        @else
                                            <textarea class="form-control" readonly>Baik</textarea>
                                        @endif
                                        {{--                                        <input style="display: inline; margin: 0; padding: 0" type="radio" @if($askep->keadaan_umum == 'Baik') Checked @endif>Baik--}}
                                        {{--                                        <input style="display: inline; margin: 0; padding: 0" type="radio" @if($askep->keadaan_umum == 'Sedang') Checked @endif>Sedang--}}
                                        {{--                                        <input style="display: inline; margin: 0; padding: 0" type="radio" @if($askep->keadaan_umum == 'Buruk') Checked @endif>Buruk--}}
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Konjungtiva
                                            <span
                                                class="required">*</span></label>
                                        @if($askep->konjungtiva == 'Anemis')
                                            <textarea class="form-control" readonly>Anemis</textarea>
                                        @else
                                            <textarea class="form-control" readonly>Tidak Anemis</textarea>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Ekstrimitas
                                            <span
                                                class="required">*</span></label>
                                        <textarea class="form-control" readonly>@if($askep->ekstrimitas_not_edema_or_dehidrasi)
                                                Tidak
                                                Edema/Dehidrasi @endif @if($askep->ekstrimitas_not_edema_or_dehidrasi && ($askep->ekstrimitas_dehidrasi || $askep->ekstrimitas_edema || $askep->ekstrimitas_edema_anasarka || $askep->ekstrimitas_pucat_and_dingin))
                                                , @endif @if($askep->ekstrimitas_dehidrasi)
                                                Dehidrasi @endif @if($askep->ekstrimitas_dehidrasi && ($askep->ekstrimitas_edema || $askep->ekstrimitas_edema_anasarka || $askep->ekstrimitas_pucat_and_dingin))
                                                , @endif @if($askep->ekstrimitas_edema)
                                                Edema @endif @if($askep->ekstrimitas_edema && ($askep->ekstrimitas_edema_anasarka || $askep->ekstrimitas_pucat_and_dingin))
                                                , @endif @if($askep->ekstrimitas_edema_anasarka) Edema
                                            Anasarka @endif @if($askep->ekstrimitas_edema_anasarka && $askep->ekstrimitas_pucat_and_dingin)
                                                , @endif @if($askep->ekstrimitas_pucat_and_dingin) Pucat &
                                            Dingin @endif</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Berat Badan
                                            Kering</label>
                                        <textarea class="form-control"
                                                  readonly>{{ $askep->berat_badan_kering }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Berat Badan
                                            Pre HD</label>
                                        <textarea class="form-control"
                                                  readonly>{{ $askep->berat_badan_pre_hd }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Berat Badan HD</label>
                                        <textarea readonly class="form-control">{{ $askep->berat_badan_hd }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Akses
                                            Vaskular</label>
                                        @if($askep->akses_vaskular)
                                            <textarea readonly
                                                      class="form-control">AV-Fistula</textarea>
                                        @else
                                            <textarea readonly
                                                      class="form-control">Femoranl</textarea>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">HD Keteter</label>
                                        @if($askep->hd_keteter == 'Subclavia')
                                            <textarea readonly
                                                      class="form-control">Subclavia</textarea>
                                        @elseif($askep->hd_keteter == 'Jugular')
                                            <textarea readonly
                                                      class="form-control">Jugular</textarea>
                                        @else
                                            <textarea readonly class="form-control">Femoral</textarea>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Pemeriksaan
                                            Penunjang </label>
                                        <textarea readonly
                                                  class="form-control">{{ $askep->pemeriksaan_penunjang }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Diagnosa
                                            Keperawatan </label>
                                        <textarea class="form-control" readonly>@if($askep->diagnosa_kelebihan_volume_cairan)
                                                - Kelebihan volume
                                                cairan @endif @if($askep->diagnosa_resiko_ketidakstabilan_tekanan_darah)
                                                &#10;- Resiko ketidakstabilan tekanan
                                                darah @endif @if($askep->diagnosa_gangguan_keseimbangan_elektrolit)
                                                &#10;- Gangguan keseimbangan
                                                elektrolit @endif @if($askep->diagnosa_resiko_ketidakstabilan_kadar_gula_dara)
                                                &#10;- Resiko ketidakstabilan kadae gula
                                                darah @endif @if($askep->diagnosa_resiko_infeksi) &#10;- Resiko
                                            infeksi @endif
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h4>Intervensi Keperawatan (rekapitulasi pre-intra dan post HD) </h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-form-label">Intervensi
                                            Keperawatan</label>
                                        <textarea class="form-control" readonly>@if($askep->intervensi_keperawatan_monitor_berat_badan)
                                                - Monitor berat badan, intake
                                                output @endif @if($askep->intervensi_keperawatan_penkes) &#10;- PENKES:
                                            diit, AV
                                            shunt @endif @if($askep->intervensi_keperawatan_lakukan_akses_vaskular)
                                                &#10;- Lakukan akses vaskular: Femoral, HD
                                                cath @endif @if($askep->intervensi_keperawatan_lakukan_hd) &#10;-
                                            Lakukan HD sesuai
                                            program @endif @if($askep->intervensi_keperawatan_monitor_infeksi) &#10;-
                                            Monitor tanda & gejala
                                            infeksi @endif @if($askep->intervensi_keperawatan_pasien_mulai_hipotensi)
                                                &#10;- Bila pasien mulai
                                                hipotensi @endif @if($askep->intervensi_keperawatan_monitor_kompilasi)
                                                &#10;- Monitor kompilasi selama HD @endif
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Intervensi
                                            Kolaborasi </label>
                                        <textarea class="form-control" readonly>@if($askep->intervensi_kolaborasi_program_hd)
                                                - Program HD @endif @if($askep->intervensi_kolaborasi_transfusi_darah)
                                                &#10;- Transfusi darah @endif @if($askep->intervensi_kolaborasi_diit)
                                                &#10;- Kolaborasi
                                                diit @endif @if($askep->intervensi_kolaborasi_ca_glukonas) &#10;-
                                            Pemberian Ca Glukonas @endif @if($askep->intervensi_kolaborasi_antibiotik)
                                                &#10;- Pemberian
                                                antibiotik @endif @if($askep->intervensi_kolaborasi_antipiretik_and_analgetik)
                                                &#10;- Pemberian Antipiretik dan
                                                analgetik @endif @if($askep->intervensi_kolaborasi_pemberian_preparat_besi)
                                                &#10;- Pemberian preparat
                                                besi @endif @if($askep->intervensi_kolaborasiobat_emegasi) &#10;- Obat -
                                            obat emegasi @endif
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h3 style="color: #73879c">Intruksi Medik</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-form-label">Resep
                                            HD </label>
                                        @if($askep->resep_hd == 'Inisiasi')
                                            <textarea class="form-control" readonly>Inisiasi</textarea>
                                        @elseif($askep->resep_hd == 'Akut')
                                            <textarea class="form-control" readonly>Akut</textarea>
                                        @else
                                            <textarea readonly
                                                      class="form-control">Rutin</textarea>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">TD
                                        </label>
                                        <textarea readonly class="form-control">{{ $askep->td }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">QB
                                        </label>
                                        <textarea readonly class="form-control">{{ $askep->qb }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">QD
                                        </label>
                                        <textarea readonly class="form-control">{{ $askep->qd }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">UF Goal
                                        </label>
                                        <textarea readonly class="form-control">{{ $askep->uf_goal }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Dialisat</label>
                                        @if($askep->dialist_bicarbonat)
                                            <textarea readonly
                                                      class="form-control">Bicarbonat</textarea>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Conductivity</label>
                                        <textarea class="form-control" readonly>{{ $askep->conductivity }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Temperatur</label>
                                        <textarea readonly class="form-control">{{ $askep->temperatur }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Heparinisasi</label>
                                        <textarea readonly class="form-control">@if($askep->heparinisasi_standar) -
                                            Standar @endif @if($askep->heparinisasi_mini) &#10;-
                                            Mini @endif @if($askep->heparinisasi_free_heparin) &#10;- Free
                                            Heparin @endif @if($askep->heparinisasi_lmwh) &#10;- LMWH @endif
                                        </textarea>
                                    </div>

                                    <br><br>
                                </div>
                            </div>
                        </div>

                        <h2 class="section">B. IDENTITAS Penanggung Jawab</h2>
                        <hr>
                        <div class="form-group">
                            <label class="col-form-label">Perawat
                                Bertugas
                            </label>
                            @foreach($perawat as $prw)
                                @if ( $askep->perawat_id == $prw->id)
                                    <textarea readonly class="form-control">{{ $prw->nama }}</textarea>
                                @endif
                            @endforeach
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
