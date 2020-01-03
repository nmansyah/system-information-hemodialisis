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
    return view('guest/home');
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
    Route::get('/dataDokter', 'Admin\DataDokterController@index')->name('data.dokter');
    Route::get('/inputDokter', 'Admin\InputDokterController@index');
    Route::post('/inputDokter', 'Admin\InputDokterController@store');
    Route::delete('/inputDokter/{id}/delete', 'Admin\InputDokterController@delete')->name('admin.dokter.delete');
    Route::get('/inputDokter/{id}/edit', 'Admin\InputDokterController@edit');
    Route::put('/inputDokter/{id}/update', 'Admin\InputDokterController@update');

    //Pasien
    Route::get('/dataPasien', 'Admin\DataPasienController@index')->name('data.pasien');
    Route::get('/inputPasien', 'Admin\InputPasienController@index');
    Route::post('/inputPasien', 'Admin\InputPasienController@store');
    Route::delete('/inputPasien/{id}/delete', 'Admin\InputPasienController@delete')->name('admin.pasien.delete');
    Route::get('/inputPasien/{id}/edit', 'Admin\InputPasienController@edit');
    Route::put('/inputPasien/{id}/update', 'Admin\InputPasienController@update');

    //Perawat
    Route::get('/dataPerawat', 'Admin\DataPerawatController@index')->name('data.perawat');
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
    Route::get('/jadwalDokter', 'Admin\JadwalDokterController@index')->name('data.jadwalDokter');
    Route::get('/inputJadwalDokter', 'Admin\InputJadwalDokterController@index');
    Route::post('/inputJadwalDokter', 'Admin\InputJadwalDokterController@store');
    Route::delete('/inputJadwalDokter/{id}/delete', 'Admin\InputJadwalDokterController@delete')->name('admin.jadwalDokter.delete');
    Route::get('/inputJadwalDokter/{id}/edit', 'Admin\InputJadwalDokterController@edit');
    Route::put('/inputJadwalDokter/{id}/update', 'Admin\InputJadwalDokterController@update');

    //Jadwal Pasien
    Route::get('/jadwalPasien', 'Admin\JadwalPasienController@index');

    //Jadwal Perawat
    Route::get('/jadwalPerawat', 'Admin\JadwalPerawatController@index')->name('data.jadwalPerawat');
    Route::get('/inputJadwalPerawat', 'Admin\InputJadwalPerawatController@index');
    Route::post('/inputJadwalPerawat', 'Admin\InputJadwalPerawatController@store');
    Route::delete('/inputJadwalPerawat/{id}/delete', 'Admin\InputJadwalPerawatController@delete')->name('admin.jadwalPerawat.delete');
    Route::get('/inputJadwalPerawat/{id}/edit', 'Admin\InputJadwalPerawatController@edit');
    Route::put('/inputJadwalPerawat/{id}/update', 'Admin\InputJadwalPerawatController@update');

    //Perkembangan Pasien
    Route::get('/dataPerkembanganPasien', 'Admin\DataPerkembanganPasienController@index')->name('admin.data.perkembanganPasien');
    Route::get('/inputPerkembanganPasien', 'Admin\InputPerkembanganPasienController@index');
    Route::post('/inputPerkembanganPasien', 'Admin\InputPerkembanganPasienController@store');
    Route::delete('/inputPerkembanganPasien/{id}/delete', 'Admin\InputPerkembanganPasienController@delete')->name('admin.perkembanganPasien.delete');
    Route::get('/inputPerkembanganPasien/{id}/edit', 'Admin\InputPerkembanganPasienController@edit');
    Route::put('/inputPerkembanganPasien/{id}/update', 'Admin\InputPerkembanganPasienController@update');

    //Kehadiran Pasien
    Route::get('/dataKehadiranPasien', 'Admin\DataKehadiranPasienController@index')->name('data.kehadiranPasien');
    Route::get('/inputKehadiranPasien', 'Admin\InputKehadiranPasienController@index');
    Route::post('/inputKehadiranPasien', 'Admin\InputKehadiranPasienController@store');
    Route::delete('/inputKehadiranPasien/{id}/delete', 'Admin\InputKehadiranPasienController@delete')->name('admin.kehadiranPasien.delete');
    Route::get('/inputKehadiranPasien/{id}/edit', 'Admin\InputKehadiranPasienController@edit');
    Route::put('/inputKehadiranPasien/{id}/update', 'Admin\InputKehadiranPasienController@update');

    //Perpindahan Jadwal
    Route::get('/dataPerpindahJadwal', 'Admin\DataPerpindahJadwalController@index')->name('admin.data.perpindahanJadwal');
    Route::get('/inputPerpindahanJadwal', 'Admin\InputPerpindahJadwalController@index');
    Route::post('/inputPerpindahanJadwal', 'Admin\InputPerpindahJadwalController@store');
    Route::delete('/inputPerpindahanJadwal/{id}/delete', 'Admin\InputPerpindahJadwalController@delete')->name('admin.perpindahanJadwal.delete');
    Route::get('/inputPerpindahanJadwal/{id}/edit', 'Admin\InputPerpindahJadwalController@edit');
    Route::put('/inputPerpindahanJadwal/{id}/update', 'Admin\InputPerpindahJadwalController@update');

    //Pasien Meninggal
    Route::get('/dataPasienMeninggal', 'Admin\DataPasienMeninggalController@index')->name('admin.data.pasienMeninggal');
    Route::get('/inputPasienMeninggal', 'Admin\InputPasienMeninggalController@index');
    Route::post('/inputPasienMeninggal', 'Admin\InputPasienMeninggalController@store');
    Route::delete('/inputPasienMeninggal/{id}/delete', 'Admin\InputPasienMeninggalController@delete')->name('admin.pasienMeninggal.delete');
    Route::get('/inputPasienMeninggal/{id}/edit', 'Admin\InputPasienMeninggalController@edit');
    Route::put('/inputPasienMeninggal/{id}/update', 'Admin\InputPasienMeninggalController@update');

    //Pasien Rawatinap
    Route::get('/dataPasienRawatinap', 'Admin\DataPasienRawatinapController@index')->name('admin.data.pasienRawatinap');
    Route::get('/inputPasienRawatinap', 'Admin\InputPasienRawatinapController@index');
    Route::post('/inputPasienRawatinap', 'Admin\InputPasienRawatinapController@store');
    Route::delete('/inputPasienRawatinap/{id}/delete', 'Admin\InputPasienRawatinapController@delete')->name('admin.pasienRawatinap.delete');
    Route::get('/inputPasienRawatinap/{id}/edit', 'Admin\InputPasienRawatinapController@edit');
    Route::put('/inputPasienRawatinap/{id}/update', 'Admin\InputPasienRawatinapController@update');

    //Pasien Traveling
    Route::get('/dataPasienTraveling', 'Admin\DataPasienTravelingController@index')->name('admin.data.pasienTraveling');
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

    //Askep
    Route::get('/dataAskep', 'Pegawai\DataAskepController@index')->name('pegawai.data.askep');
    Route::get('/inputAskep', 'Pegawai\InputAskepController@index');
    Route::post('/inputAskep', 'Pegawai\InputAskepController@store');

    //Jadwal Dokter
    Route::get('/jadwalDokter', 'Pegawai\JadwalDokterController@index')->name('data.jadwalDokter');

    //Jadwal Perawat
    Route::get('/jadwalPerawat', 'Pegawai\JadwalPerawatController@index')->name('data.jadwalPerawat');

    //Jadwal Pasien
    Route::get('/jadwalPasien', 'Pegawai\JadwalPasienController@index');

    //Perkembangan Pasien
    Route::get('/dataPerkembanganPasien', 'Pegawai\DataPerkembanganPasienController@index')->name('pegawai.data.perkembanganPasien');
    Route::get('/inputPerkembanganPasien', 'Pegawai\InputPerkembanganPasienController@index');
    Route::post('/inputPerkembanganPasien', 'Pegawai\InputPerkembanganPasienController@store');
    Route::delete('/inputPerkembanganPasien/{id}/delete', 'Pegawai\InputPerkembanganPasienController@delete')->name('pegawai.perkembanganPasien.delete');
    Route::get('/inputPerkembanganPasien/{id}/edit', 'Pegawai\InputPerkembanganPasienController@edit');
    Route::put('/inputPerkembanganPasien/{id}/update', 'Pegawai\InputPerkembanganPasienController@update');

    //Perpindahan Jadwal
    Route::get('/dataPerpindahJadwal', 'Pegawai\DataPerpindahJadwalController@index')->name('pegawai.data.perpindahanJadwal');
    Route::get('/inputPerpindahanJadwal', 'Pegawai\InputPerpindahJadwalController@index');
    Route::post('/inputPerpindahanJadwal', 'Pegawai\InputPerpindahJadwalController@store');
    Route::delete('/inputPerpindahanJadwal/{id}/delete', 'Pegawai\InputPerpindahJadwalController@delete')->name('pegawai.perpindahanJadwal.delete');
    Route::get('/inputPerpindahanJadwal/{id}/edit', 'Pegawai\InputPerpindahJadwalController@edit');
    Route::put('/inputPerpindahanJadwal/{id}/update', 'Pegawai\InputPerpindahJadwalController@update');

    //Pasien Meninggal
    Route::get('/dataPasienMeninggal', 'Pegawai\DataPasienMeninggalController@index')->name('pegawai.data.pasienMeninggal');
    Route::get('/inputPasienMeninggal', 'Pegawai\InputPasienMeninggalController@index');
    Route::post('/inputPasienMeninggal', 'Pegawai\InputPasienMeninggalController@store');
    Route::delete('/inputPasienMeninggal/{id}/delete', 'Pegawai\InputPasienMeninggalController@delete')->name('pegawai.pasienMeninggal.delete');
    Route::get('/inputPasienMeninggal/{id}/edit', 'Pegawai\InputPasienMeninggalController@edit');
    Route::put('/inputPasienMeninggal/{id}/update', 'Pegawai\InputPasienMeninggalController@update');

    //Pasien Rawat Inap
    Route::get('/dataPasienRawatinap', 'Pegawai\DataPasienRawatinapController@index')->name('pegawai.data.pasienRawatinap');
    Route::get('/inputPasienRawatinap', 'Pegawai\InputPasienRawatinapController@index');
    Route::post('/inputPasienRawatinap', 'Pegawai\InputPasienRawatinapController@store');
    Route::delete('/inputPasienRawatinap/{id}/delete', 'Pegawai\InputPasienRawatinapController@delete')->name('pegawai.pasienRawatinap.delete');
    Route::get('/inputPasienRawatinap/{id}/edit', 'Pegawai\InputPasienRawatinapController@edit');
    Route::put('/inputPasienRawatinap/{id}/update', 'Pegawai\InputPasienRawatinapController@update');

    //Pasien Traveling
    Route::get('/dataPasienTraveling', 'Pegawai\DataPasienTravelingController@index')->name('pegawai.data.pasienTraveling');
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
    //Pasien Meninggal
    Route::get('/dataPasienMeninggal', 'Dok\DataPasienMeninggalController@index')->name('data.pasienMeninggal');
    //Perkembangan Pasien
    Route::get('/dataPerkembanganPasien', 'Dok\DataPerkembanganPasienController@index')->name('data.perkembanganPasien');
     //Pasien Traveling
    Route::get('/dataPasienTraveling', 'Dok\DataPasienTravelingController@index')->name('data.pasienTraveling');
    //Pasien Rawatinap
    Route::get('/dataPasienRawatinap', 'Dok\DataPasienRawatinapController@index')->name('data.pasienRawatinap');

});
