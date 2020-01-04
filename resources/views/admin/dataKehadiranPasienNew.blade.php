@extends('layouts.adminUser')

@section('title', 'Presensi Kehadiran')


@section('content')

    <a href="/admin/inputKehadiranPasien">
        <button type="button" class="btn btn-primary">Tambah Data</button>
    </a>
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Presensi Kehadiran Pasien</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @php
                    $i=1;
                @endphp
                <table class="table table-bordered" id="datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Jumlah Pasien Hadir</th>
                        <th>Jumlah Pasien Tidak Hadir</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $kp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $kp->month }}</td>
                            <td>{{ $kp->year }}</td>
                            <td>{{ $kp->hadir }}</td>
                            <td>{{ $kp->tdk_hadir }}</td>

                            <td>
                                <div class="aksi">
                                    <div class="tombolAksi">
                                        <a href="/admin/dataKehadiranPasien/month/{{ $kp->month }}/year/{{ $kp->year }}" title="Detail">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        <!-- @php
                            $i++;
                        @endphp -->
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

