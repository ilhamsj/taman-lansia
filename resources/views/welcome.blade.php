@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@php
    $items = [
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

@section('content')

@foreach ($items as $key => $value)
<div id="{{Str::slug($key)}}">
    <div class="container">
        <div class="row h-50 justify-content-center align-items-center flex-row-reverse">
            <div class="col-md-4">
                <img class="img-fluid" src="images/undraw_web_developer_p3e5.svg" alt="" srcset="">
            </div>
            <div class="col-md-5">
                <h2>{{$key}}</h2>
                @foreach ($value as $k => $v)
                <p class="lead">
                    {{Str::title($v)}}
                </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach

    <div class="container">
        <div class="row h-50 text-center justify-content-center align-items-center flex-row-reverse">
            <div class="col-md-9">
                <h2>Sasaran</h2>
                <div class="row align-items-center flex-row-reverse text-center">
                    @foreach ($items['Sasaran'] as $item)
                        <div class="col-md">
                            <p class="lead">{{$item}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row h-100 justify-content-center align-items-center flex-row-reverse">
            <div class="col-md-9">
                <h2 class="text-center">Standar Pengasuhan</h2>
                    @foreach ($items['Standar Pengasuhan'] as $item)
                        <p class="lead">{{Str::title($item)}}</p>
                    @endforeach
            </div>
        </div>
    </div>

<div id="faq">
    <div class="container">
        <div class="row mb-4 h-100 justify-content-center align-items-center flex-row-reverse">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body border-bottom">
                        <h4>FAQ</h4>
                    </div>
                    @foreach ($items as $key => $value)
                        <div class="card-header">
                            {{$key}}
                        </div>
                        <div class="card-body border-bottom">
                            <h4 class="card-title">{{$key}}</h4>
                            <p class="card-text">
                                <ul>
                                    @foreach ($value as $k => $v)
                                    <li>
                                        {!!$v!!}

                                    </li>

                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        .card-footer {
            display: none;
        }

        .bg-img {
            background-image: url();
        }

        .border-bottom-2px {
            color: tomato
        }
    </style>
@endpush

@push('scripts')
    <script>
        $('#tujuan .container .row').attr('class', 'row h-100 justify-content-center align-items-center flex-row-reverse');
        $('#perkenalan .container .row').attr('class', 'row h-100 justify-content-center align-items-center flex-row');
        $('#perkenalan .container .row .col-md-5').attr('class', 'col-md-9');
        $('#perkenalan .container .row .col-md-4').remove();
        $('#sasaran').remove();
        $('#standar-pengasuhan').remove();

        $("h2").attr("class", "py-2 border-bottom-2px");

        $(".card-header").click(function (e) { 
            e.preventDefault();
            $(this).next().slideToggle();
        });

        $('#faq .container .row .col-md-9 .card .card-body').hide()
        $('#faq .container .row .col-md-9 .card .card-body').first().show()


    </script>
@endpush