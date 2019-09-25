@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')
 
<div class="h-100" >
    <div class="show-cover">
        <div class="container">
            <div class="row text-center h-50 justify-content-center align-items-center flex-row">
                <div class="col-md-8">
                    <h1>{{$item->title}}</h1>
                    Oleh : <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a> |
                        
                    Kategori : {{$item->category}}
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-8">
                    <p class="lead">
                        {!! $item->description !!}
                    </p>

                    <div class="mt-4">
                        <h3>Kategori</h3>
                        {{$item->category}}
                    </div>
                </div>
                <div class="col">
                    <img class="img-fluid rounded shadow" src="{{ secure_asset('storage/images/'.$item->image) }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .show-cover {
            background-image: url('../images/photo-1508963493744-76fce69379c0.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush