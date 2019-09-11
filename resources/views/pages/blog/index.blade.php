@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')

@forelse ($items as $item)
    {{$item->user->name}}
    <h3>{{$item->article->title}}</h3>
@empty
    
@endforelse

@endsection