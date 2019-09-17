@php
    $about = [
        'Tujuan' => [
            '0' => 'Memberi wadah serta mengkondisikan perangkat untuk menata usia senja yang lebih berkualitas, baik dalam beribadah maupaun mengoptimalkan kemanfaatan hidupnya',
        ],
        'Motto & Motivasi' => [
            '0' => 'mempersiapkan insan “utama dan cerdas di usia senja”',
        ],
        'Perkenalan' => [
            '0' => 'Taman Lansia An-Naba’ adalah tempat pembelajaran, pendidikan, pelatihan, pendampingan bagi santri-santri USIA SENJA, untuk memperdalam agama, mempersiapkan diri menghadapi akhir hayat insya Alloh menuju husnul khotimah',
            '1' => 'Taman Lansia An-Naba’  bukan panti jompo, bukan panti wreda. TL An-Naba’ merupakan wadah komunitas yang mengakomodasi santri usia senja. Santri usia muda mempersiapkan hidup; santri usia senja mempersiapkan mati. Santri usia senja bukan hanya yang dhuafa, karena bisa saja ia sukses duniawi, namun merasa miskin ukhrowi.',
            '3' => 'Lelaki Anshar Bertanya Kepada Rosulullah Saw : Ya Rosulullah, Mukmin Manakah Yang Paling Utama ? Beliau Menjawab: Yang Paling Baik Akhlaknya Di Antara Mereka. Mukmin Manakah Yang Paling Cerdas ?, Tanya Lelaki Itu Lagi; Beliau Menjawab : Orang Yang Paling Banyak Mengingat Mati Dan Paling Baik Persiapanya Untuk Kehidupan Setelah Mati. Mereka Itulah Oran-Orang Yang Cerdas” (Hr. Ibnu Majah No. 4259, Dihasankan Asy-Syaih Al-Albani Ra Dalam Ash-Shahihah No. 1384)',
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
@endphp

@extends('layouts.master')
@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
@section('content')

<section>
        <div class="container">
            <div class="row text-center h-100 justify-content-center align-items-center flex-row">
                <div class="col">
                    <h1>Welcome</h1>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
                    </p>
                </div>
            </div>
        </div>
</section>

<section id="blog">
    <div class="container">
        <div class="row h-50 justify-content-center align-items-center flex-row">
            <div class="col">
                <h1>Kegiatan Terbaru</h1>
                <p class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-4">
        <div class="row align-items-between">
        @foreach ($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card text-left">
                    <img class="card-img-top" data-src="{{$item->image->url}}" alt="{{$item->image->name}}">
                    <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{route('article.show', $item->id)}}">{{$item->title}}</a>
                    </h4>
                    <p class="card-text">{!! Str::limit($item->description, 100) !!}</p>
                    </div>
                    <div class="card-footer">{{$item->user->name}}</div>
                </div>
            </div>
        @endforeach
            <div class="col-md-12 text-center">
                <a href="" class="btn btn-outline-primary">Load More</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
    <style>
        .card-footer 
        {
            display: none;
        }

        #blog {
            background: chartreuse;
            background-image: url('images/photo-1508963493744-76fce69379c0.jpg');
            background-size: cover;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(".card").hover(
            function () {
                $(this).parent().parent().attr("class", "row align-items-center");
                $(this).attr("class", "card shadow");
                $(this).children().last().show('100');
            },
            function () {
                $(this).parent().parent().attr("class", "row align-items-between");
                $(this).attr("class", "card");
                $(this).children().last().hide('100');
            }
        );
    </script>
@endpush