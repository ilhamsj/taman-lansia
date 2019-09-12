@extends('layouts.master')

@section('title', 'Mempersiapkan insan utama dan cerdas di usia senja')
    
@section('content')
    <div class="container">
        <div class="row">
        @foreach ($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card text-left">
                  <img class="card-img-top" src="{{$item->image->url}}" alt="">
                  <div class="card-body">
                    <h4 class="card-title">{{$item->title}}</h4>
                    <p class="card-text">{{Str::limit($item->description, 150)}}</p>
                  </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection