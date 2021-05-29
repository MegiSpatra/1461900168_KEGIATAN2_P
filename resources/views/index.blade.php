<?php

use Illuminate\Support\Facades\Route;
use GV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGir;

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
Route::get('/anggota',[datacontroller::class,'index']);
/*Route::get('/buku',[datacontroller::class,'index2']);
public function innerjoin(){
$ms_buku = DB::table('ms_buku')
->join('ms_kategori', 'ms_buku.kode_kategori', '=', 'ms_kategori.kode_kategori')
->select('ms_buku.kode_buku', 'ms_buku.judul_buku', 'ms_buku.jumlah_buku' , 'ms_kategori.nama_kategori')
->get();
return view('join0060',['ms_buku'=>$ms_buku]);
}
<a href="/join" class="text-sm text-gray-700 underline">Select Join</a>
<body>
<h3>Megi Saputra (1461900168)</h3>
<h3>Data Buku dengan Inner Join</h3>
<p>Cari Buku :</p>
<form action="/buku/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari berdasarkan judul.." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<div style="overflow-x:auto;">
<table>
<thead>
<tr>
<th>No</th>
<th>Kode buku</th>
<th>Kode Penerbit</th>
<th>Judul Buku</th>
<th>Jumlah Buku</th>
<th>Nama Kategori</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($ms_buku as $buku)
<tr>
<td>{{$no++}}</td>
public function cari(Request $request){
$cari = $request->lihat;
$buku=DB::table('ms_buku')->where('judul_buku','like',"%".$cari."%")->paginate();
return view('index0044',['ms_buku'=>$buku]);
}
fionnadiva.alfiyantii's profile picture

public function innerjoin(){
$ms_buku = DB::table('ms_buku')
->join('ms_kategori', 'ms_buku.kode_kategori', '=', 'ms_kategori.kode_kategori')
->select('ms_buku.kode_buku', 'ms_buku.judul_buku', 'ms_buku.jumlah_buku' , 'ms_kategori.nama_kategori')
->get();
return view('join0060',['ms_buku'=>$ms_buku]);
}*/