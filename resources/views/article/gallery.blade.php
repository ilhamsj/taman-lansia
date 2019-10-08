@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')

@php
    $img = \File::allFiles(public_path('images'));
@endphp

<section>
    <div class="container">
        <div class="row h-50 align-items-center justify-content-center text-center">
            <div class="col">
            <h3>
                Informasi
                <span class="text-primary">
                    @if ($items->count() > 0)
                        {{  Str::title($items->first()->category) }}
                    @else 
                        Tidak ditemukan
                    @endif
                </span>
            </h3>
            </div>
        </div>
    </div>
</section>

<div class="container py-4">
    <div class="card-columns">
        @foreach ($items as $item)
            <div class="card rounded" id="kegiatan{{ $item->id }}">
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