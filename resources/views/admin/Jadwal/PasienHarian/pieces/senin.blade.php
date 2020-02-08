<h2>Senin</h2>
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
        @foreach ($pasienSenin as $psn)
            <tr>
                {{ pembagianJadwalHarian($psn, 'Senin') }}
            @php
                $i++;
            @endphp

        @endforeach
        </tbody>
    </table>
</div>
