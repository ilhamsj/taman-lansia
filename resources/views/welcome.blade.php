@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@php
    $items = [
        'Tujuan' => [
            '0' => 'Memberi wadah serta mengkondisikan perangkat untuk menata usia senja yang lebih berkualitas, baik dalam beribadah maupaun mengoptimalkan kemanfaatan hidupnya',
        ],
        'Perkenalan' => [
            '0' => 'Taman Lansia (TL) ala An-Naba’ adalah tempat pembelajaran, pendidikan, pelatihan, pendampingan bagi santri-santri USIA SENJA, untuk memperdalam agama, mempersiapkan diri menghadapi akhir hayat insya Alloh menuju husnul khotimah. Tidaklah dikatakan baik, meski awalnya baik, kalau akhirnya buruk. Tidaklah dikatakan buruk, meski awalnya buruk, kalau akhirnya baik. Sunguh akhir itu lebih baik dari permulaan.',
            '1' => 'TL An-Naba’ bukan panti jompo, bukan panti wreda. TL An-Naba’ merupakan wadah komunitas yang mengakomodasi santri usia senja. Santri usia muda mempersiapkan hidup; santri usia senja mempersiapkan mati. Santri usia senja bukan hanya yang dhuafa, karena bisa saja ia sukses duniawi, namun merasa miskin ukhrowi.',
            '2' => 'Lelaki anshar bertanya kepada Rosulullah SAW : Ya Rosulullah, mukmin manakah yang paling utama ? Beliau menjawab: Yang paling baik akhlaknya di antara mereka. Mukmin manakah yang paling cerdas ?, tanya lelaki itu lagi; Beliau menjawab : Orang yang paling banyak mengingat mati dan paling baik persiapanya untuk kehidupan setelah mati. Mereka itulah oran-orang yang cerdas” (HR. Ibnu Majah No. 4259, dihasankan Asy-Syaih Al-Albani ra dalam Ash-Shahihah No. 1384)',
        ],
        'Motto & Motivasi' => [
            '0' => 'mempersiapkan insan “utama dan cerdas di usia senja”',
        ],
        'Sasaran' => [
            '0' => 'Muslim laki-laki maupun perempuan',
            '1' => 'Usia 50 tahun ke atas',
            '2' => 'bisa beraktifitas fisik maupun fikir',
        ],
        'STANDAR PENGASUHAN' => [
            '0' => 'mengelola dan mengasuh santri-santri usia senja seperti berbakti kepada orang tua sendiri, yaitu standar BIRUL WALIDAIN (berbakti kepada kedua orang tua).',
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
<div id="{{$key}}" class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row h-100 justify-content-center align-items-center flex-row">
                    <div class="col-md-12 text-center">
                        <h5>{{$key}}</h5>
                        @if (count($value) == 1)
                            @foreach ($value as $k => $v)
                            <p class="display-6">
                                {{Str::title($v)}}
                            </p>
                            @endforeach
                        @else
                        <div class="row">
                            @foreach ($value as $k => $v)
                            <div class="col">
                                <p class="lead">
                                    {{Str::title($v)}}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

@push('styles')
    <style>
        .card-footer {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $('#Tujuan').attr('class', 'bg-ws');
    </script>
@endpush