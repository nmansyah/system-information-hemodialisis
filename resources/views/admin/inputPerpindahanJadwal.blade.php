@extends('layouts.adminUser')

@section('title', 'Input Pindah Jadwal')

@section('content')

    <div class="x_content" id="app">

        <form class="form-horizontal form-label-left" action="/admin/inputPerpindahanJadwal" method="post" value="post"
              novalidate>
            <span class="section">Masukkan Perpindahan Jadwal Sementara</span>
            @include('layouts.alert')
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pasien <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control select2" v-model="patient_id" name="nama" v-select="patient_id">
                        @foreach($pasien as $psn)
                            <option value="{{$psn->id}}">{{$psn->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal <span
                        class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="tanggal" type="date" name="tanggal" data-validate-length-range="5,20"
                           class="optional form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required"
                    class="col-2 col-form-label">Hari dan Sesi Sebelumnya</label>
                <div class="row">

                    <div class="col-8 col-md-2">
                        <a href="#" class="btn btn-primary" @click="fetchSession">Load hari & sesi pasien</a>
                    </div>
                    <div class="col-8 col-md-2 old_session">
                        <select class="custom-select form-control" name="old_session">
                            <option v-for="session in sessions" :value="session">@{{ session }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-text-input" required="required"
                       class="col-2 col-form-label">Pindah menjadi Hari dan Sesi</label>
                <div class="col-8 col-md-2">
                    <select class="custom-select" id="hari1" name="hari1">
                        <option selected>Pilih Hari...</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>
                <div class="col-8 col-md-4">
                    <select class="custom-select" id="sesi1" name="sesi1">
                        <option selected>Pilih Sesi...</option>
                        <option value="Sesi 1">Sesi 1</option>
                        <option value="Sesi 2">Sesi 2</option>
                        <option value="Sesi 3">Sesi 3</option>
                    </select>
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary" onclick="location.href='/admin/dataPerpindahJadwal'">
                        Cancel
                    </button>
                    <button id="send" type="submit" class="btn btn-success"
                            onclick="return confirm ('Apakah Data yang dimasukkan sudah benar?')">Submit
                    </button>
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    </div>
@endsection

@section('jsScript')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script>
        $(document).ready(function () {
            Vue.directive('select', {
                twoWay: true,
                bind: function (el, binding, vnode) {
                    $(el).select2().on("select2:select", (e) => {
                        // v-model looks for
                        //  - an event named "change"
                        //  - a value with property path "$event.target.value"
                        el.dispatchEvent(new Event('change', {
                            target: e.target
                        }));
                    });
                },
            });
            new Vue({
                el: '#app',
                data() {
                    return {
                        info: null,
                        patient_id: '',
                        sessions: [],
                    }
                },
                filters: {
                },
                mounted() {
                    //   this.fetchSession(),
                },
                methods: {
                    fetchSession: function () {
                        axios
                            .get('http://localhost:8000/api/patients/' + this.patient_id + '/sessions')
                            .then(response => {
                                this.sessions = response.data
                                $('.old_session').show()
                                console.log(response)
                            }).catch(err => console.log(err))
                    },
                    getPatientId: function (e) {
                        console.log(e)
                        this.patient_id = e.target.value
                        this.fetchSession()
                    }
                }
            })
            $('.old_session').hide()
            $('.select2').select2();
        })
    </script>
@endsection
