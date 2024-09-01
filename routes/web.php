<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\DetailSejarahController;
use App\Http\Controllers\InstallasiBarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KesiapanLokasiController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\LokasiKegiatanController;
use App\Http\Controllers\PelaksanaanHarianController;
use App\Http\Controllers\PenerimaanBarangController;
use App\Http\Controllers\PenutupanController;
use App\Http\Controllers\SdmPelaksanaController;
use App\Http\Controllers\SetupSdmPengawasController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\SetupSdmKoordinatorController;
use App\Http\Controllers\UjiFungsiController;
use App\Http\Controllers\UnitController;

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
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/adminpanel', [AuthController::class, 'form_login'])->middleware('guest')->name('login');
Route::post('/adminpanel', [AuthController::class, 'login'])->name('authenticate');
Route::get('/register', [AuthController::class, 'form_regist']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('menu', MenuController::class);
    Route::post('get-provinsi', [AjaxController::class, 'get_provinsi'])->name('get_provinsi');
    Route::get('administrator/module_menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('administrator/module_menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::get('administrator/module_menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::delete('menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
    Route::post('menu', [MenuController::class, 'store'])->name('menu.store');
    Route::resource('about', AboutController::class);
    Route::resource('news', NewsController::class);
    Route::resource('event', EventController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('detail_sejarah', DetailSejarahController::class);
    Route::resource('struktur_organisasi', StrukturOrganisasiController::class);
    Route::resource('pengawas', PengawasController::class);
    Route::resource('teknisi', TeknisiController::class);
    Route::resource('koordinator', KoordinatorController::class);
    Route::resource('setup_sdm_pengawas', SetupSdmPengawasController::class);
    Route::resource('setup_sdm_koordinator', SetupSdmKoordinatorController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('penerimaan_barang', PenerimaanBarangController::class);
    Route::resource('installasi_barang', InstallasiBarangController::class);
    Route::resource('uji_fungsi', UjiFungsiController::class);
    Route::resource('pelaksanaan_harian', PelaksanaanHarianController::class);
    Route::resource('penutupan', PenutupanController::class);
    Route::resource('lokasi_kegiatan', LokasiKegiatanController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('lokasi', LokasiController::class);
    Route::resource('absensi', AbsensiController::class);
    Route::resource('sdm-pelaksana', SdmPelaksanaController::class);
    Route::resource('kesiapan-lokasi', KesiapanLokasiController::class);
});

Route::get('/visi-misi', [AboutController::class, 'visi_misi'])->name('visi_misi');

Route::get('/sejarah-bkn', [SejarahController::class, 'sejarah_bkn'])->name('sejarah_bkn');

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'struktur_organisasi'])->name('struktur_organisasi');

Route::get('/berita-bkn', [NewsController::class, 'berita_bkn'])->name('berita_bkn');

Route::get('/berita-bkn/{id}', [NewsController::class, 'berita_bkn_edit'])->name('berita_bkn.edit');


Route::get('/event-bkn', [EventController::class, 'event_bkn'])->name('event_bkn');

Route::get('/event-bkn/{id}', [EventController::class, 'event_bkn_edit'])->name('event_bkn.edit');
