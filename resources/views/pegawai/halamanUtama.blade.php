@extends('layouts.pegawaiUser')

@section('title', 'Halaman Utama')

@section('chart')
<div class="col-md-6 col-sm-6 col-xs-12">
  <div class="x_panel">
    <div id="chartMeninggal">
    </div>
  </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
  <div class="x_panel">
    <div id="chartTraveling">
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div id="chartRawatinap">
        </div>
    </div>
</div>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    Highcharts.chart('chartMeninggal', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Monitoring Pasien Meninggal'
        },
        
        xAxis: {
            categories: [
                {{$years[2] }}, {{$years[1]}}, {{$years[0]}}
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Pasien'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Pasien Meninggal',
            data: [{{$meninggal}}, {{$meninggal1}}, {{$meninggal2}}]

        }]
    });
  </script>

  <script>
    Highcharts.chart('chartTraveling', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Monitoring Pasien Traveling'
        },
        
        xAxis: {
            categories: [
                {{$years[2] }}, {{$years[1]}}, {{$years[0]}}
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Pasien'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Pasien Traveling',
            data: [{{$traveling}}, {{$traveling1}}, {{$traveling2}}]

        }]
    });
  </script>

  <script>
    Highcharts.chart('chartRawatinap', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Monitoring Pasien Rawat Inap'
        },
        
        xAxis: {
            categories: [
                {{$years[2] }}, {{$years[1]}}, {{$years[0]}}
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Pasien'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Pasien Rawat Inap',
            data: [{{$rawatinap}}, {{$rawatinap1}}, {{$rawatinap2}}]

        }]
    });
  </script>
  
@endsection