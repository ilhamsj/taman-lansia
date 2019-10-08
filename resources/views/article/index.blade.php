@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')
<section id="blog">
    <div class="container">
        <div class="row h-50 justify-content-center align-items-center">
            <div class="col">
                <h3 class="bg-light p-4 rounded" data-aos="slide-left">Blog <span class="text-primary">Taman Lansia An-Naba</span></h3>
            </div>
        </div>
    </div>
</section>

<div class="container py-4">
    <div class="row justify-content-center flex-row-reverse">
        <div class="col-md-4 mb-4">
            @include('include._sidebar')
        </div>

        <div class="col">
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-12 mb-4" data-aos="fade-up">
                        <div class="card shadow">
                            <img class="card-img-top" src="{{url('storage/images/'.$item->image)}}" alt="{{$item->image}}">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('article.show', $item->slug)}}">{{$item->title}}</a>
                                </h4>
                                <p class="">
                                    {{ Str::limit($item->description, 150)}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="">{{$item->user->name}}</a>  /
                                {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}} /
                                <a href="{{ route('article.category', $item->category) }}">{{$item->category}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12">
                    {{ $items->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        #blog {
            background: chartreuse;
            background-image: url('images/photo-1508963493744-76fce69379c0.jpg');
            background-size: cover;
            background-position: center;
        }

        .border-radius-20 {
            border-radius: 2rem;
        }
    </style>
@endpush