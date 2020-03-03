@extends('layouts.pegawaiUser')

@section('title', 'Data Pasien')

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Pasien</h2>
                <div class="clearfix"></div>
            </div>
            @include('layouts.alert')
            <div class="x_content">
                @php
                    $i=1;
                @endphp
                <table class="table table-bordered" id="datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>No CM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Asuransi</th>
                        <th>Riwayat Penyakit</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Kehadiran</th>
                        <th>Askep</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pasien as $psn)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            <td>{{ $psn->no_cm }}</td>
                            <td>{{ $psn->nama }}</td>
                            <td>{{ $psn->alamat }}</td>
                            <td>{{ $psn->tgl_lahir }}</td>
                            <td>{{ $psn->asuransi }}</td>
                            <td>{{ $psn->riwayat }}</td>
                            <td>{{ $psn->no_hp }}</td>
                            @if($psn->is_died())
                                <td><span class="label label-danger">Meninggal</span></td>
                            @elseif($psn->pasienTraveling()->exists())
                                <td><span class="label label-warning">Pindah</span></td>
                            @else
                                <td><span class="label label-success">Hidup</span></td>
                            @endif
                            <td>
                                <div class="tombolAksi">
                                    <a href="/pegawai/{{$psn->id}}/dataKehadiran" class="btn btn-sm"><i
                                            class="fa fa-info"></i></a>
                                </div>
                            </td>
                            <td>
                                <div class="tombolAksi">
                                    <a href="/pegawai/{{$psn->id}}/dataAskep" class="btn btn-sm"><i
                                            class="fa fa-eye"></i></a>
                                </div>
                            </td>
                        @php
                            $i++;
                        @endphp

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
