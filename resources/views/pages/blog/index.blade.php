@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')

<div class="container">
@forelse ($items as $item)
    <h4>{{$item->article->title}}</h4>
    {{$item->category->name}} <br/>
    {{$item->image->url}} <br/>
    @empty
        Tidak ada post
    @endforelse
</div>  

@endsection