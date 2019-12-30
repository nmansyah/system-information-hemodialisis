@extends('layouts.guestUser')

@section('title', 'Jadwal Dokter')

@section('content') 
          <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jadwal Dokter </h2>
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
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($jadwal_dokter as $jd)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            
                                    @foreach ($dokter as $dk)
                                        @if ($dk->id == $jd->dokter_id)
                                           <td>{{ $dk->nama }}</td>
                                         @endif
                                    @endforeach
                                    <td>{{ $jd->bulan }}</td>
                                    <td>{{ $jd->hari1 }}</td>
                                    <td>{{ $jd->hari2 }}</td>
                                    <td>{{ $jd->hari3 }}</td>
                                    <td>{{ $jd->hari4 }}</td>
                                    <td>{{ $jd->hari5 }}</td>
                                    <td>{{ $jd->hari6 }}</td>
                                    
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