@extends('layouts.pegawaiUser')

@section('title', 'Data Pasien Traveling Sementara')

@section('content') 
    <a href="/pegawai/inputPasienTravelingSementara"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pasien Pindah Sementara / Traveling</h2>
                    <div class="clearfix"></div>
                  </div>
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
                          <th>Tanggal Mulai</th>
                          <th>Tanggal Kembali</th>
                          <th>Tujuan</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pasien_traveling_sementara as $pts)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            @foreach ($pasien as $psn)
                              @if ($psn->id == $pts->pasien_id)
                                <td>{{ $psn->nama }}</td>
                              @endif
                            @endforeach
                            
                            <td>{{ $pts->alamat }}</td>
                            <td>{{ $pts->no_hp }}</td>
                            <td>{{ $pts->tanggal_mulai }}</td>
                            <td>{{ $pts->tanggal_selesai }}</td>
                            <td>{{ $pts->tujuan }}</td>
                            <td>
                            <div class="tombolAksi" >
                                  <a href="/pegawai/inputPasienTravelingSementara/{{ $pts->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm" style="height: 10; weight: 10"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                            <td>
                             <div class="tombolAksi">
                                    <form method="post" action="{{ route('pegawai.pasienTravelingSementara.delete',['id' => $pts->id]) }}">
                                       {{ method_field('DELETE') }}
                                    <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini?')" type="submit" class="btn btn-sm" style="height: 5; weight: 5"><i class="fa fa-trash-o"></i></button>
                                       {{ csrf_field() }}
                                    </form>
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