<h2>Selasa</h2>
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
        @foreach ($pasienSelasa as $psn)
            <tr>
            {{ pembagianJadwalHarian($psn, 'Selasa') }}
            @php
                $i++;
            @endphp

        @endforeach
        </tbody>
    </table>
</div>
