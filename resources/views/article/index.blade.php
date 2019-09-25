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
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-6 mb-4" data-aos="fade-up">
                        <div class="card">
                            <img class="card-img-top" src="{{url('storage/images/'.$item->image->url)}}" alt="{{$item->image->name}}">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('article.show', $item->id)}}">{{$item->title}}</a>
                                </h4>
                                <p class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                                    </small></p>
                            </div>
                            <div class="card-footer">{{$item->user->name}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <h6 class="card-subtitle text-muted">Subtitle</h6>
              </div>
              <img src="holder.js/600x400?auto=yes&random=yes" alt="">
              <div class="card-body">
                <p class="card-text">Text</p>
                <a href="#" class="card-link">Link 1</a>
                <a href="#" class="card-link">Link 2</a>
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