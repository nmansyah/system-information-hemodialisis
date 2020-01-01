@extends('layouts.dokUser')

@section('title', 'Data Pasien Meninggal')

@section('content') 
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