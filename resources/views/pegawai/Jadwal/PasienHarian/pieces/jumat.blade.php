<h2>Jumat</h2>
<div class="x_content">
    @php
        $i=1;
    @endphp
    <table class="table table-bordered" id="datatable">
        <thead>
        <tr>
            <th>Sesi 1</th>
            <th>Sesi 2</th>
            <th>Sesi 3</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pasienJumat as $psn)
            <tr>
                @if($psn->hari1 == 'Jumat' || $psn->hari2 == 'Juamat' || $psn->hari3 == 'Jumat')
                    <td>{{ ( $psn->sesi1 == 'Sesi 1' ? $psn->nama : 'Kosong') }}</td>
                    <td>{{ ( $psn->sesi2 == 'Sesi 2' ? $psn->nama : 'Kosong') }}</td>
                    <td>{{ ( $psn->sesi3 == 'Sesi 3' ? $psn->nama : 'Kosong') }}</td>
            @endif
            @php
                $i++;
            @endphp

        @endforeach
        </tbody>
    </table>
</div>
