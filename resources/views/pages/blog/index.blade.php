@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')

@forelse ($items as $item)
    <h3>
        <a href="{{ route('blog.show', $item->id) }}">{{$item->article->title}}</a>
    </h3>
    {{$item->user->name}} <br/>
    {{$item->category->name}} <br/>
    {{$item->user->name}} <br/>
    {{$item->image->url}} <br/>
@empty
    
@endforelse

@endsection