<?php

/*
RULES BY ALDO HARDIANSYAH
Detail => Open Detail Data Page
Add => Open Create Data Page
Insert => Insert Data to Database
Update => Open Edit Data Page
Edit => Update Data on Database
Drop => Open Delete Data Page
Delete => Delete Data from Database
*/


// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home','BerandaController@index')->name('home');

Route::get('/admin/login','BerandaController@index')->name('home');




//MAIN ROUTES//
Route::get('/', 'BerandaController@index')->name('beranda');

Route::get('/info', 'InfoController@index')->name('info');

Route::get('/jadwal', 'JadwalController@index')->name('jadwal');

Route::get('/peraturan', 'PeraturanController@index')->name('peraturan');

Route::get('/laboratorium', 'LaboratoriumController@index')->name('laboratorium');

Route::get('/pendaftaran', 'PendaftaranController@index')->name('pendaftaran');
     Route::post('/pendaftaran', 'PendaftaranController@insert')->name('pendaftaran.insert');




//ADMIN ROUTES//
Route::get('/admin', 'admin\AdminDashboardController@index')->name('admin_dashboard');

Route::get('/admin/asisten', 'admin\AdminAsistenController@index')->name('admin_asisten');
    Route::get('/admin/asisten/{id}', 'admin\AdminAsistenController@detail')->name('admin_asisten.detail');
    Route::post('/admin/asisten/edit', 'admin\AdminAsistenController@edit')->name('admin_asisten.edit');
    Route::post('/admin/asisten/delete', 'admin\AdminAsistenController@delete')->name('admin_asisten.delete');

Route::get('/admin/semester', 'admin\AdminSemesterController@index')->name('admin_semester');
    Route::post('/admin/semester/add', 'admin\AdminSemesterController@insert')->name('admin_semester.insert');
    Route::post('/admin/semester/edit', 'admin\AdminSemesterController@edit')->name('admin_semester.edit');
    Route::post('/admin/semester/delete', 'admin\AdminSemesterController@delete')->name('admin_semester.delete');

Route::get('/admin/kelas', 'admin\AdminKelasController@index')->name('admin_kelas');
    Route::get('/admin/kelas/add', 'admin\AdminKelasController@add')->name('admin_kelas.add');
    Route::post('/admin/kelas/add', 'admin\AdminKelasController@insert')->name('admin_kelas.insert');
    Route::post('/admin/kelas/edit', 'admin\AdminKelasController@edit')->name('admin_kelas.edit');
    Route::post('/admin/kelas/delete', 'admin\AdminKelasController@delete')->name('admin_kelas.delete');
    Route::post('/admin/kelas/jurusan/add', 'admin\AdminKelasController@addJurusan')->name('admin_jurusan.add');
    Route::post('/admin/kelas/jurusan/edit', 'admin\AdminKelasController@editJurusan')->name('admin_jurusan.edit');
    Route::post('/admin/kelas/jurusan/delete', 'admin\AdminKelasController@deleteJurusan')->name('admin_jurusan.delete');

Route::get('/admin/praktikum', 'admin\AdminPraktikumController@index')->name('admin_praktikum');
    Route::get('/admin/praktikum/add', 'admin\AdminPraktikumController@add')->name('admin_praktikum.add');
    Route::get('/admin/praktikum/detail{id}', 'admin\AdminPraktikumController@detail')->name('admin_praktikum.detail');
    Route::post('/admin/praktikum/insert', 'admin\AdminPraktikumController@insert')->name('admin_praktikum.insert');
    Route::get('/admin/praktikum/update/{id}', 'admin\AdminPraktikumController@update')->name('admin_praktikum.update');
    Route::post('/admin/praktikum/edit', 'admin\AdminPraktikumController@edit')->name('admin_praktikum.edit');
    Route::post('/admin/praktikum/delete', 'admin\AdminPraktikumController@delete')->name('admin_praktikum.delete');

Route::get('/admin/laboratorium', 'admin\AdminLaboratoriumController@index')->name('admin_laboratorium');

Route::get('/admin/jadwalpraktikum', 'admin\AdminJadwalPraktikumController@index')->name('admin_jadwalpraktikum');

Route::get('/admin/jadwalasisten', 'admin\AdminJadwalAsistenController@index')->name('admin_jadwalasisten');

Route::get('/admin/informasi', 'admin\AdminInformasiController@index')->name('admin_informasi');
    Route::post('/admin/informasi/insert', 'admin\AdminInformasiController@insert')->name('admin_informasi.insert');


Route::get('/admin/pendaftaran', 'admin\AdminPendaftaranController@index')->name('admin_pendaftaran');
    Route::get('/admin/pendaftaran/{id}', 'admin\AdminPendaftaranController@detail')->name('admin_pendaftaran.detail');
    Route::get('/admin/pendaftaran/ceck/{id}', 'admin\AdminPendaftaranController@detail2')->name('admin_pendaftaran.detail2');
    Route::get('/admin/pendaftaran/accept/{id}', 'admin\AdminPendaftaranController@accept')->name('admin_pendaftaran.accept');
    Route::get('/admin/pendaftaran/reject/{id}', 'admin\AdminPendaftaranController@reject')->name('admin_pendaftaran.reject');




//ASISTEN ROUTES//
Route::get('/asisten', 'asisten\AsistenDashboardController@index')->name('asisten_dashboard');

Route::get('/asisten/profile', 'asisten\AsistenProfileController@index')->name('asisten_profile');

Route::get('/asisten/catatan', 'asisten\AsistenCatatanController@index')->name('asisten_catatan');
