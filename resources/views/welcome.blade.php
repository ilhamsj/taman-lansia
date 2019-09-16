@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@php
    $items = [
        'Tujuan' => [
            '0' => 'Memberi wadah serta mengkondisikan perangkat untuk menata usia senja yang lebih berkualitas, baik dalam beribadah maupaun mengoptimalkan kemanfaatan hidupnya',
        ],
        'Perkenalan' => [
            '0' => 'Taman Lansia An-Naba’ adalah tempat pembelajaran, pendidikan, pelatihan, pendampingan bagi santri-santri USIA SENJA, untuk memperdalam agama, mempersiapkan diri menghadapi akhir hayat insya Alloh menuju husnul khotimah',
            '1' => 'Taman Lansia An-Naba’  bukan panti jompo, bukan panti wreda. TL An-Naba’ merupakan wadah komunitas yang mengakomodasi santri usia senja. Santri usia muda mempersiapkan hidup; santri usia senja mempersiapkan mati. Santri usia senja bukan hanya yang dhuafa, karena bisa saja ia sukses duniawi, namun merasa miskin ukhrowi.',
        ],
        'Introduction' => [
            '0' => 'Lelaki Anshar Bertanya Kepada Rosulullah Saw : Ya Rosulullah, Mukmin Manakah Yang Paling Utama ? Beliau Menjawab: Yang Paling Baik Akhlaknya Di Antara Mereka. Mukmin Manakah Yang Paling Cerdas ?, Tanya Lelaki Itu Lagi; Beliau Menjawab : Orang Yang Paling Banyak Mengingat Mati Dan Paling Baik Persiapanya Untuk Kehidupan Setelah Mati. Mereka Itulah Oran-Orang Yang Cerdas” (Hr. Ibnu Majah No. 4259, Dihasankan Asy-Syaih Al-Albani Ra Dalam Ash-Shahihah No. 1384)',
        ],
        'Motto & Motivasi' => [
            '0' => 'mempersiapkan insan “utama dan cerdas di usia senja”',
        ],
        'Sasaran' => [
            '0' => 'Muslim laki-laki maupun perempuan',
            '1' => 'Usia 50 tahun ke atas',
            '2' => 'bisa beraktifitas fisik maupun fikir',
        ],
        'Standar Pengasuhan' => [
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
        <div class="row h-100 justify-content-center align-items-center flex-row">
            <div class="col-md-12 text-center">
                <h2>{{$key}}</h2>
                @if (count($value) == 1)
                    @foreach ($value as $k => $v)
                    <p class="display-6">
                        {{Str::title($v)}}
                    </p>
                    @endforeach
                @else
                <div class="row justify-content-center align-items-center flex-row">
                    @foreach ($value as $k => $v)
                    <div class="col-md align-self-stretch">
                        <div class="card">
                            <div class="card-body">
                                <p class="lead">
                                    {{Str::title($v)}}
                                </p>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
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