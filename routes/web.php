<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//Authentikasi
Auth::routes();

//Guest
Route::prefix('guest')->group(function () {
    Route::get('/home', 'Guest\HomeController@index')->name('guest.home');
    Route::get('/jadwalDokter', 'Guest\JadwalDokterController@index')->name('guest.jadwalDokter');
    Route::get('/jadwalPerawat', 'Guest\JadwalPerawatController@index')->name('guest.jadwalPerawat');
});

//Admin
Route::prefix('admin')->group(function () {
    //index Admin
    Route::get('/indexAdmin', 'Admin\AdminController@index');

    //Dashboard
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    //Dokter
    Route::get('/dataDokter', 'Admin\InputDokterController@show')->name('admin.data.dokter');
    Route::get('/inputDokter', 'Admin\InputDokterController@index');
    Route::post('/inputDokter', 'Admin\InputDokterController@store');
    Route::delete('/inputDokter/{id}/delete', 'Admin\InputDokterController@delete')->name('admin.dokter.delete');
    Route::get('/inputDokter/{id}/edit', 'Admin\InputDokterController@edit');
    Route::put('/inputDokter/{id}/update', 'Admin\InputDokterController@update');

    //Pasien
    Route::get('/dataPasien', 'Admin\InputPasienController@show')->name('admin.data.pasien');
    Route::get('/inputPasien', 'Admin\InputPasienController@index');
    Route::post('/inputPasien', 'Admin\InputPasienController@store');
    Route::delete('/inputPasien/{id}/delete', 'Admin\InputPasienController@delete')->name('admin.pasien.delete');
    Route::get('/inputPasien/{id}/edit', 'Admin\InputPasienController@edit');
    Route::put('/inputPasien/{id}/update', 'Admin\InputPasienController@update');

    //Kehadiran
    Route::group(['prefix' => '{pasien_id}'], function () {
        Route::get('/inputKehadiran', 'Admin\InputKehadiranController@index');
        Route::get('dataKehadiran', 'Admin\DataKehadiranController@index')->name('admin.data.kehadiran');
        Route::delete('dataKehadiran/{kehadiran_id}/delete', 'Admin\InputKehadiranController@delete')->name('admin.data.kehadiran.pasien.delete');
        Route::get('inputKehadiran/{kehadiran_id}/edit', 'Admin\InputKehadiranController@edit');
        Route::put('inputKehadiran/{kehadiran_id}', 'Admin\InputKehadiranController@update');
        Route::post('inputKehadiran', 'Admin\InputKehadiranController@store');
    });

    //status kehadiran
    Route::group(['prefix' => 'status-kehadiran'], function () {
        Route::get('/', 'Admin\AdminStatusKehadiranController@index')->name('admin.status.kehadiran.index');
    });

    //Perawat
    Route::get('/dataPerawat', 'Admin\InputPerawatController@show')->name('admin.data.perawat');
    Route::get('/inputPerawat', 'Admin\InputPerawatController@index');
    Route::post('/inputPerawat', 'Admin\InputPerawatController@store');
    Route::delete('/inputPerawat/{id}/delete', 'Admin\InputPerawatController@delete')->name('admin.perawat.delete');
    Route::get('/inputPerawat/{id}/edit', 'Admin\InputPerawatController@edit');
    Route::put('/inputPerawat/{id}/update', 'Admin\InputPerawatController@update');

    // //Jadwal Admin
    // Route::get('/jadwalAdmin', 'Admin\JadwalAdminController@index')->name('data.jadwalAdmin');
    // Route::get('/inputJadwalAdmin', 'Admin\InputJadwalAdminController@index');
    // Route::post('/inputJadwalAdmin', 'Admin\InputJadwalAdminController@store');

    //Jadwal Dokter
    Route::get('/jadwalDokter', 'Admin\InputJadwalDokterController@show')->name('admin.data.jadwalDokter');
    Route::get('/inputJadwalDokter', 'Admin\InputJadwalDokterController@index');
    Route::post('/inputJadwalDokter', 'Admin\InputJadwalDokterController@store');
    Route::delete('/inputJadwalDokter/{id}/delete', 'Admin\InputJadwalDokterController@delete')->name('admin.jadwalDokter.delete');
    Route::get('/inputJadwalDokter/{id}/edit', 'Admin\InputJadwalDokterController@edit');
    Route::put('/inputJadwalDokter/{id}/update', 'Admin\InputJadwalDokterController@update');

    //Jadwal Pasien
    Route::get('/jadwalPasien', 'Admin\JadwalPasienController@index');
    //jadwal pasien harian
    Route::resources([
        'jadwalPasienHarian' => 'Admin\AdminJadwalPasienHarianController',
    ], [
        'as' => 'admin'
    ]);

    //Jadwal Perawat
    Route::get('/jadwalPerawat', 'Admin\InputJadwalPerawatController@show')->name('admin.data.jadwalPerawat');
    Route::get('/inputJadwalPerawat', 'Admin\InputJadwalPerawatController@index');
    Route::post('/inputJadwalPerawat', 'Admin\InputJadwalPerawatController@store');
    Route::delete('/inputJadwalPerawat/{id}/delete', 'Admin\InputJadwalPerawatController@delete')->name('admin.jadwalPerawat.delete');
    Route::get('/inputJadwalPerawat/{id}/edit', 'Admin\InputJadwalPerawatController@edit');
    Route::put('/inputJadwalPerawat/{id}/update', 'Admin\InputJadwalPerawatController@update');

    //Perkembangan Pasien
    Route::get('/dataPerkembanganPasien', 'Admin\InputPerkembanganPasienController@show')->name('admin.data.perkembanganPasien');
    Route::get('/inputPerkembanganPasien', 'Admin\InputPerkembanganPasienController@index');
    Route::post('/inputPerkembanganPasien', 'Admin\InputPerkembanganPasienController@store');
    Route::delete('/inputPerkembanganPasien/{id}/delete', 'Admin\InputPerkembanganPasienController@delete')->name('admin.perkembanganPasien.delete');
    Route::get('/inputPerkembanganPasien/{id}/edit', 'Admin\InputPerkembanganPasienController@edit');
    Route::put('/inputPerkembanganPasien/{id}/update', 'Admin\InputPerkembanganPasienController@update');
    Route::get('/data-perkembangan-pasien/{pasien_id}', 'Admin\DataPerkembanganPasienController@show')->name('admin.data.perkembangan.pasien.show');

    //Kehadiran Pasien
    Route::get('/dataKehadiranPasien/month', 'Admin\DataKehadiranPasienController@fetch')->name('admin.data.kehadiranPasien');
    Route::get('/dataKehadiranPasien/month/{month}/year/{year}', 'Admin\DataKehadiranPasienController@show');
    Route::get('/dataKehadiranPasien', 'Admin\DataKehadiranPasienController@index')->name('admin.data.kehadiranPasiens');
    Route::get('/inputKehadiranPasien', 'Admin\InputKehadiranPasienController@index');
    Route::post('/inputKehadiranPasien', 'Admin\InputKehadiranPasienController@store');
    Route::delete('/inputKehadiranPasien/{id}/delete', 'Admin\InputKehadiranPasienController@delete')->name('admin.kehadiranPasien.delete');
    Route::get('/inputKehadiranPasien/{id}/edit', 'Admin\InputKehadiranPasienController@edit');
    Route::put('/inputKehadiranPasien/{id}/update', 'Admin\InputKehadiranPasienController@update');

    //Perpindahan Jadwal
    Route::get('/dataPerpindahJadwal', 'Admin\InputPerpindahJadwalController@show')->name('admin.data.perpindahanJadwal');
    Route::get('/inputPerpindahanJadwal', 'Admin\InputPerpindahJadwalController@index');
    Route::post('/inputPerpindahanJadwal', 'Admin\InputPerpindahJadwalController@store');
    Route::delete('/inputPerpindahanJadwal/{id}/delete', 'Admin\InputPerpindahJadwalController@delete')->name('admin.perpindahanJadwal.delete');
    Route::get('/inputPerpindahanJadwal/{id}/edit', 'Admin\InputPerpindahJadwalController@edit');
    Route::put('/inputPerpindahanJadwal/{id}/update', 'Admin\InputPerpindahJadwalController@update');

    //Pasien Meninggal
    Route::get('/dataPasienMeninggal', 'Admin\InputPasienMeninggalController@show')->name('admin.data.pasienMeninggal');
    Route::get('/inputPasienMeninggal', 'Admin\InputPasienMeninggalController@index');
    Route::post('/inputPasienMeninggal', 'Admin\InputPasienMeninggalController@store');
    Route::delete('/inputPasienMeninggal/{id}/delete', 'Admin\InputPasienMeninggalController@delete')->name('admin.pasienMeninggal.delete');
    Route::get('/inputPasienMeninggal/{id}/edit', 'Admin\InputPasienMeninggalController@edit');
    Route::put('/inputPasienMeninggal/{id}/update', 'Admin\InputPasienMeninggalController@update');

    //Pasien Rawatinap
    Route::get('/dataPasienRawatinap', 'Admin\InputPasienRawatinapController@show')->name('admin.data.pasienRawatinap');
    Route::get('/inputPasienRawatinap', 'Admin\InputPasienRawatinapController@index');
    Route::post('/inputPasienRawatinap', 'Admin\InputPasienRawatinapController@store');
    Route::delete('/inputPasienRawatinap/{id}/delete', 'Admin\InputPasienRawatinapController@delete')->name('admin.pasienRawatinap.delete');
    Route::get('/inputPasienRawatinap/{id}/edit', 'Admin\InputPasienRawatinapController@edit');
    Route::put('/inputPasienRawatinap/{id}/update', 'Admin\InputPasienRawatinapController@update');
    Route::put('/pasien-rawat-inap/{id}/chek-out', 'Admin\AdminDataPasienRawatInapCheckout')->name('admin.pasien.rawat.inap.check.out');

    //Pasien Traveling Sementara
    Route::get('/dataPasienTravelingSementara', 'Admin\InputPasienTravelingSementaraController@show')->name('admin.data.pasienTravelingSementara');
    Route::get('/inputPasienTravelingSementara', 'Admin\InputPasienTravelingSementaraController@index');
    Route::post('/inputPasienTravelingSementara', 'Admin\InputPasienTravelingSementaraController@store');
    Route::delete('/inputPasienTravelingSementara/{id}/delete', 'Admin\InputPasienTravelingSementaraController@delete')->name('admin.pasienTravelingSementara.delete');
    Route::get('/inputPasienTravelingSementara/{id}/edit', 'Admin\InputPasienTravelingSementaraController@edit');
    Route::put('/inputPasienTravelingSementara/{id}/update', 'Admin\InputPasienTravelingSementaraController@update');

    //Pasien Traveling
    Route::get('/dataPasienTraveling', 'Admin\InputPasienTravelingController@show')->name('admin.data.pasienTraveling');
    Route::get('/inputPasienTraveling', 'Admin\InputPasienTravelingController@index');
    Route::post('/inputPasienTraveling', 'Admin\InputPasienTravelingController@store');
    Route::delete('/inputPasienTraveling/{id}/delete', 'Admin\InputPasienTravelingController@delete')->name('admin.pasienTraveling.delete');
    Route::get('/inputPasienTraveling/{id}/edit', 'Admin\InputPasienTravelingController@edit');
    Route::put('/inputPasienTraveling/{id}/update', 'Admin\InputPasienTravelingController@update');

});

//Pegawai
Route::prefix('pegawai')->group(function () {
    //Index Pegawai
    Route::get('/indexPegawai', 'Pegawai\PegawaiController@index');

    //Halaman Utama
    Route::get('/halamanUtama', 'Pegawai\DashboardController@index')->name('pegawai.dashboard');

    //Data Pasien
    Route::get('/dataPasien', 'Pegawai\DataPasienController@index')->name('data.pasien');

    //Askep & Kehadiran
    Route::group(['prefix' => '{pasien_id}'], function () {
        //Askep
        Route::get('dataAskep', 'Pegawai\DataAskepController@index')->name('pegawai.data.askep');
        Route::get('dataAskep/{askep_id}', 'Pegawai\DataAskepController@show')->name('pegawai.data.askep.pasien.show');
        Route::put('dataAskep/{askep_id}', 'Pegawai\DataAskepController@update')->name('pegawai.data.askep.pasien.update');
        Route::get('dataAskep/{askep_id}/print', 'Pegawai\DataAskepController@printAskep')->name('pegawai.data.askep.pasien.print');
        Route::get('inputAskep', 'Pegawai\InputAskepController@index');
        Route::post('inputAskep', 'Pegawai\InputAskepController@store');
        Route::delete('dataAskep/{askep_id}/delete', 'Pegawai\DataAskepController@delete')->name('pegawai.data.askep.pasien.delete');
        //Kehadiran
        Route::get('dataKehadiran', 'Pegawai\DataKehadiranController@index')->name('pegawai.data.kehadiran');
        Route::get('inputKehadiran', 'Pegawai\InputKehadiranController@index');
        Route::post('inputKehadiran', 'Pegawai\InputKehadiranController@store');
        Route::delete('dataKehadiran/{kehadiran_id}/delete', 'Pegawai\InputKehadiranController@delete')->name('pegawai.data.kehadiran.pasien.delete');
        Route::get('/inputKehadiran/{kehadiran_id}/edit', 'Pegawai\InputKehadiranController@edit');
        Route::put('/inputKehadiran/{kehadiran_id}', 'Pegawai\InputKehadiranController@update')->name('pegawai.data.kehadiran.pasien.update');
    });

    //Jadwal Dokter
    Route::get('/jadwalDokter', 'Pegawai\JadwalDokterController@index')->name('data.jadwalDokter');

    //Jadwal Perawat
    Route::get('/jadwalPerawat', 'Pegawai\JadwalPerawatController@index')->name('data.jadwalPerawat');

    //Jadwal Pasien
    Route::get('/jadwalPasien', 'Pegawai\JadwalPasienController@index');

    //jadwal pasien harian
    Route::resources([
        'jadwalPasienHarian' => 'Pegawai\PegawaiJadwalPasienHarianController',
    ], [
        'as' => 'pegawai'
    ]);

    //Perkembangan Pasien
    Route::get('/dataPerkembanganPasien', 'Pegawai\InputPerkembanganPasienController@show')->name('pegawai.data.perkembanganPasien');
    Route::get('/inputPerkembanganPasien', 'Pegawai\InputPerkembanganPasienController@index');
    Route::post('/inputPerkembanganPasien', 'Pegawai\InputPerkembanganPasienController@store');
    Route::delete('/inputPerkembanganPasien/{id}/delete', 'Pegawai\InputPerkembanganPasienController@delete')->name('pegawai.perkembanganPasien.delete');
    Route::get('/inputPerkembanganPasien/{id}/edit', 'Pegawai\InputPerkembanganPasienController@edit');
    Route::put('/inputPerkembanganPasien/{id}/update', 'Pegawai\InputPerkembanganPasienController@update');

    //Perpindahan Jadwal
    Route::get('/dataPerpindahJadwal', 'Pegawai\InputPerpindahJadwalController@show')->name('pegawai.data.perpindahanJadwal');
    Route::get('/inputPerpindahanJadwal', 'Pegawai\InputPerpindahJadwalController@index');
    Route::post('/inputPerpindahanJadwal', 'Pegawai\InputPerpindahJadwalController@store');
    Route::delete('/inputPerpindahanJadwal/{id}/delete', 'Pegawai\InputPerpindahJadwalController@delete')->name('pegawai.perpindahanJadwal.delete');
    Route::get('/inputPerpindahanJadwal/{id}/edit', 'Pegawai\InputPerpindahJadwalController@edit');
    Route::put('/inputPerpindahanJadwal/{id}/update', 'Pegawai\InputPerpindahJadwalController@update');

    //Pasien Meninggal
    Route::get('/dataPasienMeninggal', 'Pegawai\InputPasienMeninggalController@show')->name('pegawai.data.pasienMeninggal');
    Route::get('/inputPasienMeninggal', 'Pegawai\InputPasienMeninggalController@index');
    Route::post('/inputPasienMeninggal', 'Pegawai\InputPasienMeninggalController@store');
    Route::delete('/inputPasienMeninggal/{id}/delete', 'Pegawai\InputPasienMeninggalController@delete')->name('pegawai.pasienMeninggal.delete');
    Route::get('/inputPasienMeninggal/{id}/edit', 'Pegawai\InputPasienMeninggalController@edit');
    Route::put('/inputPasienMeninggal/{id}/update', 'Pegawai\InputPasienMeninggalController@update');

    //Pasien Rawat Inap
    Route::get('/dataPasienRawatinap', 'Pegawai\InputPasienRawatinapController@show')->name('pegawai.data.pasienRawatinap');
    Route::get('/inputPasienRawatinap', 'Pegawai\InputPasienRawatinapController@index');
    Route::post('/inputPasienRawatinap', 'Pegawai\InputPasienRawatinapController@store');
    Route::delete('/inputPasienRawatinap/{id}/delete', 'Pegawai\InputPasienRawatinapController@delete')->name('pegawai.pasienRawatinap.delete');
    Route::get('/inputPasienRawatinap/{id}/edit', 'Pegawai\InputPasienRawatinapController@edit');
    Route::put('/inputPasienRawatinap/{id}/update', 'Pegawai\InputPasienRawatinapController@update');

    //Pasien Traveling Sementara
    Route::get('/dataPasienTravelingSementara', 'Pegawai\InputPasienTravelingSementaraController@show')->name('pegawai.data.pasienTravelingSementara');
    Route::get('/inputPasienTravelingSementara', 'Pegawai\InputPasienTravelingSementaraController@index');
    Route::post('/inputPasienTravelingSementara', 'Pegawai\InputPasienTravelingSementaraController@store');
    Route::delete('/inputPasienTravelingSementara/{id}/delete', 'Pegawai\InputPasienTravelingSementaraController@delete')->name('pegawai.pasienTravelingSementara.delete');
    Route::get('/inputPasienTravelingSementara/{id}/edit', 'Pegawai\InputPasienTravelingSementaraController@edit');
    Route::put('/inputPasienTravelingSementara/{id}/update', 'Pegawai\InputPasienTravelingSementaraController@update');

    //Pasien Traveling
    Route::get('/dataPasienTraveling', 'Pegawai\InputPasienTravelingController@show')->name('pegawai.data.pasienTraveling');
    Route::get('/inputPasienTraveling', 'Pegawai\InputPasienTravelingController@index');
    Route::post('/inputPasienTraveling', 'Pegawai\InputPasienTravelingController@store');
    Route::delete('/inputPasienTraveling/{id}/delete', 'Pegawai\InputPasienTravelingController@delete')->name('pegawai.pasienTraveling.delete');
    Route::get('/inputPasienTraveling/{id}/edit', 'Pegawai\InputPasienTravelingController@edit');
    Route::put('/inputPasienTraveling/{id}/update', 'Pegawai\InputPasienTravelingController@update');
});

//Dokter
Route::prefix('dok')->group(function () {
    //Halaman Utama
    Route::get('/halamanUtama', 'Dok\DashboardController@index')->name('dok.dashboard');
    //Index Dokter
    Route::get('/indexDokter', 'Dok\DokController@index');
    //Data Pasien
    Route::get('/dataPasien', 'Dok\DataPasienController@index')->name('data.pasien');
    // //Askep
    Route::group(['prefix' => '{pasien_id}'], function () {
        Route::get('dataAskep', 'Dok\DataAskepController@index')->name('dok.data.dataAskep');
        Route::get('dataAskep/{askep_id}', 'Dok\DataAskepController@show')->name('dok.data.askep.pasien.show');
    });
    //Pasien Meninggal
    Route::get('/dataPasienMeninggal', 'Dok\DataPasienMeninggalController@index')->name('data.pasienMeninggal');
    //Perkembangan Pasien
    Route::get('/dataPerkembanganPasien', 'Dok\DataPerkembanganPasienController@index')->name('data.perkembanganPasien');
     //Pasien Traveling
    Route::get('/dataPasienTraveling', 'Dok\DataPasienTravelingController@index')->name('data.pasienTraveling');
    //Pasien Rawatinap
    Route::get('/dataPasienRawatinap', 'Dok\DataPasienRawatinapController@index')->name('data.pasienRawatinap');

});
