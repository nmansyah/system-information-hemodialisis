@extends('layouts.adminUser')

@section('title', 'Data Dokter')

@section('content') 
    <a href="/admin/inputDokter"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Dokter</h2>
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
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>Nomor Telepon</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($dokter as $dk)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            
                                    <td>{{ $dk->nama }}</td>
                                    <td>{{ $dk->alamat }}</td>
                                    <td>{{ $dk->email }}</td>
                                    <td>{{ $dk->no_hp }}</td>
                                    <td>
                                        <div class="aksi">
                                            <div class="tombolAksi" >
                                                <a href="/admin/inputDokter/{{ $dk->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="tombolAksi">
                                                <form method="post" action="{{ route('admin.dokter.delete',['id' => $dk->id]) }}">
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