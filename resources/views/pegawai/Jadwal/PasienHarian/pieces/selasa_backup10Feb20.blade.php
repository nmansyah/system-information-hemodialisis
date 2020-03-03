<h2>Selasa</h2>
<div class="x_content">
    @php
        $i=1;
    @endphp
    <table class="table table-bordered" >
        <thead>
        <tr>
            <th>#</th>
            <th>Sesi 1</th>
            <th>Sesi 2</th>
            <th>Sesi 3</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pasienSelasa as $psn)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
            {{ pembagianJadwalHarian($psn, 'Selasa') }}
        @endforeach
        </tbody>
    </table>
</div>
