@extends('layouts.adminUser')

@section('title', 'Jadwal Pasien')

@section('content') 
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Jadwal Pasien</h2>
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
                          <th>Hari 1</th>
                          <th>Sesi 1</th>
                          <th>Hari 2</th>
                          <th>Sesi 2</th>
                          <th>Hari 3</th>
                          <th>Sesi 3</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pasien as $psn)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            
                                    <td>{{ $psn->nama }}</td>
                                    <td>{{ $psn->hari1 }}</td>
                                    <td>{{ $psn->sesi1 }}</td>
                                    <td>{{ $psn->hari2 }}</td>
                                    <td>{{ $psn->sesi2 }}</td>
                                    <td>{{ $psn->hari3 }}</td>
                                    <td>{{ $psn->sesi3 }}</td>
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