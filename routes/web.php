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
    $about = [
        'Tujuan' => [
            '0' => 'Memberi wadah serta mengkondisikan perangkat untuk menata usia senja yang lebih berkualitas, baik dalam beribadah maupaun mengoptimalkan kemanfaatan hidupnya',
        ],
        'Motto & Motivasi' => [
            '0' => 'mempersiapkan insan “utama dan cerdas di usia senja”',
        ],
        'Perkenalan' => [
            '0' => 'Kami Adalah Tempat Pembelajaran, Pendidikan, Pelatihan, Pendampingan Bagi Santri-Santri Usia Senja, Untuk Memperdalam Agama, Mempersiapkan Diri Menghadapi Akhir Hayat Insya Alloh Menuju Husnul Khotimah',
            '1' => 'Taman Lansia An-Naba’ Bukan Panti Jompo, Bukan Panti Wreda. Tl An-Naba’ Merupakan Wadah Komunitas Yang Mengakomodasi Santri Usia Senja. Santri Usia Muda Mempersiapkan Hidup; Santri Usia Senja Mempersiapkan Mati. Santri Usia Senja Bukan Hanya Yang Dhuafa, Karena Bisa Saja Ia Sukses Duniawi, Namun Merasa Miskin Ukhrowi.',
            '3' => '
            Lelaki Anshar Bertanya Kepada Rosulullah Saw : 
                <blockquote class="blockquote" data-aos="flip-up">
                Ya Rosulullah, Mukmin Manakah Yang Paling Utama ? Beliau Menjawab: Yang Paling Baik Akhlaknya Di Antara Mereka. Mukmin Manakah Yang Paling Cerdas ?, Tanya Lelaki Itu Lagi; Beliau Menjawab : Orang Yang Paling Banyak Mengingat Mati Dan Paling Baik Persiapanya Untuk Kehidupan Setelah Mati. Mereka Itulah Oran-Orang Yang Cerdas”
                <footer class="blockquote-footer">Hr. Ibnu Majah No. 4259, Dihasankan 
                        <cite title="Source Title">Asy-Syaih Al-Albani Ra Dalam Ash-Shahihah No. 1384</cite></footer></blockquote>',
        ],
        'Sasaran' => [
            '0' => 'Muslim laki-laki maupun perempuan',
            '1' => 'Usia 50 tahun ke atas',
            '2' => 'bisa beraktifitas fisik maupun fikir',
        ],
        'Standar Pengasuhan' => [
            '0' => 'Mengelola dan mengasuh santri-santri usia senja seperti berbakti kepada orang tua sendiri, yaitu standar BIRUL WALIDAIN (berbakti kepada kedua orang tua).',
            '1' => 'Belajar Al-Quran dasar Tahsin',
            '2' => 'Tafsir Hadist Fiqih Taddabur Ruqyah',
            '3' => 'praktek Konseling',
        ],
        'Target' => [
            '0' => 'Mencintai Al-Quran',
            '1' => 'Rajin ibadah dan sholat lima waktu menjadi penantian',
            '2' => 'Amalan-amalan sunnah menjadi kecintaan',
            '3' => 'Husnul khotimah menjadi dambaan',
            '4' => 'Ketrampilan tambahan sebagai kreatifitas sambilan',
            '5' => 'Menata senja meniti surga menjadi tujuan',
        ],
    ];

    return view('welcome')->with([
        'items' => \App\Article::orderBy('created_at', 'desc')->paginate(6),
        'about' => $about
    ]);
})->name('/');


Route::resource('blog', 'BlogController');
Route::resource('user', 'UserController');
Route::resource('article', 'ArticleController');
Route::resource('kategori', 'CategoryController');
Route::resource('image', 'ImagesController');

Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('admin/user', 'AdminController@user');
Route::get('admin/article', 'AdminController@article');