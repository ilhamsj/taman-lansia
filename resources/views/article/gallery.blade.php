@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')
<div class="container py-4">
    <div class="card-columns">
        @foreach ($items as $item)
            <div id="kegiatan{{ $item->id }}" class="card">
                <img src="{{ secure_asset('storage/images/'.$item->image) }}" class="card-img-top"> 
                <div class="card-img-overlay d-flex align-items-end p-0">
                    <div class="card-body collapse kegiatan{{$item->id}}">
                        <h5 class="card-title">
                            <a href="{{ route('article.show', $item->slug)}}" class="text-white">
                                {{$item->title}}
                            </a>
                        </h5>
                    </div>
                </div>   
            </div>
        @endforeach
    </div>
</div>

@endsection

@push('styles')
    <style>
        .card-img-overlay .card-body {
            background-color: rgba(0,0,0,.5);
        }
    </style>
@endpush

@push('scripts')
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