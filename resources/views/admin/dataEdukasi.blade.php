@extends('layouts.adminUser')

@section('title', 'Data Edukasi')

@section('content') 
<a href="/admin/inputEdukasi"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Edukasi Kesehatan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Deskripsi</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <td>1</td> 
                        <td>10/11/2019</td>
                        <td>Makanan yang dianjurkan dikonsumsi</td>
                        <td>icon.jpg</td>
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
@endsection