@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')

<div class="container py-4">
    <div class="card-columns">
        @foreach ($items as $item)
            <div class="card" id="kegiatan{{ $item->id }}">
                <img src="{{ secure_asset('storage/images/'.$item->image) }}" class="card-img-top"> 
                <div class="card-img-overlay d-flex align-items-end p-0">
                    <div class="card-body collapse kegiatan{{$item->id}}">
                        <a href="{{ route('article.show', $item->slug)}}" class="text-white">
                            {{$item->title}}
                        </a>
                    </div>
                </div>   
            </div>
        @endforeach
    </div>
</div>

@php
    $img = \File::allFiles(public_path('images'));
@endphp

<div class="container mb-4">
    <div class="row">
        <div class="col">
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

@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <style>
        .card-img-overlay .card-body {
            background-color: rgba(0,0,0,.5);
        }

        .zoom {
            height: auto;
            overflow: hidden;
        }

        /* zoom rotate  */
        .zoom-rotate img {
            transition: transform .5s ease-in-out;
        }
        .zoom-rotate:hover img {
            transform: scale(2) rotate(25deg);
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
        $('nav').removeClass('fixed-top');
        $('.card').hover(function () {
                $(this).find('.card-body').slideToggle();
            }, function () {
                $(this).find('.card-body').slideToggle();
            }
        );
    </script>
@endpush