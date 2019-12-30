@extends('layouts.adminUser')

@section('title', 'Data Kegiatan')

@section('content') 
<a href="/admin/inputKegiatan"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kegiatan Hemodialisa</h2>
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
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>13/11/2019</td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim doloremque ullam ipsa! Voluptates tenetur necessitatibus, nesciunt modi asperiores ducimus a illum porro doloribus dignissimos fuga neque fugit aut natus eveniet.</td>
                          <td>file photo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>12/12/2019</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, corrupti iusto. Magni amet nesciunt hic deserunt, asperiores esse corporis unde assumenda explicabo voluptatum eligendi repellat, possimus debitis tenetur exercitationem quidem.</td>
                          <td>file photo</td>
                          
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
@endsection