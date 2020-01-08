@extends('layouts.adminUser')

@section('title', 'Data Perkembangan Pasien')

@section('content')

<a href="/admin/inputPerkembanganPasien"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kondisi Bulanan Pasien</h2>
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
                          <th>Tanggal</th>
                          <th>HB</th>
                          <th>Ureum</th>
                          <th>Kreatinin</th>
                          <th>Obat</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($perkembangan_pasien as $pp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            @foreach ($pasien as $psn)
                              @if ($psn->id == $pp->pasien_id)
                                <td>{{ $psn->nama }}</td>
                              @endif
                            @endforeach

                            <td>{{ $pp->tanggal }}</td>
                            <td>{{ $pp->hb }}</td>
                            <td>{{ $pp->ureum }}</td>
                            <td>{{ $pp->kreatinin }}</td>
                            <td>{{ $pp->obat}}</td>
                            <td>
                            <div class="tombolAksi" >
                                  <a href="/admin/inputPerkembanganPasien/{{ $pp->id }}/edit" onclick="return confirm ('Apakah Anda Ingin Merubah Data Ini?')" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                            <td>
                              <div class="Aksi">
                                
                                <div class="tombolAksi">
                                    <form method="post" action="{{ route('admin.perkembanganPasien.delete',['id' => $pp->id]) }}">
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