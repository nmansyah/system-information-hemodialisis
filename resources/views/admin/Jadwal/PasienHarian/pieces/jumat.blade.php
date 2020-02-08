<h2>Jumat</h2>
<div class="x_content">
    @php
        $i=1;
    @endphp
    <table class="table table-bordered" >
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
            {{ pembagianJadwalHarian($psn, 'Jumat') }}
            @php
                $i++;
            @endphp

        @endforeach
        </tbody>
    </table>
</div>
