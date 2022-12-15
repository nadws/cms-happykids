<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// save h1 navbar
Route::post('/save_h1', function(Request $r){
    $jenis = $r->jenis;
    if($jenis == 'navbar') {

        $img = DB::table('h1')->where('id_h1', 2)->first();
        $img_dulu = $img->isi;

        if($logo = $r->file('logo')) {
            $namaImg = $logo->getClientOriginalName();
            $lokasi = 'assets/img/';
            unlink($lokasi.$img_dulu);

            
            $logo->move($lokasi, $namaImg);
            DB::table('h1')->where('id_h1', 2)->update(['isi' => $namaImg]);

        } else {
            DB::table('h1')->where('id_h1', 2)->update(['isi' => $img_dulu]);
        }

        DB::table('h1')->where('id_h1', 1)->update(['isi' => $r->h1]);
    }

    return redirect()->route('dashboard');
})->name('save_h1');

// save hero 
Route::post('/save_hero', function(Request $r){
    DB::table('h1')->where('id_h1', 3)->update(['isi' => $r->teks1]);
    DB::table('h1')->where('id_h1', 4)->update(['isi' => $r->teks2]);

    $img = DB::table('h1')->where('id_h1', 7)->first();
    $img_dulu = $img->isi;

    if($logo = $r->file('hero_img')) {
        $namaImg = $logo->getClientOriginalName();
        $lokasi = 'assets/img/';
        unlink($lokasi.$img_dulu);

        
        $logo->move($lokasi, $namaImg);
        DB::table('h1')->where('id_h1', 7)->update(['isi' => $namaImg]);

    } else {
        DB::table('h1')->where('id_h1', 7)->update(['isi' => $img_dulu]);
    }

    return redirect()->route('dashboard');
})->name('save_hero');

// save tentang 
Route::post('/save_tentang', function(Request $r){
    DB::table('h1')->where('id_h1', 8)->update(['isi' => $r->teks_tentang1]);
    DB::table('h1')->where('id_h1', 9)->update(['isi' => $r->teks_tentang2]);
    DB::table('h1')->where('id_h1', 11)->update(['isi' => $r->waktu]);
    DB::table('h1')->where('id_h1', 12)->update(['isi' => $r->alamat]);
    DB::table('h1')->where('id_h1', 13)->update(['isi' => $r->nohp]);
    DB::table('h1')->where('id_h1', 14)->update(['isi' => $r->email]);
    DB::table('h1')->where('id_h1', 15)->update(['isi' => $r->maps]);

    $img = DB::table('h1')->where('id_h1', 10)->first();
    $img_dulu = $img->isi;

    if($logo = $r->file('img_tentang')) {
        $namaImg = $logo->getClientOriginalName();
        $lokasi = 'assets/img/';
        unlink($lokasi.$img_dulu);

        
        $logo->move($lokasi, $namaImg);
        DB::table('h1')->where('id_h1', 10)->update(['isi' => $namaImg]);

    } else {
        DB::table('h1')->where('id_h1', 10)->update(['isi' => $img_dulu]);
    }

    return redirect()->route('dashboard');
})->name('save_tentang');

Route::post('/save_warna', function(Request $r){
    DB::table('h1')->where('id_h1', 16)->update(['isi' => $r->warna1]);
    DB::table('h1')->where('id_h1', 17)->update(['isi' => $r->warna2]);

    return redirect()->route('dashboard');
})->name('save_warna');

Route::post('/save_teks_janji', function(Request $r){
    DB::table('h1')->where('id_h1', 18)->update(['isi' => $r->teks_janji]);
    return redirect()->route('dashboard');
})->name('save_teks_janji');

Route::post('/save_teks_tamu', function(Request $r){
    $data = [
        'teks1',
        'teks2',
        'nominal_app',
        'nominal_tf',
        'mandiri_admin',
        'mandiri_norek',
        'bca_admin',
        'bca_norek',
        'wa_admin',
        'wa_nohp',
    ];
    
    foreach($data as $i => $d) {
        DB::table('h1')->where('id_h1', $i + 19)->update(['isi' => $r->$d]);
    }

    return redirect()->route('dashboard');
})->name('save_teks_tamu');

// konten
Route::get('/dashboard', function () {
    $data = [
        'h1' => DB::table('h1')->where('id_h1', 1)->first()->isi,
        'img' => DB::table('h1')->where('id_h1', 2)->first()->isi,
        'teks1' => DB::table('h1')->where('id_h1', 3)->first()->isi,
        'teks2' => DB::table('h1')->where('id_h1', 4)->first()->isi,
        'img_hero' => DB::table('h1')->where('id_h1', 7)->first()->isi,
        'teks_tentang1' => DB::table('h1')->where('id_h1', 8)->first()->isi,
        'teks_tentang2' => DB::table('h1')->where('id_h1', 9)->first()->isi,
        'img_tentang' => DB::table('h1')->where('id_h1', 10)->first()->isi,
        'waktu' => DB::table('h1')->where('id_h1', 11)->first()->isi,
        'alamat' => DB::table('h1')->where('id_h1', 12)->first()->isi,
        'nohp' => DB::table('h1')->where('id_h1', 13)->first()->isi,
        'email' => DB::table('h1')->where('id_h1', 14)->first()->isi,
        'maps' => DB::table('h1')->where('id_h1', 15)->first()->isi,
        'warna' => DB::table('h1')->where('id_h1', 16)->first()->isi,
        'warna_bg' => DB::table('h1')->where('id_h1', 17)->first()->isi,
        'teks_janji' => DB::table('h1')->where('id_h1', 18)->first()->isi,

        // teks tamu selesai
        'teks_janji1' => DB::table('h1')->where('id_h1', 19)->first()->isi,
        'teks_janji2' => DB::table('h1')->where('id_h1', 20)->first()->isi,
        'nominal_app' => DB::table('h1')->where('id_h1', 21)->first()->isi,
        'nominal_tf' => DB::table('h1')->where('id_h1', 22)->first()->isi,
        'mandiri_admin' => DB::table('h1')->where('id_h1', 23)->first()->isi,
        'mandiri_norek' => DB::table('h1')->where('id_h1', 24)->first()->isi,
        'bca_admin' => DB::table('h1')->where('id_h1', 25)->first()->isi,
        'bca_norek' => DB::table('h1')->where('id_h1', 26)->first()->isi,
        'wa_admin' => DB::table('h1')->where('id_h1', 27)->first()->isi,
        'wa_nohp' => DB::table('h1')->where('id_h1', 28)->first()->isi,
    ];
    return view('home.content', $data);
})->name('dashboard');

require __DIR__.'/auth.php';
