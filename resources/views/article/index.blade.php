@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@section('content')
<div id="blog">
    <div class="container">
        <div class="row text-center h-100 justify-content-center align-items-center flex-row">
            <div class="col">
                <h1 class="animated infinite bounce delay-2s">Blog</h1>
                <p class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nisi sunt, dicta perspiciatis consequuntur nulla animi dolorem reprehenderit placeat pariatur officia minima eum neque aut et aliquid veritatis sapiente atque?
                </p>
                <a href="" class="btn btn-primary">
                    <i data-feather="plus-square"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row justify-content-center flex-row-reverse">
        <div class="col-md-4 mb-4">
<div class="card">
    <div class="card-header">
        <p class="card-text">Text</p>
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($items as $item)
            <li class="list-group-item">{{$item->title}}</li>
        @endforeach
    </ul>
</div>

        </div>
        <div class="col">
            <div class="row">
                <div class="col-12 mb-4">
                    Update Terbaru
                </div>
                @foreach ($items as $item)
                    <div class="col-12 mb-4" data-aos="fade-up">
                        <div class="card shadow">
                            <img class="card-img-top" src="{{url('storage/images/'.$item->image)}}" alt="{{$item->image}}">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('article.show', $item->slug)}}">{{$item->title}}</a>
                                </h4>
                                <p class="">
                                    {{$item->description}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="">{{$item->user->name}}</a>  /
                                {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}} /
                                <a href="">{{$item->category}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
        }

        .border-radius-20 {
            border-radius: 2rem;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ secure_asset('js/masonry.pkgd.min.js') }}"></script>
    <script>
        $('img').click(function (e) { 
            e.preventDefault();
            $(this).attr('data-aos', 'zoom-out');
        });
    </script>
@endpush