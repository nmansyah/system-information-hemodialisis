@extends('layouts.pegawaiUser')

@section('title', 'Data Perkembangan Pasien '.ucwords($dataPerkembanganPasiens[0]->pasien['name']))

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Kondisi Pasien {{ ucwords($dataPerkembanganPasiens[0]->pasien['nama']) }}</h2>
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
                        <th>Tanggal</th>
                        <th>HB</th>
                        <th>Ureum</th>
                        <th>Kreatinin</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($dataPerkembanganPasiens as $pp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pp->tanggal }}</td>
                            <td>{{ $pp->hb }}</td>
                            <td>{{ $pp->ureum }}</td>
                            <td>{{ $pp->kreatinin }}</td>
                            
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
