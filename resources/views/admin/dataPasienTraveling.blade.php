@extends('layouts.adminUser')

@section('title', 'Data Pasien Traveling')

@section('content') 
    <a href="/admin/inputPasienTraveling"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pasien Traveling atau Pindah</h2>
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
                          <th>Tanggal Pindah</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pasien_traveling as $pt)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            @foreach ($pasien as $psn)
                              @if ($psn->id == $pt->pasien_id)
                                <td>{{ $psn->nama }}</td>
                              @endif
                            @endforeach
                            
                            <td>{{ $pt->alamat }}</td>
                            <td>{{ $pt->no_hp }}</td>
                            <td>{{ $pt->tanggal }}</td>
                            <td>
                              <div class="row">
                                <div class="" >
                                  <a href="/admin/inputPasienTraveling/{{ $pt->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm" style="height: 10; weight: 10"><i class="fa fa-edit"></i></a>
                                </div>
                                <div class="tombolAksi">
                                    <form method="post" action="{{ route('admin.pasienTraveling.delete',['id' => $pt->id]) }}">
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