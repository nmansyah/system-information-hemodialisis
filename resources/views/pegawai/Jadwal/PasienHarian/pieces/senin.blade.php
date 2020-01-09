<h2>Senin</h2>
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
        @foreach ($pasienSenin as $psn)
            <tr>
                @if($psn->hari1 == 'Senin' || $psn->hari2 == 'Senin' || $psn->hari3 == 'Senin')
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
