@extends('layouts.master')

@section('title', $item->title)
    
@section('content')
 
<div>
    <div class="container">
        <div class="row h-70 justify-content-center align-items-center flex-row">
            <div class="col-11 col-sm cover p-4 jello animated">
                <h1 class="display-3">{{$item->title}}</h1>
            </div>
        </div>
    </div>
</div>

<div class="position-relative" style="top:-55px; bottom:0">
    <div class="container py-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-12">
                <div class="card border-radius shadow">
                    <div class="card-body">
                        <span class="text-muted">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}</span>
                        <h4 class="card-title">{{ $item->title }}</h4>
                        <p class="card-text">
                            {!! $item->description !!}
                        </p>
                        <footer class="blockquote-footer">
                            <a href="">{{$item->user->name}}</a> at
                            <cite title="Source Title"><a href="{{ route('article.category', $item->category)}}" class="card-link">{{$item->category}}</a></cite>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        .card-title {color: #6c63ff}
        .show-cover {
            background-image: url("{{secure_asset('storage/images/'.$item->image)}}");
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .cover {
            background-image: linear-gradient(225deg,#0abac2,#b2de94);
            border-radius: 1.25rem;
            opacity: 0.8;
        }

        .border-radius {
            border-radius: 1rem;
        }
    </style>
@endpush