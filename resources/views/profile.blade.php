@extends('layouts.master')
@section('title', 'Welcome')
@section('content')

<div id="about-us">
@foreach ($about as $key => $value)
<div data-aos="zoom-in" class="container mb-4">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-md-12">
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