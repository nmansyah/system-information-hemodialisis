@extends('layouts.pegawaiUser')

@section('title', 'Input Askep')

@section('content')

    <div class="x_content">

        <form class="form-horizontal form-label-left" action="/pegawai/{{ $pasien->id }}/inputAskep" method="post" value="post"
              novalidate>
            <span class="section">Catatan Terintegrasi Hemodialisis</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rm">Nomor RM <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="no_rm" name="no_rm" required="required"
                           class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" readonly value="{{ ucwords($pasien->nama) }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" readonly value="{{ ucwords($pasien->jenis_kelamin) }}">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="alamat" readonly
                              class="form-control col-md-7 col-xs-12">{{ $pasien->alamat }}</textarea>
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="tanggal" type="date" data-date="" data-date-format="DD/MM/YYYY" name="tanggal_pemeriksaan"
                           class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required"
                       class="col-2 col-form-label">Jam</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="custom-select" required="required" id="sesi" name="sesi">
                        <option selected>Sesi ..</option>
                        <option value="Sesi 1">Sesi 1</option>
                        <option value="Sesi 2">Sesi 2</option>
                        <option value="Sesi 3">Sesi 3</option>
                    </select>
                </div>
                </label>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hd">Hemodialisa ke - <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" name="hemodialisa_number" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">Tipe Dialiser <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="dialiser_type" required="required"
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
                            <input class="form-check-input" type="checkbox" name="keluhan_utama_sesak_nafas" value="true">
                            Sesak Nafas
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="keluhan_utama_mual" value="true">
                            Mual, Muntah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="keluhan_utama_gatal" value="true">
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
                            <input class="form-check-input" type="radio" name="keadaan_umum" value="Baik" required>
                            Baik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="keadaan_umum" value="Sedang">
                            Sedang
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="keadaan_umum" value="Buruk">
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
                            <input class="form-check-input" type="radio" name="konjungtiva" value="Tidak Anemis" required>
                            Tidak Anemis
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="konjungtiva" value="Anemis">
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
                                   value="true">
                            Tidak Edema/Dehidrasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_dehidrasi" value="true">
                            Dehidrasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_edema" value="true">
                            Edema
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitasedema_anasarka" value="true">
                            Edema Anasarka
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ekstrimitas_pucat_and_dingin" value="true">
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
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan Pre HD <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="berat_badan_pre_hd" required="required"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan HD <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="berat_badan_hd" required="required" type="number">
                </div>
            </div>

            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Akses Vaskular <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="akses_vaskular" value="AV-Fistula" required>
                            AV-Fistula
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="akses_vaskular" value="Femoral">
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
                            <input class="form-check-input" type="radio" name="hd_kateter" value="Subclavia" required>
                            Subclavia
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hd_kateter" value="Jugular">
                            Jugular
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hd_kateter" value="Femolar">
                            Femoral
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengkajian">Pemeriksaan Penunjang <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="pem_penunjang" class="form-control col-md-7 col-xs-12" name="pemeriksaan_penunjang"
                           required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Diagnosa Keperawatan <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="diagnosa_kelebihan_volume_cairan"
                                   value="true">
                            1. Kelebihan volume cairan
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="diagnosa_resiko_ketidakstabilan_tekanan_darah"
                                   value="true">
                            2. Resiko ketidakstabilan tekanan darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="diagnosa_gangguan_keseimbangan_elektrolit"
                                   value="true">
                            3. Gangguan keseimbangan elektrolit
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="diagnosa_resiko_ketidakstabilan_kadar_gula_darah"
                                   value="true">
                            4. Resiko ketidakstabilan kadar gula darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="diagnosa_resiko_infeksi" value="true">
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
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_monitor_berat_badan"
                                   value="true">
                            Monitor berat badan, intake output
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_penkes"
                                   value="true">
                            PENKES: diit, AV Shuut
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_lakukan_akses_vaskular"
                                   value="true">
                            Lakukan Akses Vaskular: Femoral, HD cath, AV Shunt
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_lakukan_hd"
                                   value="true">
                            Lakukan HD sesuai program
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_monitor_infeksi"
                                   value="true">
                            Monitor tanda dan gejala infeksi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_pasien_mulai_hipotensi"
                                   value="true">
                            Bila pasien mulai hipotensi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_keperawatan_monitor_konpilasi"
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
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_program_hd" value="true">
                            Program HD
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_transfusi_darah" value="true">
                            Transfusi darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_diit" value="true">
                            Kolaborasi diit
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_pemberian_ca_glukonas"
                                   value="true">
                            Pemberian Ca Glukonas
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_pemberian_antibiotik"
                                   value="true">
                            Pemberian Antibiotik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_antipiretik_and_analgetik"
                                   value="true">
                            Pemberian Antipiretik dan analgetik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_pemberian_preparat_besi"
                                   value="true">
                            Pemberian preparat besi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="intervensi_kolaborasi_obat_emegensi"
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
                            <input class="form-check-input" type="radio" name="resep_hd" value="Inisiasi" required>
                            Inisiasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="resep_hd" value="Akut">
                            Akut
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="resep_hd" value="Rutin">
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
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QB <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qb" required="required"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QD <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qd" required="required"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">UF Goal <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="uf_goal" required="required"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Dialisat <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="dialisat_bicarbonat" value="true">
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
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Temperatur <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisat" class="form-control col-md-7 col-xs-12" name="temperatur" required="required"
                           type="number">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Heparinisasi <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_standar" value="true">
                            Standar
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_mini" value="true">
                            Mini
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_free_heparin" value="true">
                            Free Heparin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="heparinisasi_lmwh" value="true">
                            LMWH
                        </label>
                    </div>

                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Perawat Bertugas <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" name="perawat_id">
                        <option>Pilih Perawat..</option>
                        @foreach($perawat as $prw)
                            <option value="{{$prw->id}}">{{$prw->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary" onclick="location.href='/pegawai/{{ $pasien->id }}/dataAskep'">Cancel
                    </button>
                    <button id="send" type="submit" name="button" class="btn btn-success">Submit</button>
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection
