@extends('layouts.adminUser')

@section('title', 'Presensi Kehadiran')


@section('content')  

<a href="/admin/inputKehadiranPasien"><button type="button" class="btn btn-primary">Tambah Data</button></a>
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
                          <th>Jumlah Pasien Hadir</th>
                          <th>Jumlah Pasien Tidak Hadir</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($kehadiran_pasien as $kp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $kp->bulan }}</td>
                                    <td>{{ $kp->hadir }}</td>
                                    <td>{{ $kp->tdk_hadir }}</td>
                                    
                                    <td>
                                        <div class="aksi">
                                            <div class="tombolAksi" >
                                                <a href="/admin/inputKehadiranPasien/{{ $kp->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="tombolAksi">
                                                <form method="post" action="{{ route('admin.kehadiranPasien.delete',['id' => $kp->id]) }}">
                                                {{ method_field('DELETE') }}
                                                <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini?')" type="submit" class="btn btn-sm"><i class="fa fa-trash"></i></button>
                                                {{ csrf_field() }}
                                                </form>
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

