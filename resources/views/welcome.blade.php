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

<div class="blog">
    <div class="container">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-sm-10">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($img as $value)
                            <img class="swiper-slide img-fluid" data-src="holder.js/1110x200?random=yes&textmode=exact&" alt="" srcset="">
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
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
        <div class="row h-50">
            <div class="col">
                <h1 data-aos="fade-up">Kegiatan Terbaru</h1>
                <p  data-aos="fade-up" class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <style>
        #blog-content .card-footer 
        {
            display: none;
        }

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
            font-family: auto;
            font-size: 3rem
        }

        .img-fluid-50 {
            max-width: 50%;
        }        
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            }
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
@endpush