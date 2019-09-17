@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@section('content')

@foreach ($items as $item)
<div id="blog">
    <div class="container">
        <div class="row text-center h-50 justify-content-center align-items-center flex-row">
            <div class="col">
                <h1>{{Str::title($items->first()->name)}} : {{count($item->blog)}}</h1>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center">
            @foreach ($item->blog as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" data-src="{{$blog->article->image->url}}" alt="{{$blog->article->image->name}}">
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('article.show', $blog->article->id)}}">{{$blog->article->title}}</a>
                        </h4>
                        <p class="card-text">{!! Str::limit($blog->article->description, 100) !!}</p>
                        </div>
                        <div class="card-footer">{{$blog->article->user->name}}</div>
                    </div>
                </div>
            @endforeach
    </div>
</div>

@endforeach
@endsection

@push('styles')
    <style>
        .card-footer 
        {
            display: none;
        }

        #blog {
            background: chartreuse;
            background-image: url('../images/photo-1508963493744-76fce69379c0.jpg');
            background-size: cover;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(".card").hover(
            function () {
                $(this).attr("class", "card shadow");
                $(this).children().last().show('100');
            },
            function () {
                $(this).attr("class", "card");
                $(this).children().last().hide('100');
            }
        );
    </script>
@endpush