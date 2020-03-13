<h1>Senin</h1>
<div class="x_content">
    <h3>Sesi 1</h3>
    <table class="table table-bordered dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Pindah Jadwal</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
            $sesi = 'Sesi 1';
            $hari = 'Senin';
        @endphp
        @foreach ($pasienSenin as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || 
            ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || 
            ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>
                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap</span></td>
                    @elseif($pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                    @php
                        $pj = $pasien->isReschedule($hari, $sesi);
                    @endphp
                    @if($pj)
                    <td><a href="{{ route('admin.perpindahanJadwal.edit', $pj->id) }}"><span
                        class="label label-warning">Pindah ke hari {{ $pj->hari1 }} sesi ke-{{ $pj->sesi1 }}</span></a>
                        </td>
                    @else
                        <td></td>
                    @endif
                </tr>
                @php
                    $i += 1;
                @endphp
            @endif
        @endforeach

        @foreach ($temporaryPatients as $tp)
            @if( ($tp->sesi1 == $sesi && $tp->hari1 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $tp->pasien->nama }}</td>
                    @if($tp->pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap {{ $tp->pasien->getUnitPatient() }}</span></td>
                    @elseif($tp->pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                <td><span class="label label-success">Pasien pindah dari hari {{ $tp->old_day }}, {{ $tp->old_session }}</span></td>
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
            <th>Pindah Jadwal</th>
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
                @elseif($pasien->isInTraveling())
                    <td><span class="label label-success">Traveling</span></td>
                @else
                    <td><span class="label"></span></td>
                @endif

                @php
                    $pj = $pasien->isReschedule($hari, $sesi);
                @endphp
                @if($pj)
                    <td><a href="{{ route('admin.perpindahanJadwal.edit', $pj->id) }}"><span
                                class="label label-warning">Pindah ke hari {{ $pj->hari1 }} sesi ke-{{ $pj->sesi1 }}</span></a>
                    </td>
                @else
                    <td></td>
                @endif
            </tr>
                @php
                    $i += 1;
                @endphp
            @endif
        @endforeach

        @foreach ($temporaryPatients as $tp)
            @if( ($tp->sesi1 == $sesi && $tp->hari1 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $tp->pasien->nama }}</td>
                    @if($tp->pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap {{ $tp->pasien->getUnitPatient() }}</span></td>
                    @elseif($tp->pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                <td><span class="label label-success">Pasien pindah dari hari {{ $tp->old_day }}, {{ $tp->old_session }}</span></td>
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
            <th>Pindah Jadwal</th>
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
                @elseif($pasien->isInTraveling())
                    <td><span class="label label-success">Traveling</span></td>
                @else
                    <td><span class="label"></span></td>
                @endif

                @php
                    $pj = $pasien->isReschedule($hari, $sesi);
                @endphp
                @if($pj)
                    <td><a href="{{ route('admin.perpindahanJadwal.edit', $pj->id) }}"><span
                                class="label label-warning">Pindah ke hari {{ $pj->hari1 }} sesi ke-{{ $pj->sesi1 }}</span></a>
                    </td>
                @else
                    <td></td>
                @endif
            </tr>
                @php
                    $i += 1;
                @endphp
            @endif
        @endforeach

        @foreach ($temporaryPatients as $tp)
            @if( ($tp->sesi1 == $sesi && $tp->hari1 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $tp->pasien->nama }}</td>
                    @if($tp->pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap {{ $tp->pasien->getUnitPatient() }}</span></td>
                    @elseif($tp->pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                <td><span class="label label-success">Pasien pindah dari hari {{ $tp->old_day }}, {{ $tp->old_session }}</span></td>
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
