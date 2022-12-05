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

Route::get('/', function () {
    return view('dashboard.grid');
    // return view('dashboard.unit');
    // return view('dashboard.direksi');
});

//Login
Route::get('/login', function () {
    return view('login');
});

//Notifikasi
Route::get('/notifikasi', function () {
    return view('notifikasi.grid');
});

#Struktur Organisasi
Route::get('struktur-organisasi', function () {
    return view('struktur-organisasi.grid');
});

//Master
Route::prefix('master')->group(function () {
    //Master Indikator
	Route::prefix('indikator')->group(function () {
        Route::get('/', function () {
             return view('master-indikator.grid');
         });
     });
});

//Setting
Route::prefix('setting')->group(function () {
    //Setting PIC
	Route::prefix('pic')->group(function () {
        Route::get('/', function () {
             return view('setting-pic.grid');
         });
        Route::get('/{id}', function ($id) {
            return view('setting-pic.detail',['id'=>$id]);
        });
     });
     //Setting KPI
	Route::prefix('kpi')->group(function () {
        Route::get('/', function () {
             return view('setting-kpi.grid');
         });
        Route::get('/{id}', function ($id) {
            return view('setting-kpi.detail',['id'=>$id]);
        });
     });
});

//Realisasi

Route::get('realisasi-kpi', function () {
    return view('realisasi-kpi.grid');
});
        
//Report
Route::prefix('report')->group(function () {
    //KPI Posisi
	Route::prefix('kpi-posisi')->group(function () {
        Route::get('/', function () {
             return view('report-kpi-posisi.grid');
         });
         Route::get('/preview', function () {
            return view('report-kpi-posisi.preview');
        });
    });
    Route::prefix('hirarki-kpi')->group(function () {
        Route::get('/', function () {
             return view('report-hirarki-kpi.grid');
         });
         Route::get('/preview', function () {
            return view('report-hirarki-kpi.preview');
        });
    });
    Route::prefix('kpi-karyawan')->group(function () {
        Route::get('/', function () {
             return view('report-kpi-karyawan.grid');
         });
         Route::get('/preview', function () {
            return view('report-kpi-karyawan.preview');
        });
    });
    Route::prefix('progress-pengajuan-kpi')->group(function () {
        Route::get('/', function () {
             return view('report-progress-pengajuan.grid');
         });
         Route::get('/preview', function () {
            return view('report-progress-pengajuan.preview');
        });
    });
    Route::prefix('ringkasan-prespektif')->group(function () {
        Route::get('/', function () {
             return view('report-ringkasan-prespektif.grid');
         });
         Route::get('/preview', function () {
            return view('report-ringkasan-prespektif.preview');
        });
    });
    Route::prefix('ketercapain-kpi')->group(function () {
        Route::get('/', function () {
             return view('report-ketercapain-kpi.grid');
         });
         Route::get('/preview', function () {
            return view('report-ketercapain-kpi.preview');
        });
    });
    Route::prefix('vam-kpi')->group(function () {
        Route::get('/', function () {
             return view('report-vam-kpi.grid');
         });
         Route::get('/preview', function () {
            return view('report-vam-kpi.preview');
        });
    });
});
