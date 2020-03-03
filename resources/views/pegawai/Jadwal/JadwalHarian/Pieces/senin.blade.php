<h1>Senin</h1>
<div class="x_content">
    <h3>Sesi 1</h3>
    <table class="table table-bordered dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @php
        $i = 1;
        $sesi = 'Sesi 1';
        $hari = 'Senin';
        @endphp
        @foreach ($pasienSenin as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>
                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif
                </tr>
                @php
                $i += 1;
                @endphp
            @endif
        @endforeach
        </tbody>
    </table>

    <h3>Sesi 2</h3>
    <table class="table table-bordered dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
            $sesi = 'Sesi 2';
        @endphp
        @foreach ($pasienSenin as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>
                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif
                </tr>
                @php
                    $i += 1;
                @endphp
            @endif
        @endforeach
        </tbody>
    </table>

    <h3>Sesi 3</h3>
    <table class="table table-bordered dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
            $sesi = 'Sesi 3';
        @endphp
        @foreach ($pasienSenin as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>
                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif
                </tr>
                @php
                    $i += 1;
                @endphp
            @endif
        @endforeach
        </tbody>
    </table>
</div>
<hr>
