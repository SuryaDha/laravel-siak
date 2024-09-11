<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route(Auth::user()->role . '.dashboard');
    }
    return redirect('/login');
});

Route::get('/dosen', function () {
    return view('dosen.dashboard');
})->name('dosen.dashboard')->middleware('role:dosen');

Route::get('/mahasiswa', function () {
    return view('mahasiswa.dashboard');
})->name('mahasiswa.dashboard')->middleware('role:mahasiswa');


Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    //Biodata 
Route::get('/biodata', function () {
    return view('mahasiswa.biodata.biodata');
})->name('biodata');
Route::get('/data_keluarga', function () {
    return view('mahasiswa.biodata.data_keluarga');
});
Route::get('/kelengkapan_data', function () {
    return view('mahasiswa.biodata.kelengkapan_data');
});

//KRS
Route::get('/susun_krs', function () {
    return view('mahasiswa.krs.susun_krs');
});
Route::get('/cetak_krs', function () {
    return view('mahasiswa.krs.cetak_krs');
});

// Dosen
Route::get('/jadwal_dosen', function () {
    return view('mahasiswa.dosen.jadwal_dosen');
});
Route::get('/agenda_mengajar', function () {
    return view('mahasiswa.dosen.agenda_mengajar');
});

//KHS
Route::get('/nilai', function () {
    return view('mahasiswa.khs.nilai');
});
Route::get('/angket_dosen', function () {
    return view('mahasiswa.dosen.angket_dosen');
});
Route::get('/cetak_khs', function () {
    return view('mahasiswa.khs.cetak_khs');
});
Route::get('/cetak_kdn', function () {
    return view('mahasiswa.khs.cetak_kdn');
});

// karya akhir
Route::get('/karya_akhir', function () {
    return view('mahasiswa.karya_akhir.karya_akhir');
});
Route::get('/laporan_akhir', function () {
    return view('mahasiswa.karya_akhir.laporan_akhir');
});

// wisuda
Route::get('/yudisium', function () {
    return view('mahasiswa.wisuda.yudisium');
});
Route::get('/wisuda', function () {
    return view('mahasiswa.wisuda.wisuda');
});

//kampus merdeka
Route::get('/outbound', function () {
    return view('mahasiswa.kampus_merdeka.outbound');
});
Route::get('/mbkm', function () {
    return view('mahasiswa.kampus_merdeka.mbkm');
});

//skpi
Route::get('/skpi', function () {
    return view('mahasiswa.skpi.skpi');
});

});

Route::middleware(['auth', 'role:dosen'])->group(function () {

    //akademik
    Route::get('/persiapan_proses_pembelajaran', function () {
        return view('dosen.akademik.persiapan');
    })->name('proses_pembelajaran');
    Route::get('/daftar_peserta_kuliah', function () {
        return view('dosen.akademik.peserta_kuliah');
    })->name('peserta_kuliah');
    Route::get('/pembimbing_akademik', function () {
        return view('dosen.akademik.pembimbing_akademik');
    })->name('pa');
    Route::get('/masukan_agenda_mengajar', function () {
        return view('dosen.akademik.masukan_agenda_mengajar');
    })->name('masukan');
    Route::get('/persentase_kehadiran', function () {
        return view('dosen.akademik.persentase_kehadiran');
    })->name('kehadiran');
    Route::get('/nilai_mahasiswa', function () {
        return view('dosen.akademik.nilai_mahasiswa');
    })->name('nilai');
    Route::get('/riwayat_dpna', function () {
        return view('dosen.akademik.riwayat_dpna');
    })->name('dpna');
    Route::get('/kritik_saran', function () {
        return view('dosen.akademik.kritik_dan_saran');
    })->name('kritik_saran');
    Route::get('/angket', function () {
        return view('dosen.akademik.angket');
    })->name('angket');

    // jadwal
    Route::get('/kalender', function () {
        return view('dosen.jadwal.kalender');
    })->name('kalender');
    Route::get('/jadwal_dosen', function () {
        return view('dosen.jadwal.jadwal_dosen');
    })->name('jadwal_dosen');

    // mbkm
    Route::get('/inbound', function () {
        return view('dosen.kampus_merdeka.inbound');
    })->name('inbound');
    Route::get('/outbound', function () {
        return view('dosen.kampus_merdeka.outbound');
    })->name('outbound');
    Route::get('/mbkm', function () {
        return view('dosen.kampus_merdeka.mbkm');
    })->name('mbkm');

    // karya Akhir
    Route::get('/infografik', function () {
        return view('dosen.karya_akhir.infografik');
    })->name('infografik');
    Route::get('/penawaran_topik', function () {
        return view('dosen.karya_akhir.penawaran');
    })->name('penawaran');
    Route::get('/pengajuan_topik', function () {
        return view('dosen.karya_akhir.pengajuan');
    })->name('pengajuan');
    Route::get('/pembimbing', function () {
        return view('dosen.karya_akhir.pembimbing');
    })->name('pembimbing');
    Route::get('/penguji', function () {
        return view('dosen.karya_akhir.penguji');
    })->name('penguji');
    Route::get('/laporan_akhir', function () {
        return view('dosen.karya_akhir.laporan_akhir');
    })->name('laporan_akhir');
    Route::get('/similarity', function () {
        return view('dosen.karya_akhir.similarity');
    })->name('similarity');

    // profesi
    Route::get('/profesi', function () {
        return view('dosen.profesi');
    })->name('profesi');

});




Auth::routes();

