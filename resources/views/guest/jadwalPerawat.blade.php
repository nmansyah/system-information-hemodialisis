@extends('layouts.guestUser')

@section('title', 'Jadwal Perawat')

@section('content') 

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
                    <table class="table table-bordered" >
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