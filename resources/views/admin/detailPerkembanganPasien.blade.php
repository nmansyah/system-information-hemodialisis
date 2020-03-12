@extends('layouts.adminUser')

@section('title', 'Data Perkembangan Pasien '.ucwords($dataPerkembanganPasiens[0]->pasien['name']))

@section('content')
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Kondisi Pasien {{ ucwords($dataPerkembanganPasiens[0]->pasien['nama']) }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <canvas id="hbChart" width="400" height="200"></canvas>
                <canvas id="ureumChart" width="400" height="200"></canvas>
                <canvas id="kreatininChart" width="400" height="200"></canvas>
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
                    @php
                        $hbs = [];
                        $ureums = [];
                        $kreatinins = [];
                        $tanggal = [];
                    @endphp
                    @foreach ($dataPerkembanganPasiens as $pp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pp->tanggal }}</td>
                            <td>{{ $pp->hb }}</td>
                            <td>{{ $pp->ureum }}</td>
                            <td>{{ $pp->kreatinin }}</td>
                        </tr>
                        @php
                            if(!is_null($pp)){
                                $hbs[] = $pp->hb;
                                $ureums[] = $pp->ureum;
                                $kreatinins[] = $pp->kreatinin;
                                $tanggal[] = date('d-m-Y', strtotime($pp->tanggal));
                            }
                        @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script>
        const ctx = document.getElementById('hbChart').getContext('2d');
        const ctUreum = document.getElementById('ureumChart').getContext('2d');
        const ctKreatinin = document.getElementById('kreatininChart').getContext('2d');
        const hbs =
            {!! json_encode($hbs) !!}
        const ureums =
            {!! json_encode($ureums) !!}
        const kreatinins =
            {!! json_encode($kreatinins) !!}
        const tanggal =
            {!! json_encode($tanggal) !!}
        const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: tanggal,
                    datasets: [{
                        label: '# HB',
                        data: hbs,
                        backgroundColor: [
                            'rgba(255, 206, 86, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        const ureumChart = new Chart(ctUreum, {
            type: 'line',
            data: {
                labels: tanggal,
                datasets: [{
                    label: '# Ureum',
                    data: ureums,
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        const kreatininChart = new Chart(ctKreatinin, {
            type: 'line',
            data: {
                labels: tanggal,
                datasets: [{
                    label: '# Kreatinin',
                    data: kreatinins,
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
