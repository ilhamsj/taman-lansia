@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')
 
<div class="show-cover">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center flex-row">
            <div class="col-11 col-sm cover p-4">
                <h1 class="display-3">{{$item->title}}</h1>
                <div class="row">
                    <div class="col-6 col-sm-3 col-md-2 mb-2">
                        <span class="text-muted">Oleh</span> <br/>
                        <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a>
                    </div>
                    <div class="col-6 col-sm-3 col-md-2 mb-2">
                        <span class="text-muted">Kategori</span> <br/>
                        <a href="">{{$item->category}}</a>
                    </div>
                    <div class="col-6 col-sm-3 col-md-2 mb-2">
                        <span class="text-muted">Published</span> <br/>
                        {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}} 
                    </div>
                    <div class="col-6 col-sm-3 col-md-2 mb-2">
                        <span class="text-muted">Updated</span> <br/>
                        {{\Carbon\Carbon::parse($item->updated_at)->format('d M Y')}} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container py-4">
        <div class="row">
            <div class="col-11 col-sm-8">
                <p>
                    {!! $item->description !!}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        .show-cover {
            background-image: url("{{secure_asset('storage/images/'.$item->image)}}");
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .cover {
            /* background: beige; */
            background-image: linear-gradient(225deg,#0abac2,#b2de94);
            opacity: 0.8;
            border-radius: 1.25rem;
        }
    </style>
@endpush