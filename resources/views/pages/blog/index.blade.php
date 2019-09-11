@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')

@forelse ($items as $item)
    <h3>
        {{$item->article->title}}
    </h3>
    {{$item->user->name}},
    {{$item->category->name}},
    {{$item->user->name}},
    {{$item->image->url}},
@empty
    
@endforelse

@endsection