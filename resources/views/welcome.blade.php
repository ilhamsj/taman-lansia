@php
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
                <blockquote class="blockquote">
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
@endphp

@extends('layouts.master')
@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
@section('content')

<div class="blog">
<div class="container">
    <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-12 col-sm-8">
            <h1 class="dispay-2">Taman Lansia An-naba</h1>
            <p class="lead">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, quisquam tenetur tempore aliquid itaque quas natus excepturi eaque labore molestias mollitia atque quos, ducimus impedit ad vitae sunt perferendis! Pariatur?
            </p>
        </div>
    </div>
</div>
</div>

<div id="about-us">
@foreach ($about as $key => $value)    
<div class="container mb-4">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-md-10">
            <div id="{{ Str::slug($key) }}" class="card border-0 shadow" style="border-radius:1.25rem">
                <div class="row align-items-center no-gutters flex-row">
                    <div class="col-md-5 p-4 text-center welcome">
                        <img src="https://paperpillar.com/assets/images/crisp-works.png" class="img-fluid">
                    </div>
                    <div class="col-md">
                        <div class="card-body">
                            <h1>{{$key}}</h1>
                            @foreach ($value as $v)
                                <p class="card-text text-muted lead">
                                    {!! $v !!}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>

<section class="blog">
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
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card">
                    <img class="card-img-top" src="{{url('storage/images/'.$item->image->url)}}" alt="{{$item->image->name}}">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('article.show', $item->id)}}">{{$item->title}}</a>
                        </h4>
                        <p class="card-text">{!! Str::limit($item->description, 100) !!}</p>
                        <p class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                            </small></p>
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

        .blog {
            background-image: url('images/photo-1508963493744-76fce69379c0.jpg');
            background-attachment: fixed;
            background-size: cover;
        }

        h1 {
            font-weight: bold;
            font-family: auto;
            font-size: 3rem
        }

        .img-fluid-50 {
            max-width: 50%;
        }
        
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

        $(".next").click(function (e) { 
            e.preventDefault();
            $(this).parent().hide();
        });

        $('#perkenalan .row div').first().hide();
        
        $('.no-gutters:odd').addClass('flex-row-reverse');
    </script>
@endpush