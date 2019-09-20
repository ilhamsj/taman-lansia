@php
    $about = [
        'Tujuan' => [
            '0' => 'Memberi wadah serta mengkondisikan perangkat untuk menata usia senja yang lebih berkualitas, baik dalam beribadah maupaun mengoptimalkan kemanfaatan hidupnya',
        ],
        'Motto & Motivasi' => [
            '0' => 'mempersiapkan insan “utama dan cerdas di usia senja”',
        ],
        'Perkenalan' => [
            '0' => 'kami adalah tempat pembelajaran, pendidikan, pelatihan, pendampingan bagi santri-santri USIA SENJA, untuk memperdalam agama, mempersiapkan diri menghadapi akhir hayat insya Alloh menuju husnul khotimah',
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

@foreach ($about as $key => $value)
<section id="{{Str::slug($key)}}" class="about">
    <div class="container">
        <div class="row h-100 align-items-center flex-row">
            <div class="col">
                <img data-aos="fade-up" class="img-fluid img-thumbnail rounded-circle" src="holder.js/400x400?auto=yes&textmode=exact&random=yes" alt="" srcset="">
            </div>
            <div class="col-md">
                <h1 data-aos="fade-up" class="">{{$key}}</h1>
                    @foreach ($value as $item)
                        <p data-aos="fade-up" class="lead">
                            <i data-feather="check"></i> {{Str::title($item)}}
                        </p>
                    @endforeach
                    {{count($value)}}
                <a href="" class="next">Next</a>
            </div>
        </div>
    </div>
</section>
@endforeach

<section id="blog">
    <div class="container">
        <div class="row h-50 justify-content-center align-items-center flex-row">
            <div class="col">
                <h1 data-aos="fade-up">Kegiatan Terbaru</h1>
                <p  data-aos="fade-up" class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
                </p>
            </div>
        </div>
    </div>
</section>

<section id="blog-content">
    <div class="container py-4">
        <div class="row align-items-between">
        @foreach ($items as $item)
            <div class="col-md-4 mb-4"  data-aos="fade-up">
                <div class="card text-left">
                <img class="card-img-top" src="{{url('storage/images/'.$item->image->url)}}" alt="{{$item->image->name}}">
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
                <a data-aos="fade-up" href="" class="btn btn-outline-primary">Load More</a>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center flex-row">
            <div class="col">
                <h1 data-aos="fade-up">What People Say ?</h1>
                <p  data-aos="fade-up" class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
    <style>
        #blog-content .card-footer 
        {
            display: none;
        }

        #blog {
            background: chartreuse;
            background-image: url('images/photo-1508963493744-76fce69379c0.jpg');
            background-attachment: fixed;
            background-size: cover;
        }

        h1 {
            font-weight: bold;
            font-family: auto;
            font-size: 3rem
        }

        /* #welcome {
            background-color: #ff7700;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cpolygon fill='%23cc0000' points='957 450 539 900 1396 900'/%3E%3Cpolygon fill='%23aa0000' points='957 450 872.9 900 1396 900'/%3E%3Cpolygon fill='%23d6002b' points='-60 900 398 662 816 900'/%3E%3Cpolygon fill='%23b10022' points='337 900 398 662 816 900'/%3E%3Cpolygon fill='%23d9004b' points='1203 546 1552 900 876 900'/%3E%3Cpolygon fill='%23b2003d' points='1203 546 1552 900 1162 900'/%3E%3Cpolygon fill='%23d3006c' points='641 695 886 900 367 900'/%3E%3Cpolygon fill='%23ac0057' points='587 900 641 695 886 900'/%3E%3Cpolygon fill='%23c4008c' points='1710 900 1401 632 1096 900'/%3E%3Cpolygon fill='%239e0071' points='1710 900 1401 632 1365 900'/%3E%3Cpolygon fill='%23aa00aa' points='1210 900 971 687 725 900'/%3E%3Cpolygon fill='%23880088' points='943 900 1210 900 971 687'/%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        } */
    </style>
@endpush

@push('scripts')

    <script>
        $("#blog-content .card").hover(
            function () {
                $(this).parent().parent().attr("class", "row align-items-center");
                $(this).attr("class", "card shadow");
                $(this).children().last().show('200');
            },
            function () {
                $(this).parent().parent().attr("class", "row align-items-between");
                $(this).attr("class", "card");
                $(this).children().last().hide('200');
            }
        );

        $(".about .container .row:odd").attr("class", "row h-100 align-items-center flex-row-reverse text-right");
        
        // $(".about").hide();
        // $(".about:first-child").show();

        $(".next").click(function (e) { 
            e.preventDefault();
            $(this).parent().hide();
        });
    </script>
@endpush