@extends('layouts.adminUser')

@section('title', 'Data Perawat')

@section('content') 
<a href="/admin/inputPerawat"><button type="button" class="btn btn-primary">Tambah Perawat</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Perawat</h2>
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
                          <th>Pendidikan</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>Nomor Telepon</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($perawat as $prw)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            
                                    <td>{{ $prw->nama }}</td>
                                    <td>{{ $prw->pendidikan }}</td>
                                    <td>{{ $prw->alamat }}</td>
                                    <td>{{ $prw->email }}</td>
                                    <td>{{ $prw->no_hp }}</td>
                                    <td>
                                    <div class="tombolAksi" >
                                                <a href="/admin/inputPerawat/{{ $prw->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                            </div>
                                    </td>
                                    <td>
                                        <div class="aksi">
                                            
                                            <div class="tombolAksi">
                                                <form method="post" action="{{ route('admin.perawat.delete',['id' => $prw->id]) }}">
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