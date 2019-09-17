@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')
 
<div class="h-100" >
    <div id="blog">
        <div class="container">
            <div class="row text-center h-50 justify-content-center align-items-center flex-row">
                <div class="col">
                    <h1>{{$item->title}}</h1>
                    Oleh : <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a> |
                        
                    Kategori :
                    @foreach ($item->blog as $blog)
                        <a href="">{{$blog->category->name}},</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p class="lead">
                        {!! $item->description !!}
                    </p>

                    <div class="mt-4">
                        <h3>Kategori</h3>
                        @foreach ($item->blog as $blog)
                            <a href="">{{$blog->category->name}},</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
            #blog {
            /* background: tomato; */
            background-image: url('images/photo-1508963493744-76fce69379c0.jpg');
            background-size: cover;
        }
    </style>
@endpush