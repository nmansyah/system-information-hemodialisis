@extends('layouts.dokUser')

@section('title', 'Data Pasien Traveling')

@section('content') 
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