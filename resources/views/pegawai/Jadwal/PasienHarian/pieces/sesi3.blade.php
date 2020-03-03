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
    @foreach ($pasienSenin as $psn)
        @if( $psn->sesi1 == 'Sesi 3' || $psn->sesi2 == 'Sesi 3' || $psn->sesi3 == 'Sesi 3' )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $psn->nama }}</td>
                <td>{{ $psn->kehadiran }}</td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>
