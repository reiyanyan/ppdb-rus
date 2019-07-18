<?php
use Illuminate\Support\Facades\Auth;

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

/*
    role :
    1 siswa
    2 supersuper admin
    3 superadmin
    4 admin
    5 operator
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//index
Route::get('/', 'HomeController@index')->name('index');

//siswa
Route::get('/activate', 'StudentController@activate');
Route::get('/activation', 'StudentController@activation');
Route::get('/signin', 'StudentController@signin');

//setelah masuk
Route::group(['prefix' => 'siswa'], function(){
    Route::get('daftar', 'StudentController@siswa_daftar');
    Route::get('preview', 'StudentController@siswa_daftar_preview');
    Route::get('dashboard', 'StudentController@siswa_dashboard');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('daftarkan_siswa', 'AdminController@daftarkan_siswa');
    Route::get('generate_token', 'AdminController@generate_token');
    Route::get('cetak_kartu', 'AdminController@cetak_kartu');
    Route::get('pengaturan_dashboard', 'AdminController@pengaturan_dashboard');
    Route::get('peruntukan', 'AdminController@peruntukan');
    Route::get('kustom_pertanyaan', 'AdminController@kustom_pertanyaan');
    Route::get('verifikasi_data', 'AdminController@verifikasi_data');
    Route::get('hasil_data', 'AdminController@hasil_data');

    //grouping pembobotan
    Route::group(['prefix' => 'pembobotan'], function(){
        Route::get('nilai', 'AdminController@pembobotan_nilai');
        Route::get('akademik', 'AdminController@pembobotan_akademik');
        Route::get('non_akademik', 'AdminController@pembobotan_non_akademik');
        Route::get('kuota', 'AdminController@pembobotan_kuota');
        Route::get('zona', 'AdminController@pembobotan_zona');
    });

    Route::group(['prefix' => 'analisis'], function(){
        Route::get('zonasi/formulasi', 'AdminController@zonasi_formulasi');
        Route::get('zonasi/approvement', 'AdminController@zonasi_approvement');
        Route::get('non_zonasi/formulasi', 'AdminController@non_zonasi_formulasi');
        Route::get('non_zonasi/approvement', 'AdminController@non_zonasi_approvement');
    });
});

// Route::group(['prefix' => 'sadmin', function(){

// }]);

// Route::group(['prefix' => 'admin', function(){

// }]);

// Route::group(['prefix' => 'op', function(){

// }]);
