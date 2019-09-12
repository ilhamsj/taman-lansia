@extends('layouts.master')

@section('title', 'Blog '.$item->article->title)
    
@section('content')

    <h3>
        <a href="{{ route('blog.show', $item->id) }}">{{$item->article->title}}</a>
    </h3>
    by {{$item->user->name}} <br/>
    category : {{$item->category->name}} <br/>
    image : {{$item->image->url}} <br/>
    
    <p>
        {{$item->article->description}} 
    </p>
@endsection