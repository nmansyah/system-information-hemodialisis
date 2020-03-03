@extends('layouts.pegawaiUser')

@section('title', 'Data Pasien Meninggal')

@section('content') 
      <a href="/pegawai/inputPasienMeninggal"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pasien Meninggal</h2>
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
                          <th>Tanggal Meninggal</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pasien_meninggal as $pm)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            @foreach ($pasien as $psn)
                              @if ($psn->id == $pm->pasien_id)
                                <td>{{ $psn->nama }}</td>
                              @endif
                            @endforeach
                            
                            <td>{{ $pm->alamat }}</td>
                            <td>{{ $pm->no_hp }}</td>
                            <td>{{ $pm->tanggal }}</td>
                            <td>
                            <div class="tombolAksi" >
                                    <a href="/pegawai/inputPasienMeninggal/{{ $pm->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                            <td>
                              <div class="aksi">
                                
                                <div class="tombolAksi">
                                    <form method="post" action="{{ route('pegawai.pasienMeninggal.delete',['id' => $pm->id]) }}">
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