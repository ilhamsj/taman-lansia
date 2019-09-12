@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a>
        
            <h4>{{$item->title}}</h4>
            <img src="{{$item->image->url}}" alt="" srcset="">
        
            <p>
                {!! $item->description !!}
            </p>
        
            <h5>Kategori</h5>
        
            @foreach ($item->blog as $blog)
                {{$blog->category->name}},
            @endforeach
        </div>
    </div>
</div>
@endsection