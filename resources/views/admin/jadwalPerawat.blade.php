@extends('layouts.adminUser')

@section('title', 'Jadwal Perawat')

@section('content') 
<a href="/admin/inputJadwalPerawat"><button type="button" class="btn btn-primary">Tambah Jadwal</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jadwal Perawat </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  @php
                    $i=1;
                  @endphp
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal</th>                          
                          <th>Senin</th>
                          <th>Selasa</th>
                          <th>Rabu</th>
                          <th>Kamis</th>
                          <th>Jumat</th>
                          <th>Sabtu</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($jadwal_perawat as $jp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            
                                    @foreach ($perawat as $prw)
                                        @if ($prw->id == $jp->perawat_id)
                                           <td>{{ $prw->nama }}</td>
                                         @endif
                                    @endforeach
                                    <td>{{ $jp->bulan }}</td>
                                    <td>{{ $jp->hari1 }}</td>
                                    <td>{{ $jp->hari2 }}</td>
                                    <td>{{ $jp->hari3 }}</td>
                                    <td>{{ $jp->hari4 }}</td>
                                    <td>{{ $jp->hari5 }}</td>
                                    <td>{{ $jp->hari6 }}</td>
                                    <td>
                                        <div class="aksi">
                                        <div class="tombolAksi" >
                                                <a href="/admin/inputJadwalPerawat/{{ $jp->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="tombolAksi">
                                                <form method="post" action="{{ route('admin.jadwalPerawat.delete',['id' => $jp->id]) }}">
                                                {{ method_field('DELETE') }}
                                                <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini?')" type="submit" class="btn btn-sm"><i class="fa fa-trash"></i></button>
                                                {{ csrf_field() }}
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