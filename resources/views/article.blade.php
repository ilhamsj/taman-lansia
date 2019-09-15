@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@section('content')
    <div class="container">
        <div class="row">
        @foreach ($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card text-left">
                  <img class="card-img-top" src="{{$item->image->url}}" alt="{{$item->image->name}}">
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
    </style>
@endpush