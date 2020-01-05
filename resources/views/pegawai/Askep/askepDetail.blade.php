@extends('layouts.pegawaiUser')

@section('title', 'Askep Detail')

@section('content')

    <div class="x_content">
        @include('layouts.alert')
        <form class="form-horizontal form-label-left"
              action="{{ route('pegawai.data.askep.pasien.update', [$askep->pasien['id'], $askep->id]) }}" method="post"
              value="post"
              novalidate>
            @method('PUT')
            <span class="section">Catatan Terintegrasi Hemodialisis</span>
            <span class="section">A. IDENTITAS KLIEN</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" readonly value="{{ ucwords($askep->pasien['nama']) }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Umur <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" readonly value="{{ ucwords($askep->pasien['usia']) }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" readonly
                           value="{{ ucwords($askep->pasien['jenis_kelamin']) }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="alamat" readonly
                              class="form-control col-md-7 col-xs-12">{{ $askep->pasien['alamat'] }}</textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rm">Nomor RM <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="no_rm" name="no_rm" required="required"
                           class="form-control col-md-7 col-xs-12" value="{{ $askep->no_rm }}">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal Pemeriksaan<span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="tanggal" type="date" data-date="" data-date-format="DD/MM/YYYY"
                           name="tanggal_pemeriksaan"
                           class="optional form-control col-md-7 col-xs-12" value="{{ $askep->tanggal_pemeriksaan }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required"
                       class="col-2 col-form-label">Jam</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="custom-select" required="required" id="sesi" name="sesi">
                        <option value="{{ old('sesi') }}" selected>{{ old('sesi') }}</option>
                        <option value="Sesi 1" @if($askep->sesi == 'Sesi 1') selected @endif>Sesi 1</option>
                        <option value="Sesi 2" @if($askep->sesi == 'Sesi 2') selected @endif>Sesi 2</option>
                        <option value="Sesi 3" @if($askep->sesi == 'Sesi 3') selected @endif>Sesi 3</option>
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hd">Hemodialisa ke - <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" name="hemodialisa_number" required="required"
                           class="form-control col-md-7 col-xs-12" value="{{ $askep->hemodialisa_number }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">Tipe Dialiser <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="dialiser_type"
                           required="required" value="{{ $askep->dialiser_type }}"
                           type="text">
                </div>
            </div>
            <h3>Pengkajian Keperawatan</h3>
            <hr>
            <h4>Keluhan</h4>
            <br>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Keluhan Utama <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="keluhan_utama_sesak_nafas"
                                   value="true" @if($askep->keluhan_utama_sesak_nafas) checked @endif>
                            Sesak Nafas
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="keluhan_utama_mual" value="true"
                                   @if($askep->keluhan_utama_mual) checked @endif>
                            Mual, Muntah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="keluhan_utama_gatal" value="true"
                                   @if($askep->keluhan_utama_gatal) checked @endif>
                            Gatal
                        </label>
                    </div>
                </div>
            </div>
            <h4>Pemeriksaan Fisik</h4>
            <br>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Keadaan Umum <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="keadaan_umum" value="Baik" required
                                   @if($askep->keadaan_umum == 'Baik') checked @endif>
                            Baik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="keadaan_umum" value="Sedang"
                                   @if($askep->keadaan_umum == 'Sedang') checked @endif>
                            Sedang
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="keadaan_umum" value="Buruk"
                                   @if($askep->keadaan_umum == 'Buruk') checked @endif>
                            Buruk
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Konjungtiva <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="konjungtiva" value="Tidak Anemis"
                                   required @if($askep->konjungtiva == 'Tidak Anemis') checked @endif>
                            Tidak Anemis
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="konjungtiva" value="Anemis"
                                   @if($askep->konjungtiva == 'Anemis') checked @endif>
                            Anemis
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Ekstrimitas <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_not_edema_or_dehidrasi"
                                   @if($askep->ekstrimitas_not_edema_or_dehidrasi) checked @endif
                                   value="true">
                            Tidak Edema/Dehidrasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_dehidrasi" value="true"
                                   @if($askep->ekstrimitas_dehidrasi) checked @endif>
                            Dehidrasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_edema" value="true"
                                   @if($askep->ekstrimitas_edema) checked @endif>
                            Edema
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_edema_anasarka"
                                   value="true" @if($askep->ekstrimitas_edema_anasarka) checked @endif>
                            Edema Anasarka
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_pucat_and_dingin"
                                   value="true" @if($askep->ekstrimitas_pucat_and_dingin) checked @endif>
                            Pucat&Dingin
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan Kering <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="berat_badan_kering" required="required"
                           value="{{ $askep->berat_badan_kering }}"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan Pre HD <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="berat_badan_pre_hd" required="required"
                           value="{{ $askep->berat_badan_pre_hd }}"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan HD <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="berat_badan_hd" required="required"
                           type="number" value="{{ $askep->berat_badan_hd }}">
                </div>
            </div>

            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Akses Vaskular <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="akses_vaskular" value="AV-Fistula"
                                   required @if($askep->akses_vaskular) checked @endif>
                            AV-Fistula
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="akses_vaskular" value="Femoral"
                                   @if($askep->akses_vaskular) checked @endif>
                            Femoral
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">HD Kateter <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hd_kateter" value="Subclavia" required
                                   @if($askep->hd_kateter == 'Subclavia') checked @endif>
                            Subclavia
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hd_kateter" value="Jugular"
                                   @if($askep->hd_kateter == 'Jugular') checked @endif>
                            Jugular
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hd_kateter" value="Femolar"
                                   @if($askep->hd_kateter == 'Femolar') checked @endif>
                            Femoral
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengkajian">Pemeriksaan Penunjang </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="pem_penunjang" class="form-control col-md-7 col-xs-12" name="pemeriksaan_penunjang"
                           type="text" value="{{ $askep->pemeriksaan_penunjang }}">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Diagnosa Keperawatan <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="diagnosa_kelebihan_volume_cairan"
                                   value="true" @if($askep->diagnosa_kelebihan_volume_cairan) checked @endif>
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
                                   value="true" @if($askep->diagnosa_gangguan_keseimbangan_elektrolit) checked @endif>
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
                            <input class="form-check-input" type="checkbox" name="diagnosa_resiko_infeksi" value="true"
                                   @if($askep->diagnosa_resiko_infeksi) checked @endif>
                            5. Resiko Infeksi
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <h4>Intervensi Keperawatan (rekapitulasi pre-intra dan post HD) </h4>

            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi Keperawatan <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_keperawatan_monitor_berat_badan"
                                   @if($askep->intervensi_keperawatan_monitor_berat_badan) checked @endif
                                   value="true">
                            Monitor berat badan, intake output
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_penkes"
                                   @if($askep->intervensi_keperawatan_penkes) checked @endif
                                   value="true">
                            PENKES: diit, AV Shuut
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_keperawatan_lakukan_akses_vaskular"
                                   @if($askep->intervensi_keperawatan_lakukan_akses_vaskular) checked @endif
                                   value="true">
                            Lakukan Akses Vaskular: Femoral, HD cath, AV Shunt
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_lakukan_hd"
                                   @if($askep->intervensi_keperawatan_lakukan_hd) checked @endif
                                   value="true">
                            Lakukan HD sesuai program
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_keperawatan_monitor_infeksi"
                                   @if($askep->intervensi_keperawatan_monitor_infeksi) checked @endif
                                   value="true">
                            Monitor tanda dan gejala infeksi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_keperawatan_pasien_mulai_hipotensi"
                                   @if($askep->intervensi_keperawatan_pasien_mulai_hipotensi) checked @endif
                                   value="true">
                            Bila pasien mulai hipotensi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_keperawatan_monitor_kompilasi"
                                   @if($askep->intervensi_keperawatan_monitor_kompilasi) checked @endif
                                   value="true">
                            Monitor kompilasi selama HD
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi Kolaborasi <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_program_hd"
                                   value="true" @if($askep->intervensi_kolaborasi_program_hd) checked @endif>
                            Program HD
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_transfusi_darah"
                                   value="true" @if($askep->intervensi_kolaborasi_transfusi_darah) checked @endif>
                            Transfusi darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_diit"
                                   value="true" @if($askep->intervensi_kolaborasi_diit) checked @endif>
                            Kolaborasi diit
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_kolaborasi_pemberian_ca_glukonas"
                                   @if($askep->intervensi_kolaborasi_pemberian_ca_glukonas) checked @endif
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
                                   @if($askep->ntervensi_kolaborasi_antipiretik_and_analgetik) checked @endif
                                   value="true">
                            Pemberian Antipiretik dan analgetik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                   name="intervensi_kolaborasi_pemberian_preparat_besi"
                                   @if($askep->intervensi_kolaborasi_pemberian_preparat_besi) checked @endif
                                   value="true">
                            Pemberian preparat besi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_obat_emegensi"
                                   @if($askep->intervensi_kolaborasi_obat_emegensi) checked @endif
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
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Resep HD <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="resep_hd" value="Inisiasi" required
                                   @if($askep->resep_hd == 'Inisiasi') checked @endif>
                            Inisiasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="resep_hd" value="Akut"
                                   @if($askep->resep_hd == 'Akut') checked @endif>
                            Akut
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="resep_hd" value="Rutin"
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
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="td" required="required"
                           type="number" value="{{ $askep->td }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QB <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qb" required="required"
                           value="{{ $askep->qb }}"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QD <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qd" required="required"
                           value="{{ $askep->qd }}"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">UF Goal <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="uf_goal" required="required"
                           value="{{ $askep->uf_goal }}"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Dialisat <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="dialisat_bicarbonat" value="true"
                                   @if( $askep->dialisat_bicarbonat) checked @endif>
                            Bicarbonat
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Conductivity <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisat" class="form-control col-md-7 col-xs-12" name="conductivity" required="required"
                           type="number" value="{{ $askep->conductivity }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Temperatur <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisat" class="form-control col-md-7 col-xs-12" name="temperatur" required="required"
                           value="{{ $askep->temperatur }}"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Heparinisasi <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_standar" value="true"
                                   @if( $askep->heparinisasi_standar) checked @endif>
                            Standar
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_mini" value="true"
                                   @if($askep->heparinisasi_mini) checked @endif>
                            Mini
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_free_heparin"
                                   value="true" @if($askep->heparinisasi_free_heparin) checked @endif>
                            Free Heparin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_lmwh" value="true"
                                   @if($askep->heparinisasi_lmwh) checked @endif>
                            LMWH
                        </label>
                    </div>

                </div>
            </div>

            <span class="section">B. IDENTITAS Penanggung Jawab</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Perawat Bertugas <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" name="perawat_id">
                        <option>Pilih Perawat..</option>
                        @foreach($perawat as $prw)
                            @if ( $askep->perawat_id == $prw->id)
                                <option value="{{ $prw->id }}" selected>{{ $prw->nama }}</option>
                            @else
                                <option value="{{$prw->id}}">{{$prw->nama}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <a class="btn btn-primary" href="{{ route('pegawai.data.askep.pasien.show', [$askep->pasien['id'], $askep->id]) }}">Cancel</a>
                    <button id="send" type="submit" name="button" class="btn btn-success">Update</button>
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection
