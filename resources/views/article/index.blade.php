@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@section('content')
<div id="blog">
    <div class="container">
        <div class="row text-center h-50 justify-content-center align-items-center flex-row">
            <div class="col">
                <h1>Blog</h1>
                <p class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center">
    @foreach ($items as $item)
        <div class="col-md-4 mb-4">
            <div class="card text-left">

                <img class="card-img-top" src="{{url('storage/images/'.$item->image->url)}}" alt="{{$item->image->name}}">
                <div class="card-body">
                <h4 class="card-title">
                    <a href="{{route('article.show', $item->id)}}">{{$item->title}}</a>
                </h4>
                <p class="card-text">{!! Str::limit($item->description, 100) !!}</p>
                </div>
                <div class="card-footer">{{$item->user->name}}</div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection

@push('styles')
    <style>
        .card-footer 
        {
            display: none;
        }

        #blog {
            background: chartreuse;
            background-image: url('images/photo-1508963493744-76fce69379c0.jpg');
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