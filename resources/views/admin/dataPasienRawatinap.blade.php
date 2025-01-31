@extends('layouts.adminUser')

@section('title', 'Data Pasien Rawat Inap')

@section('content')
    <a href="/admin/inputPasienRawatinap">
        <button type="button" class="btn btn-primary">Tambah Data</button>
    </a>
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Pasien Rawat Inap</h2>
                <div class="clearfix"></div>
            </div>
            @include('layouts.alert')
            <div class="x_content">
                @php
                    $i=1;
                @endphp
                <table class="table table-bordered" id="datatable-buttons">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Unit/Bangsal</th>
                        <th>Edit</th>
                        <th>Check Out</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pasien_rawatinap as $pr)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            @foreach ($pasien as $psn)
                                @if ($psn->id == $pr->pasien_id)
                                    <td>{{ $psn->nama }}</td>
                                @endif
                            @endforeach

                            <td>{{ $pr->alamat }}</td>
                            <td>{{ $pr->no_hp }}</td>
                            <td>{{ $pr->tanggal }}</td>
                            <td>{{ $pr->check_out_time }}</td>
                            <td>{{ $pr->unit }}</td>
                            <td>
                                <div class="tombolAksi">
                                    <a href="/admin/inputPasienRawatinap/{{ $pr->id }}/edit"
                                       onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')"
                                       class="btn btn-sm" style="height: 5; weight: 5"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.pasien.rawat.inap.check.out', $pr->id) }}">
                                    {{ method_field('put') }}
                                    <button
                                        onclick="return confirm ('Apakah anda ingin melakukan check out untuk pasien pada data ini?')"
                                        type="submit" class="btn btn-sm" style="height: 5; weight: 5"><i
                                            class="fa fa-sign-out"></i></button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                            <td>
                                <div class="aksi">

                                    <div class="tombolAksi">
                                        <form method="post"
                                              action="{{ route('admin.pasienRawatinap.delete',['id' => $pr->id]) }}">
                                            {{ method_field('DELETE') }}
                                            <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini?')"
                                                    type="submit" class="btn btn-sm" style="height: 5; weight: 5"><i
                                                    class="fa fa-trash-o"></i></button>
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
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
