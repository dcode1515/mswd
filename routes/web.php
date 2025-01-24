<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/', [App\Http\Controllers\UserController::class, 'login'])->name('loginUi');
    Route::post('/login', [App\Http\Controllers\UserController::class, 'postLogin'])->name('loginpost');
    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
         Route::group(['middleware' => 'barangay'], function () {
            Route::get('/barangay-dashboard', [App\Http\Controllers\HomeController::class, 'barangay_index'])->name('barangay.dashboard');
            Route::get('/all-records', [App\Http\Controllers\mswdController::class, 'allrecords'])->name('all.records');
            Route::get('/in-school-youth', [App\Http\Controllers\mswdController::class, 'is'])->name('is');
            Route::get('/out-school-youth', [App\Http\Controllers\mswdController::class, 'os'])->name('os');
            Route::get('add/profile', [App\Http\Controllers\mswdController::class, 'profile_add']);
            Route::get('report', [App\Http\Controllers\mswdController::class, 'reporting'])->name('reporting');
            Route::post('api/update/profile/{id}', [App\Http\Controllers\mswdController::class, 'update_mswd_profile'])->name('update.profile');
            Route::get('view/profile/{id}', [App\Http\Controllers\mswdController::class, 'view_profile']);
            Route::get('api/get/data/mswd', [App\Http\Controllers\mswdController::class, 'get_mswd_profile']);
            Route::get('api/get/data/britania', [App\Http\Controllers\mswdController::class, 'get_barangay_profile_britania']);
            Route::get('api/get/data/is', [App\Http\Controllers\mswdController::class, 'get_barangay_is']);
            Route::get('api/get/data/os', [App\Http\Controllers\mswdController::class, 'get_barangay_os']);
            Route::post('api/archive', [App\Http\Controllers\mswdController::class, 'archive'])->name('archive.profile');
            Route::get('edit/profile/{id}', [App\Http\Controllers\mswdController::class, 'edit']);
            //Route::post('api/update/profile/{id}', [App\Http\Controllers\mswdController::class, 'update_profile']);
            Route::get('/archived', [App\Http\Controllers\mswdController::class, 'archived'])->name('archive');
            Route::get('/api/get/archived', [App\Http\Controllers\mswdController::class, 'get_archived']);
            Route::get('filter/summary', [App\Http\Controllers\mswdController::class, 'filter_summary'])->name('filter.summary');
        
            Route::get('/britania', [App\Http\Controllers\mswdController::class, 'britania'])->name('britania.records');
            Route::get('/buhisan', [App\Http\Controllers\mswdController::class, 'buhisan'])->name('buhisan.records');
            Route::get('/buatong', [App\Http\Controllers\mswdController::class, 'buatong'])->name('buatong.records');
            Route::get('/gata', [App\Http\Controllers\mswdController::class, 'gata'])->name('gata.records');
            Route::get('/hornasan', [App\Http\Controllers\mswdController::class, 'hornasan'])->name('hornasan.records');
            Route::get('/janipaan', [App\Http\Controllers\mswdController::class, 'janipaan'])->name('janipaan.records');
            Route::get('/kauswagan', [App\Http\Controllers\mswdController::class, 'kauswagan'])->name('kauswagan.records');
            Route::get('/otieza', [App\Http\Controllers\mswdController::class, 'otieza'])->name('otieza.records');
            Route::get('/poblacion', [App\Http\Controllers\mswdController::class, 'poblacion'])->name('poblacion.records');
            Route::get('/pungtod', [App\Http\Controllers\mswdController::class, 'pungtod'])->name('pungtod.records');
            Route::get('/pongon', [App\Http\Controllers\mswdController::class, 'pongon'])->name('pongon.records');
            Route::get('/salvacion', [App\Http\Controllers\mswdController::class, 'salvacion'])->name('salvacion.records');
            Route::get('/santonino', [App\Http\Controllers\mswdController::class, 'santonino'])->name('santonino.records');
            Route::get('/02category', [App\Http\Controllers\mswdController::class, 'category1'])->name('category1');
            Route::get('/34category', [App\Http\Controllers\mswdController::class, 'category2'])->name('category2');
            Route::get('/512category', [App\Http\Controllers\mswdController::class, 'category3'])->name('category3');
            Route::get('/1318category', [App\Http\Controllers\mswdController::class, 'category4'])->name('category4');
          
            Route::get('/santonino', [App\Http\Controllers\mswdController::class, 'santonino'])->name('santonino.records');
            Route::get('api/get/data/buhisan', [App\Http\Controllers\mswdController::class, 'get_barangay_buhisan']);
            Route::get('api/get/data/buatong', [App\Http\Controllers\mswdController::class, 'get_barangay_buatong']);
            Route::get('api/get/data/gata', [App\Http\Controllers\mswdController::class, 'get_barangay_gata']);
            Route::get('api/get/data/hornasan', [App\Http\Controllers\mswdController::class, 'get_barangay_hornasan']);
            Route::get('api/get/data/janipaan', [App\Http\Controllers\mswdController::class, 'get_barangay_janipaan']);
            Route::get('api/get/data/kauswagan', [App\Http\Controllers\mswdController::class, 'get_barangay_kauswagan']);
            Route::get('api/get/data/otieza', [App\Http\Controllers\mswdController::class, 'get_barangay_otieza']);
            Route::get('api/get/data/poblacion', [App\Http\Controllers\mswdController::class, 'get_barangay_poblacion']);
            Route::get('api/get/data/pungtod', [App\Http\Controllers\mswdController::class, 'get_barangay_pungtod']);
            Route::get('api/get/data/pongon', [App\Http\Controllers\mswdController::class, 'get_barangay_pongon']);
            Route::get('api/get/data/salvacion', [App\Http\Controllers\mswdController::class, 'get_barangay_salvacion']);
            Route::get('/generate-report', [App\Http\Controllers\mswdController::class, 'print'])->name('print.report');
            Route::post('/api/delete/profile', [App\Http\Controllers\mswdController::class, 'deleteProfile'])->name('delete.profile');
            Route::get('api/get/data/santonino', [App\Http\Controllers\mswdController::class, 'get_barangay_santonino']);
            Route::get('api/get/data/age02', [App\Http\Controllers\mswdController::class, 'get_age02']);
            Route::get('api/get/data/age34', [App\Http\Controllers\mswdController::class, 'get_age34']);
            Route::get('api/get/data/age512', [App\Http\Controllers\mswdController::class, 'get_age512']);
            Route::get('api/get/data/age1318', [App\Http\Controllers\mswdController::class, 'get_age1318']);
            Route::get('api/get/data/archived', [App\Http\Controllers\mswdController::class, 'get_data_archived']);
            
            
    });

    Route::group(['middleware' => 'superadmin'], function () {
        Route::get('/admin-dashboard', [App\Http\Controllers\HomeController::class, 'admin_index'])->name('admin.dashboard');
        Route::get('/user-list', [App\Http\Controllers\UserController::class, 'user_list'])->name('wew');
      
      
       
    });

});



Route::get('register-profile', [App\Http\Controllers\mswdController::class, 'regsiter_profile']);
Route::post('api/store/profile', [App\Http\Controllers\mswdController::class, 'store_mswd_profile']);