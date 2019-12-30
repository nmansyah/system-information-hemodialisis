@extends('layouts.adminUser')

@section('title', 'Jadwal Admin')

@section('content') 
        <a href="/admin/inputJadwalAdmin"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jadwal Perawat <small>Minggu 1 Bulan November</small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Senin</th>
                          <th>Selasa</th>
                          <th>Rabu</th>
                          <th>Kamis</th>
                          <th>Jumat</th>
                          <th>Sabtu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Anang Hermansyah S.Kep</td>
                          <td>10.00</td>
                          <td>-</td>
                          <td>-</td>
                          <td>13.00</td>
                          <td>08.00</td>
                          <td>09.00</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Riska Jelita S.Kep</td>
                          <td>10.00</td>
                          <td>-</td>
                          <td>08.00</td>
                          <td>-</td>
                          <td>08.00</td>
                          <td>09.00</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
@endsection