@extends('layouts.pegawaiUser')

@section('title', 'Input Askep')

@section('content')

    <div class="x_content">

        <form class="form-horizontal form-label-left" action="/pegawai/inputPasien" method="post" value="post" novalidate>
        <span class="section">Catatan Terintegrasi Hemodialisis</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rm">Nomor RM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="no_rm" name="no_rm" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" name="nama">
                    <option>Pilih Pasien..</option>
                        @foreach($pasien as $psn)
                        <option value="{{$psn->id}}">{{$psn->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="jenkel" class="btn-group" data-toggle="buttons">
                            <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> &nbsp; Laki-laki &nbsp;
                            </label>
                            <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                            </label>
                        </div>
                    </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tanggal" type="date" data-date="" data-date-format="DD/MM/YYYY" name="tanggal" class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required" class="col-2 col-form-label">Jam</label>                
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hd">Hemodialisa ke - <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="hd" name="hd" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">Tipe Dialisir <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="dialisir" class="form-control col-md-7 col-xs-12" name="dialisir" required="required" type="text">
                </div>
            </div>
            <h3>Pengkajian Keperawatan</h3>
            <hr>
            <h4>Keluhan</h4>
            <br>
            <div class="item form-group">
            <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Keluhan Utama <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="keluhan" value="Sesak nafas">
                            Sesak Nafas
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="keluhan" value="Mual, Muntah">
                            Mual, Muntah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="keluhan" value="Gatal">
                            Gatal
                        </label>
                    </div>
                </div>
            </div>
            <h4>Pemeriksaan Fisik</h4>
            <br>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Keadaan Umum <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="keadaan" value="Baik">
                            Baik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="keadaan" value="Sedang">
                            Sedang
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="keadaan" value="Buruk">
                            Buruk
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Konjungtiva <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="konjungtiva" value="Tidak Anemis">
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
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Ekstrimitas <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="ekstrimitas" value="Tidak Edema/Dehidrasi">
                            Tidak Edema/Dehidrasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="ekstrimitas" value="Dehidrasi">
                            Dehidrasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="ekstrimitas" value="Edema">
                            Edema
                        </label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="ekstrimitas" value="Edema Anasarka">
                            Edema Anasarka
                        </label>
                    </div>     
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="ekstrimitas" value="Pucat&Dingin">
                            Pucat&Dingin
                        </label>
                    </div>              
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan Kering <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="bb_kering" required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan Pre HD <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="bb_pre" required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Berat Badan HD <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="bb_hd" required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Y.l <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="bb" class="form-control col-md-7 col-xs-12" name="yl" required="required" type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Akses Vaskular <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="akses_vaskular" value="AV-Fistula">
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
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">HD Kateter <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="hd_kateter" value="Subclavia">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengkajian">Pemeriksaan Penunjang <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="pem_penunjang" class="form-control col-md-7 col-xs-12" name="pem_penunjang" required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Diagnosa Keperawatan <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="diagnosa" value="Kelebihan volume cairan">
                            1. Kelebihan volume cairan
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="diagnosa" value="Resiko ketidakstabilan tekanan darah">
                            2. Resiko ketidakstabilan tekanan darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="diagnosa" value="Gangguan keseimbangan elektrolit">
                            3. Gangguan keseimbangan elektrolit
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="diagnosa" value="Resiko ketidakstabilan kadar gula darah">
                            4. Resiko ketidakstabilan kadar gula darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="diagnosa" value="Resiko infeksi">
                            5. Resiko Infeksi
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <h4>Intervensi Keperawatan (rekapitulasi pre-intra dan post HD) </h4>
            
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi Keperawatan <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="Monitor berat badan, intake output">
                            Monitor berat badan, intake output
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="PENKES: diit, AV Shuut">
                            PENKES: diit, AV Shuut
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="Lakukan Akses Vaskular: Femoral, HD cath, AV Shunt">
                            Lakukan Akses Vaskular: Femoral, HD cath, AV Shunt
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="Lakukan HD sesuai program">
                            Lakukan HD sesuai program
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="Monitor tanda dan gejala infeksi">
                            Monitor tanda dan gejala infeksi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="Bila pasien mulai hipotensi">
                            Bila pasien mulai hipotensi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_keper" value="Monitor kompilasi selama HD">
                            Monitor kompilasi selama HD
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi Kolaborasi <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Program HD">
                            Program HD
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Transfusi darah">
                            Transfusi darah
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Kolaborasi diit">
                            Kolaborasi diit
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Pemberian Ca Glukonas">
                            Pemberian Ca Glukonas
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Pemberian Antibiotik">
                            Pemberian Antibiotik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Pemberian Antipiretik dan analgetik">
                            Pemberian Antipiretik dan analgetik
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Pemberian preparat besi">
                            Pemberian preparat besi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="inter_kolab" value="Obat-obat emegensi">
                            Obat-obat emegensi
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <h3>Instruksi Medik</h3>
            <br>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Resep HD <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="resep_hd" value="Inisiasi">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">TD <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="td" required="required" type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QB <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qb" required="required" type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">QD <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="qd" required="required" type="number">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dialisir">UF Goal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisir" class="form-control col-md-7 col-xs-12" name="uf_goal" required="required" type="number">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Dialisat <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="dialisat" value="Bicarbonat">
                            Bicarbonat
                        </label>
                    </div>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Conductivity <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisat" class="form-control col-md-7 col-xs-12" name="conductivity" required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bb">Temperatur <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dialisat" class="form-control col-md-7 col-xs-12" name="temperatur" required="required" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label for="pengkajian" class="control-label col-md-3 col-sm-3 col-xs-12">Heparinisasi <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="heparinisasi" value="Standar">
                            Standar
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="heparinisasi" value="Mini">
                            Mini
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="heparinisasi" value="Free Heparin">
                            Free Heparin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="heparinisasi" value="LMWH">
                            LMWH
                        </label>
                    </div>   
                                     
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Perawat Bertugas <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" name="nama">
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
                    <button type="submit" class="btn btn-primary" onclick="location.href='/pegawai/dataAskep'">Cancel</button>
                    <button id="send" type="submit" name="button" class="btn btn-success" >Submit</button>
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection
