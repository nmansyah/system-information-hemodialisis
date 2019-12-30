@extends('layouts.adminUser')

@section('title', 'Perpindahan Jadwal')

@section('content')

          <a href="/admin/inputPerpindahanJadwal"><button type="button" class="btn btn-primary">Tambah Data</button></a>
             <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Perpindahan Jadwal Sementara</h2>
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
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Hari</th>
                          <th>Sesi</th>      
                          <th>Aksi</th>                   
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($perpindahan_jadwal as $pj)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            @foreach ($pasien as $psn)
                              @if ($psn->id == $pj->pasien_id)
                                <td>{{ $psn->nama }}</td>
                              @endif
                            @endforeach
                            
                            <td>{{ $pj->tanggal }}</td>
                            <td>{{ $pj->hari1 }}</td>
                            <td>{{ $pj->sesi1 }}</td>
                            <td>
                              <div class="aksi">
                                <div class="tombolAksi" >
                                  <a href="/admin/inputPerpindahanJadwal/{{ $pj->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                </div>
                              <div class="tombolAksi">
                                <form method="post" action="{{ route('admin.perpindahanJadwal.delete',['id' => $pj->id]) }}">
                                   {{ method_field('DELETE') }}
                                  <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini?')" type="submit" class="btn btn-sm" style="height: 5; weight: 5"><i class="fa fa-trash-o"></i></button>
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
