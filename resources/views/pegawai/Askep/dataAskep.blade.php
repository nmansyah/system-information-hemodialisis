@extends('layouts.pegawaiUser')

@section('title', 'Askep Pasien')

@section('content')
    <a href="/pegawai/{{ $pasien->id }}/inputAskep"><button type="button" class="btn btn-primary">Tambah Askep</button>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Askep Pasien {{ ucwords($pasien->nama) }}</h2>
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
                          <th>No RM</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($askep as $ask)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                                    <td>{{ $ask->tanggal_pemeriksaan }}</td>
                                    <td>{{ $ask->no_rm }}</td>
                                    <td>
                                      <div class="tombolAksi" >
                                          <a href="{{ route('pegawai.data.askep.pasien.show', ['pasien_id' => $pasien->id, 'task_id' => $ask->id]) }}" class="btn btn-sm"><i class="fa fa-info"></i></a>
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
