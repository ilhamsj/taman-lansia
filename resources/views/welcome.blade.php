@extends('layouts.master')
@section('title', 'Welcome')
@section('content')

    <div class="swiper-container mb-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="img-fluid" data-src="holder.js/1400x500?auto=yes&random=yes&textmode=exact" alt="" srcset="">
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" data-src="holder.js/1400x500?auto=yes&random=yes&textmode=exact" alt="" srcset="">
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" data-src="holder.js/1400x500?auto=yes&random=yes&textmode=exact" alt="" srcset="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h3>Taman Lansia An-Naba</h3>
            </div>
            <div class="col">
                <div class="card shadow border-0 rounded">
                    @if (count($items) != null)
                    <div class="row align-items-center no-gutters flex-row">
                        <div class="col-md-4 p-4 text-center">
                            <img src="{{url('storage/images/'.$items->first()->image)}}" class="img-fluid shadow">
                        </div>
                        <div class="col-md">
                            <div class="card-body">
                                <h1>
                                    {{$items->first()->title}}
                                </h1>
                                <p class="lead">
                                    {!! Str::limit($items->first()->description, 150) !!}
                                </p>
                                <a href="{{route('article.show', $items->first()->slug)}}" class="btn btn-primary">
                                    Read More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="blog-content">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 my-4">
                    <h3>Berita Terbaru</h3>
                </div>
                @foreach ($berita as $item)
                    <div class="col-12 col-sm-4 mb-4" data-aos="fade-up">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <img class="img-fluid shadow" src="{{url('storage/images/'.$item->image)}}" alt="{{$item->image}}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$item->title}}
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                                    </small>
                                </p>
                                <a href="{{route('article.show', $item->slug)}}" class="btn btn-primary btn-sm shadow">
                                    Read More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-right">
                    <a href="" class="btn btn-primary btn-sm shadow">
                        Tampilkan lebih banyak <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-content">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 my-4">
                    <h3>Kegiatan</h3>
                </div>
                @foreach ($kegiatan as $item)
                    <div class="col-12 col-sm-4 mb-4" data-aos="fade-up">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <img class="img-fluid shadow rounded" src="{{url('storage/images/'.$item->image)}}" alt="{{$item->image}}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$item->title}}
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                                    </small>
                                </p>
                                <a href="{{route('article.show', $item->slug)}}" class="">
                                    Read More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-right">
                    <a href="" class="btn btn-primary btn-sm shadow">
                        Tampilkan lebih banyak <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

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