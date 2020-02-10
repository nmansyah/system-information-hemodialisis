<h1>Jumat</h1>
<div class="x_content">
    <h3>Sesi 1</h3>
    <table class="table table-bordered datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pasienJumat as $psn)
            @if( $psn->sesi1 == 'Sesi 1' || $psn->sesi2 == 'Sesi 1' || $psn->sesi3 == 'Sesi 1' )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $psn->nama }}</td>
                    @if($psn->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h3>Sesi 2</h3>
    <table class="table table-bordered datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pasienJumat as $psn)
            @if( $psn->sesi1 == 'Sesi 2' || $psn->sesi2 == 'Sesi 2' || $psn->sesi3 == 'Sesi 2' )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $psn->nama }}</td>
                    @if($psn->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h3>Sesi 3</h3>
    <table class="table table-bordered datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pasienJumat as $psn)
            @if( $psn->sesi1 == 'Sesi 3' || $psn->sesi2 == 'Sesi 3' || $psn->sesi3 == 'Sesi 3' )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $psn->nama }}</td>
                    @if($psn->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
<hr>
