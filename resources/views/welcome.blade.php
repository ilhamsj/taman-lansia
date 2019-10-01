@extends('layouts.master')
@section('title', 'Welcome')
@section('content')

<div class="blog">
    <div class="container">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-sm-10">
                <div class="card cover border-0">
                    <div class="card-body">
                        <h1 data-aos="slide-left" class="dispay-2">Taman Lansia An-naba</h1>
                        <p data-aos="slide-right" class="lead">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, quisquam tenetur tempore aliquid itaque quas natus excepturi eaque labore molestias mollitia atque quos, ducimus impedit ad vitae sunt perferendis! Pariatur?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    $img = \File::allFiles(public_path('images'));
@endphp

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($img as $value)
                        <img class="swiper-slide img-fluid" src="http://an-naba.test/images/5d8ec83c315f3.jpeg" alt="" srcset="">
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>


<div id="about-us">
@foreach ($about as $key => $value)
<div data-aos="zoom-in" class="container mb-4">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-md-10">
            <div id="{{ Str::slug($key) }}" class="card border-0 shadow" style="border-radius:1.25rem">
                <div class="row align-items-center no-gutters flex-row">
                    <div class="col-md-5 p-4 text-center welcome">
                            <img src="{{ secure_asset('images/lifecycle-works.png') }}" class="img-fluid">
                    </div>
                    <div class="col-md">
                        <div class="card-body">
                            <h1 data-aos="slide-down">{{$key}}</h1>
                            @foreach ($value as $v)
                                <p data-aos="flip-up" class="card-text text-muted lead">
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

<div class="container">
    <div class="row ">
        <div class="col">
            <h1 data-aos="fade-up">Kegiatan Terbaru</h1>
            <p  data-aos="fade-up" class="lead">
                @if (count($items) != null)
                    <a href="{{route('article.show', $items->first()->slug)}}">{{$items->first()->title}}</a>
                    <span class="text-muted">{!! Str::limit($items->first()->description, 150) !!}</span>
                @endif
            </p>
        </div>
    </div>
</div>

<section id="blog-content">
    <div class="container py-4">
        <div class="row align-items-between justify-content-center">
            @foreach ($items as $item)
                <div class="col-12 col-md-4 mb-4" data-aos="fade-up">
                    <div class="card">
                        <img class="card-img-top" src="{{url('storage/images/'.$item->image)}}" alt="{{$item->image}}">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('article.show', $item->slug)}}">{{$item->title}}</a>
                            </h4>
                            <p class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                                </small></p>
                        </div>
                        <div class="card-footer collapse">{{$item->user->name}}</div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12 text-center">
                <a data-aos="fade-up" href="{{route('article.index')}}" class="btn btn-outline-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<hr>

<div class="container py-4">
    <div class="row h-50 align-items-center justify-content-center">
        <div class="col">
            <div class="card shadow border-0" style="border-radius:1.25rem">
                <div class="row align-items-center no-gutters flex-row">
                    <div class="col-md-3 p-4 text-center">
                        <img src="https://img.icons8.com/bubbles/2x/worldwide-location.png" class="img-fluid">
                    </div>
                    <div class="col-md">
                        <div class="card-body">
                            <h1>Lokasi Kegiatan Taman Lansia An-Naba</h1>
                            Desa Tanggulangin RT 03 RW 08 Kelurahan Genjahan, Kecamatan Ponjong Kabupaten Gunungkidul Daerah Istimewa Yogyakarta Indonesia
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        .blog {
            background-image: url('images/hussain-ibrahim-cozpTyRDIwI-unsplash.jpg');
            background-attachment: fixed;
            background-size: cover;
        }

        .cover {
            background-image: linear-gradient(225deg,#0abac2,#b2de94);
            border-radius: 1.25rem;
            opacity: 0.8;
        }

        h1 {
            font-weight: bold;
            /* font-family: auto; */
            font-size: 2.5rem
        }

        .img-fluid-50 {
            max-width: 50%;
        }        

        .card-img-overlay .card-body {
            background-color: rgba(0,0,0,.5);
        }
    </style>
@endpush

@push('scripts')
    <script>
        new Swiper('.swiper-container', {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            cssMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
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
        

        function resize() {
            if ($(window).width() <= 768) {
                $('#tujuan').addClass('mt-4');
                $('.welcome').css('border-radius', '1rem 1rem 0 0');
            } else {
                $('#tujuan').removeClass('mt-4');
                $('.welcome').css('border-radius', '1rem 0 0 1rem');
                $('.no-gutters:odd .welcome').css('border-radius', '0 1rem 1rem 0');
            }
        }

        $(document).ready(function () {
            resize();
            $(window).resize(resize);
        });
    </script>
    <script>
        $('.gallery').hover(function () {
                $(this).find('.card-body').slideToggle();
            }, function () {
                $(this).find('.card-body').slideToggle();
            }
        );
    </script>
@endpush