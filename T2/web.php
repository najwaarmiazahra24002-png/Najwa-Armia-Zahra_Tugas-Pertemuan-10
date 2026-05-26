<?php
 
use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Models\Anggota;


Route::get('/', function () {
    return view('welcome');
});
 
// // ========== TESTING BUKU ==========
 
// // List all buku
// Route::get('/buku', function () {
//     $bukus = Buku::all();
    
//     $html = '<h1>Daftar Buku</h1>';
//     $html .= '<a href="/buku/create">Tambah Buku</a><br /><br />';
//     $html .= '<table border="1" cellpadding="10">';
//     $html .= '<tr>
//                 <th>ID</th>
//                 <th>Kode</th>
//                 <th>Judul</th>
//                 <th>Kategori</th>
//                 <th>Harga</th>
//                 <th>Stok</th>
//                 <th>Aksi</th>
//               </tr>';
    
//     foreach ($bukus as $buku) {
//         $html .= '<tr>';
//         $html .= '<td>' . $buku->id . '</td>';
//         $html .= '<td>' . $buku->kode_buku . '</td>';
//         $html .= '<td>' . $buku->judul . '</td>';
//         $html .= '<td>' . $buku->kategori . '</td>';
//         $html .= '<td>' . $buku->harga_format . '</td>';
//         $html .= '<td>' . $buku->stok . '</td>';
//         $html .= '<td>
//                     <a href="/buku/' . $buku->id . '">Detail</a> | 
//                     <a href="/buku/' . $buku->id . '/edit">Edit</a>
//                   </td>';
//         $html .= '</tr>';
//     }
    
//     $html .= '</table>';
    
//     return $html;
// });
 
// // Show single buku
// Route::get('/buku/{id}', function ($id) {
//     $buku = Buku::findOrFail($id);
    
//     $html = '<h1>Detail Buku</h1>';
//     $html .= '<a href="/buku">Kembali</a><br /><br />';
//     $html .= '<table border="1" cellpadding="10">';
//     $html .= '<tr><th>Field</th><th>Value</th></tr>';
//     $html .= '<tr><td>ID</td><td>' . $buku->id . '</td></tr>';
//     $html .= '<tr><td>Kode Buku</td><td>' . $buku->kode_buku . '</td></tr>';
//     $html .= '<tr><td>Judul</td><td>' . $buku->judul . '</td></tr>';
//     $html .= '<tr><td>Kategori</td><td>' . $buku->kategori . '</td></tr>';
//     $html .= '<tr><td>Pengarang</td><td>' . $buku->pengarang . '</td></tr>';
//     $html .= '<tr><td>Penerbit</td><td>' . $buku->penerbit . '</td></tr>';
//     $html .= '<tr><td>Tahun</td><td>' . $buku->tahun_terbit . '</td></tr>';
//     $html .= '<tr><td>ISBN</td><td>' . $buku->isbn . '</td></tr>';
//     $html .= '<tr><td>Harga</td><td>' . $buku->harga_format . '</td></tr>';
//     $html .= '<tr><td>Stok</td><td>' . $buku->stok . '</td></tr>';
//     $html .= '<tr><td>Tersedia?</td><td>' . ($buku->tersedia ? 'Ya' : 'Tidak') . '</td></tr>';
//     $html .= '<tr><td>Created</td><td>' . $buku->created_at . '</td></tr>';
//     $html .= '<tr><td>Updated</td><td>' . $buku->updated_at . '</td></tr>';
//     $html .= '</table>';
    
//     return $html;
// });
 
// // ========== TESTING ANGGOTA ==========
 
// // List all anggota
// Route::get('/anggota', function () {
//     $anggotas = Anggota::all();
    
//     $html = '<h1>Daftar Anggota</h1>';
//     $html .= '<table border="1" cellpadding="10">';
//     $html .= '<tr>
//                 <th>ID</th>
//                 <th>Kode</th>
//                 <th>Nama</th>
//                 <th>Email</th>
//                 <th>Umur</th>
//                 <th>Status</th>
//                 <th>Aksi</th>
//               </tr>';
    
//     foreach ($anggotas as $anggota) {
//         $html .= '<tr>';
//         $html .= '<td>' . $anggota->id . '</td>';
//         $html .= '<td>' . $anggota->kode_anggota . '</td>';
//         $html .= '<td>' . $anggota->nama . '</td>';
//         $html .= '<td>' . $anggota->email . '</td>';
//         $html .= '<td>' . $anggota->umur . ' tahun</td>';
//         $html .= '<td>' . $anggota->status . '</td>';
//         $html .= '<td><a href="/anggota/' . $anggota->id . '">Detail</a></td>';
//         $html .= '</tr>';
//     }
    
//     $html .= '</table>';
    
//     return $html;
// });
 
// // Show single anggota
// Route::get('/anggota/{id}', function ($id) {
//     $anggota = Anggota::findOrFail($id);
    
//     $html = '<h1>Detail Anggota</h1>';
//     $html .= '<a href="/anggota">Kembali</a><br /><br />';
//     $html .= '<table border="1" cellpadding="10">';
//     $html .= '<tr><th>Field</th><th>Value</th></tr>';
//     $html .= '<tr><td>Kode Anggota</td><td>' . $anggota->kode_anggota . '</td></tr>';
//     $html .= '<tr><td>Nama</td><td>' . $anggota->nama . '</td></tr>';
//     $html .= '<tr><td>Email</td><td>' . $anggota->email . '</td></tr>';
//     $html .= '<tr><td>Telepon</td><td>' . $anggota->telepon . '</td></tr>';
//     $html .= '<tr><td>Alamat</td><td>' . $anggota->alamat . '</td></tr>';
//     $html .= '<tr><td>Tanggal Lahir</td><td>' . $anggota->tanggal_lahir->format('d-m-Y') . '</td></tr>';
//     $html .= '<tr><td>Umur</td><td>' . $anggota->umur . ' tahun</td></tr>';
//     $html .= '<tr><td>Jenis Kelamin</td><td>' . $anggota->jenis_kelamin . '</td></tr>';
//     $html .= '<tr><td>Pekerjaan</td><td>' . $anggota->pekerjaan . '</td></tr>';
//     $html .= '<tr><td>Tanggal Daftar</td><td>' . $anggota->tanggal_daftar->format('d-m-Y') . '</td></tr>';
//     $html .= '<tr><td>Lama Anggota</td><td>' . $anggota->lama_anggota . ' hari</td></tr>';
//     $html .= '<tr><td>Status</td><td>' . $anggota->status . '</td></tr>';
//     $html .= '</table>';
    
//     return $html;
// });
 
// // Testing Scope & Query
// Route::get('/test-query', function () {
//     $html = '<h1>Testing Query Eloquent</h1>';
    
//     // Buku tersedia
//     $tersedia = Buku::tersedia()->get();
//     $html .= '<h3>Buku Tersedia (Stok > 0): ' . $tersedia->count() . '</h3>';
//     $html .= '<ul>';
//     foreach ($tersedia as $buku) {
//         $html .= '<li>' . $buku->judul . ' (Stok: ' . $buku->stok . ')</li>';
//     }
//     $html .= '</ul>';
    
//     // Buku Programming
//     $programming = Buku::kategori('Programming')->get();
//     $html .= '<h3>Buku Programming: ' . $programming->count() . '</h3>';
//     $html .= '<ul>';
//     foreach ($programming as $buku) {
//         $html .= '<li>' . $buku->judul . '</li>';
//     }
//     $html .= '</ul>';
    
//     // Anggota Aktif
//     $aktif = Anggota::aktif()->get();
//     $html .= '<h3>Anggota Aktif: ' . $aktif->count() . '</h3>';
//     $html .= '<ul>';
//     foreach ($aktif as $anggota) {
//         $html .= '<li>' . $anggota->nama . ' (' . $anggota->email . ')</li>';
//     }
//     $html .= '</ul>';
    
//     return $html;
// });


// Tugas 2: test-accessor-scope
Route::get('/test-accessor-scope', function () {

    $html = '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container py-4">
        <h1 class="mb-4 text-primary">Testing Accessor & Scope</h1>
    ';

    // ======= BUKU - STATUS STOK BADGE =======
    $bukus = Buku::all();

    $html .= '<h2>Buku dengan Status Stok Badge</h2>';
    $html .= '<table border="1" cellpadding="10">';
    $html .= '
        <tr>
            <th>Judul</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Tahun</th>
        </tr>
    ';

    foreach ($bukus as $buku) {
        $html .= '<tr>';
        $html .= '<td>' . $buku->judul . '</td>';
        $html .= '<td>' . $buku->stok . '</td>';
        $html .= '<td>' . $buku->status_stok_badge . '</td>';
        $html .= '<td>' . $buku->tahun_label . '</td>';
        $html .= '</tr>';
    }

    $html .= '</table>';

    // ======= BUKU TERBARU =======
    $terbaru = Buku::terbaru()->get();

    $html .= '<h2>Buku Terbaru</h2>';
    $html .= '<ul>';

    foreach ($terbaru as $buku) {
        $html .= '<li>' . $buku->judul . ' (' . $buku->tahun_terbit . ')</li>';
    }

    $html .= '</ul>';

    // ======= BUKU STOK MENIPIS =======
    $menipis = Buku::stokMenipis()->get();

    $html .= '<h2>Buku Stok Menipis</h2>';
    $html .= '<ul>';

    foreach ($menipis as $buku) {
        $html .= '<li>' . $buku->judul . ' - Stok: ' . $buku->stok . '</li>';
    }

    $html .= '</ul>';

    // ======= ANGGOTA STATUS BADGE =======
    $anggotas = Anggota::all();

    $html .= '<h2>Status Anggota</h2>';

    $html .= '<table border="1" cellpadding="10">';
    $html .= '
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kategori Usia</th>
            <th>Status</th>
        </tr>
    ';

    foreach ($anggotas as $anggota) {
        $html .= '<tr>';
        $html .= '<td>' . $anggota->nama . '</td>';
        $html .= '<td>' . $anggota->umur . '</td>';
        $html .= '<td>' . $anggota->kategori_usia . '</td>';
        $html .= '<td>' . $anggota->status_badge . '</td>';
        $html .= '</tr>';
    }

    $html .= '</table>';

    // ======= ANGGOTA TERDAFTAR BULAN INI =======
    $html .= '<h3 class="mt-4">Anggota Terdaftar Bulan Ini</h3>';

    $bulanIni = Anggota::terdaftarBulanIni()->get();

    $html .= '<div class="alert alert-info">Total: ' . $bulanIni->count() . ' anggota</div>';

    $html .= '<ul class="list-group">';
    foreach ($bulanIni as $anggota) {
        $html .= '<li class="list-group-item">
            ' . $anggota->nama . '
            <span class="badge bg-primary float-end">
                ' . $anggota->tanggal_daftar->format('d-m-Y') . '
            </span>
        </li>';
    }
    $html .= '</ul>';

    $html .= '</div>';

    return $html;
});