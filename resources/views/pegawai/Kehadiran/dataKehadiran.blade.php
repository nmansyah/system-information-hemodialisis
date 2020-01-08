@extends('layouts.pegawaiUser')

@section('title', 'Kehadiran Pasien')

@section('content')
    <a href="/pegawai/{{ $pasien->id }}/inputKehadiran">
        <button type="button" class="btn btn-primary">Tambah Data</button>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Kehadiran Pasien</h2>
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
                            <th>Tanggal</th>
                            <th>Kehadiran</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($kehadiran as $khd)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>

                                <td>{{ $khd->tanggal }}</td>
                                <td>{{ $khd->kehadiran }}</td>
                                <td>
                                    <div class="aksi">
                                        <div class="tombolAksi">
                                            <a href="/pegawai/{{ $pasien->id }}/inputKehadiran/{{ $khd->id }}/edit"
                                               onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')"
                                               class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="Aksi">
                                        <div class="tombolAksi">
                                            <form
                                                action="{{ route('pegawai.data.kehadiran.pasien.delete', ['pasien_id' => $pasien->id, 'kehadiran_id' => $khd->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini?')"
                                                    type="submit" class="btn btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>
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
