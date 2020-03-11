<h1>{{ $hari }}</h1>
<div class="x_content">
    <h3>Sesi 1</h3>
    <table class="table table-bordered dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Pindah Jadwal</th>
            <th style="max-width: 10px">Kehadiran</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
            $sesi = 'Sesi 1';
        @endphp
        @foreach ($patients as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>

                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap {{ $pasien->getUnitPatient() }}</span></td>
                    @elseif($pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                    @php
                        $pj = $pasien->isReschedule($hari, $sesi);
                    @endphp
                    @if($pj)
                        <td><a href="{{ route('pegawai.perpindahanJadwal.edit', $pj->id) }}"><span
                                    class="label label-warning">Pindah ke hari {{ $pj->hari1 }} sesi ke-{{ $pj->sesi1 }}</span></a>
                        </td>
                    @else
                        <!-- <td><span class="label label-default">False</span></td> -->
                        <td></td>
                    @endif

                    @if($pasien->isInTraveling() || $pasien->isInPatient())
                        <td>
                            <button class="btn disabled btn-sm btn-secondary" title="Tidak bisa menambah kehadiran"><i class="fa fa-ban"></i></button>
                        </td>
                    @else
                        <td>
                            <form action="{{ route('pegawai.attendances.store', [$pasien->id, $sesi]) }}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Tambah kehadiran?')" class="btn btn-sm btn-primary" title="Tambah kehadiran"><i class="fa fa-plus-circle"></i></button>
                            </form>
                        </td>
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
            <th>Pindah Jadwal</th>
            <th style="max-width: 10px">Kehadiran</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
            $sesi = 'Sesi 2';
        @endphp
        @foreach ($patients as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>
                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap {{ $pasien->getUnitPatient() }}</span></td>
                    @elseif($pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                    @php
                        $pj = $pasien->isReschedule($hari, $sesi);
                    @endphp
                    @if($pj)
                        <td><a href="{{ route('pegawai.perpindahanJadwal.edit', $pj->id) }}"><span class="label label-warning">Pindah ke hari {{ $pj->hari1 }} sesi ke-{{ $pj->sesi1 }}</span></a></td>
                    @else
                        <!-- <td><span class="label label-default">False</span></td> -->
                        <td></td>
                    @endif

                    @if($pasien->isInTraveling() || $pasien->isInPatient())
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Tidak bisa menambah kehadiran"><i class="fa fa-ban"></i></button>
                        </td>
                    @else
                        <td>
                            <form action="{{ route('pegawai.attendances.store', [$pasien->id, $sesi]) }}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Tambah kehadiran?')" class="btn btn-sm btn-primary" title="Tambah kehadiran"><i class="fa fa-plus-circle"></i></button>
                            </form>
                        </td>
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
            <th>Pindah Jadwal</th>
            <th style="max-width: 10px">Kehadiran</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
            $sesi = 'Sesi 3';
        @endphp
        @foreach ($patients as $pasien)
            @if( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) )
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $pasien->nama }}</td>
                    @if($pasien->isInPatient())
                        <td><span class="label label-success">Rawat Inap {{ $pasien->getUnitPatient() }}</span></td>
                    @elseif($pasien->isInTraveling())
                        <td><span class="label label-success">Traveling</span></td>
                    @else
                        <td><span class="label"></span></td>
                    @endif

                    @php
                        $pj = $pasien->isReschedule($hari, $sesi);
                    @endphp
                    @if($pj)
                        <td><a href="{{ route('pegawai.perpindahanJadwal.edit', $pj->id) }}"><span class="label label-warning">Pindah ke hari {{ $pj->hari1 }} sesi ke-{{ $pj->sesi1 }}</span></a></td>
                    @else
                        <!-- <td><span class="label label-default">False</span></td> -->
                        <td></td>
                    @endif

                    @if($pasien->isInTraveling() || $pasien->isInPatient())
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Tidak bisa menambah kehadiran"><i class="fa fa-ban"></i></button>
                        </td>
                    @else
                        <td>
                            <form action="{{ route('pegawai.attendances.store', [$pasien->id, $sesi]) }}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Tambah kehadiran?')" class="btn btn-sm btn-primary" title="Tambah kehadiran"><i class="fa fa-plus-circle"></i></button>
                            </form>
                        </td>
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
