<h3>Sesi 3</h3>
<table class="table table-bordered" id="datatable">
    <thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($kehadiranSesi3 as $psn)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $psn->pasien['nama'] }}</td>
            <td>{{ $psn->kehadiran }}</td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>
